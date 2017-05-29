<html>
    <head>
        <title>Simple User Crud - @yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- LOAD BOOTSTRAP -->
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap-theme.css">
        <link rel="stylesheet" href="/bower_components/sweetalert/dist/sweetalert.css">
        
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <h1>SIMPLE USER CRUD</h1>
            </div>
        </div>
        @section('sidebar')
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills">
                        <li role="presentation"><a href="{{ URL::to('users') }}">View Users</a></li>
                        <li role="presentation"><a href="{{ URL::to('users/create') }}">Create a new User</a></li>
                    </ul>
                </div>
            </div>
        @show

        <div class="container">
            @yield('content')
        </div>
        
        <!-- LOAD JS-->
        <script src="/bower_components/sweetalert/dist/sweetalert.min.js"></script>
        <script src="/bower_components/jquery/dist/jquery.js"></script>
        <script src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
        
        <script src="/js/app.js"></script>
        
    </body>
</html>