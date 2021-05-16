@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.headers.cards')

<div>
    @if (session()->has('success'))
    <div class="alert alert-success mt-4 p-4">
        {{session()->get('success')}}
    </div>
    @endif

    <form class="mt-4 p-4" method="POST" action="{{route('work.store')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
            @error('name')
            <p class="text-danger">Invalid Name</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description">
            @error('description')
            <p class="text-danger">Invalid Description</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @include('admin.layouts.footers.auth')
</div>
@endsection