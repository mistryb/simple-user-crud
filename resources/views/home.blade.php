@extends('layouts.main')

@section('title', 'Home')

@section('content')
    
    @foreach ($users as $user)
    <div class="row">
        <div class="col-md-6 well">
            <strong>{{ $user->username }}</strong>
            <p>{{ $user->email }}</p>
            <a class="btn btn-primary btn-sm" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit User</a>
            <button type="button" class="btn btn-danger btn-sm">Delete User</button>
        </div>
    </div>
    @endforeach
    
@endsection