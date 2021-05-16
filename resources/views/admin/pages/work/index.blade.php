@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.headers.cards')

<div>
    <a href="{{route('work.create')}}" class="btn btn-primary my-2">Create</a>
    <div class="table-responsive">
        <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col" class="sort" data-sort="budget">Description</th>
                    <th scope="col" class="sort" data-sort="budget">Delete</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($works as $work)
                <tr>
                    <td class="budget">
                        {{$work->name}}
                    </td>
                    <td class="budget">
                        {{$work->description}}
                    </td>
                    <td class="budget">
                        <form action="{{route('work.delete',$work->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('admin.layouts.footers.auth')
</div>
@endsection