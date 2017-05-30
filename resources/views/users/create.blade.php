@extends('layouts.main')

@section('title', 'User Form')

@section('content')

    {{ Html::ul($errors->all()) }}

    {{ Form::open(array('url' => 'users')) }}
    
    <form>
        <div class="form-group">
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('role', 'Role') }}
            {{ Form::select('user_roles_id', $roles) }}
        </div>
        
        <button type="submit" class="btn btn-default">Save</button>
    </form>
    
    {{ Form::close() }}
    
@endsection