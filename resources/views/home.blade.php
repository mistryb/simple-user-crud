@extends('layouts.main')

@section('title', 'Home')

@section('content')
    
    @foreach ($users as $user)
    <div class="row">
        <div class="col-md-6 well">
            <strong>{{ $user->username }}</strong>
            <p>{{ $user->email }}</p>
            <a class="btn btn-primary btn-sm" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit User</a>
            <a data-id="{{ $user->id }}" data-username="{{ $user->username }}" class="btn btn-danger btn-sm delete-user">Delete User</a>
        </div>
    </div>
    @endforeach
    
@endsection