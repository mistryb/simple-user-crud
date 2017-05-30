@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <header>
        <div class="container" id="maincontent" tabindex="-1">
            @foreach ($users as $user)
            <div class="row">
                <div class="col-lg-2">
                    <img class="img-responsive" src="img/profile.png" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="intro-text">
                        <h3>{{ $user->username }}</h3>
                        <span class="skills">{{ $user->email }}</span><br>
                        <a class="btn btn-primary btn-sm" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit User</a>
                        <a data-id="{{ $user->id }}" data-username="{{ $user->username }}" class="btn btn-danger btn-sm delete-user">Delete User</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3>Location</h3>
                        @if(!is_null($user->address))
                        <p>{{ $user->address->address }}
                            <br>{{ $user->address->city }}, {{ $user->address->province }} {{ $user->address->postal_code }}
                            <br>{{ $user->address->country }}.</p>
                            
                        @endif
                </div>
            </div>
            <hr>
            @endforeach
            
        </div>
    </header>
    
@endsection