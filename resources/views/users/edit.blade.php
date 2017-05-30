@extends('layouts.main')

@section('title', 'User Form')

@section('content')

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Edit User</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    
                    {{ Html::ul($errors->all()) }}

                    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
                    
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
                            {{ Form::label('address.address', 'Address') }}
                            {{ Form::text('address[address]', Input::old('address[address]'), array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('address.city', 'City') }}
                            {{ Form::text('address[city]', Input::old('address[city]'), array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('address.postal_code', 'Postal Code') }}
                            {{ Form::text('address[postal_code]', Input::old('address[postal_code]'), array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('address.province', 'Province') }}
                            {{ Form::text('address[province]', Input::old('address[province]'), array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('address.country', 'Country') }}
                            {{ Form::text('address[country]', Input::old('address[country]'), array('class' => 'form-control')) }}
                        </div>
                        
                        
                        <button type="submit" class="btn btn-default">Save</button>
                    </form>
                    
                    {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </section>
    
@endsection