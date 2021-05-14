@extends('admin.layouts.app')

@section('content')
@include('admin.layouts.headers.cards')

<div>
    @if (session()->has('success'))
    <div class="alert alert-success mt-4 p-4">
        {{session()->get('success')}}
    </div>
    @endif

    <form class="mt-4 p-4" method="POST" action="{{route('profile.store')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
            @error('name')
            <p class="text-danger">Invalid Name</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="job" class="form-label">Job</label>
            <input type="text" class="form-control" id="job" aria-describedby="emailHelp" name="job">
            @error('job')
            <p class="text-danger">Invalid Job</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="intro" class="form-label">Introduction</label>
            <input type="text" class="form-control" id="intro" aria-describedby="emailHelp" name="intro">
            @error('intro')
            <p class="text-danger">Invalid Introduction</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="birthday" aria-describedby="emailHelp" name="birthday">
            @error('birthday')
            <p class="text-danger">Invalid Birthday</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" aria-describedby="emailHelp" name="address">
            @error('address')
            <p class="text-danger">Invalid Address</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone1" class="form-label">Phone1</label>
            <input type="text" class="form-control" id="phone1" aria-describedby="emailHelp" name="phone1">
            @error('phone1')
            <p class="text-danger">Invalid Phone1</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone2" class="form-label">Phone2</label>
            <input type="text" class="form-control" id="phone2" aria-describedby="emailHelp" name="phone2">
            @error('phone2')
            <p class="text-danger">Invalid Phone2</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            @error('email')
            <p class="text-danger">Invalid Email</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @include('admin.layouts.footers.auth')
</div>
@endsection