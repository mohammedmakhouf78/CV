@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.headers.cards')

<div>
    <a href="{{route('profile.create')}}" class="btn btn-primary my-2">Create</a>
    <div class="table-responsive">
        <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col" class="sort" data-sort="budget">Job</th>
                    <th scope="col" class="sort" data-sort="status">Intro</th>
                    <th scope="col">Birthday</th>
                    <th scope="col" class="sort" data-sort="completion">Address</th>
                    <th scope="col" class="sort" data-sort="completion">phone1</th>
                    <th scope="col" class="sort" data-sort="completion">phone2</th>
                    <th scope="col" class="sort" data-sort="completion">ُEmail</th>
                    <th scope="col" class="sort" data-sort="completion">Delete</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($profiles as $profile)
                <tr>
                    <td class="budget">
                        {{$profile->name}}
                    </td>
                    <td class="budget">
                        {{$profile->job}}
                    </td>
                    <td class="budget">
                        {{$profile->intro}}
                    </td>
                    <td class="budget">
                        {{$profile->birthday}}
                    </td>
                    <td class="budget">
                        {{$profile->address}}
                    </td>
                    <td class="budget">
                        {{$profile->phone1}}
                    </td>
                    <td class="budget">
                        {{$profile->phone2}}
                    </td>
                    <td class="budget">
                        {{$profile->email}}
                    </td>
                    <td class="budget">
                        $2500 USD
                    </td>
                    <td class="budget">
                        <form action="{{route('profile.delete',$profile->id)}}" method="POST">
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