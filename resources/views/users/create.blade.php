@extends('layouts.main')

@section('title', 'User Form')

@section('content')
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Create a User</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
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
                    
                </div>
            </div>
        </div>
    </section>
    
@endsection