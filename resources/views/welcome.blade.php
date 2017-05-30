<!DOCTYPE html>
<html>
    <head>
        <title>Simple User CRUD</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <!-- LOAD BOOTSTRAP -->
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap-theme.css">
    
        <!-- DEFAULT LARAVEL PAGE STYLING -->
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                /*font-weight: 300;*/
                /*font-family: 'Lato';*/
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: left;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            
            .sub-title {
                font-size: 36px;
                margin-bottom: 24px;
            }
            
            .btn-started {
                font-weight: 500;
            }
        </style>
        
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Simple User CRUD</div>
                <div class="sub-title">OH SO SIMPLE.</div>
                <a href="/users" class="btn btn-default btn-started">Let's Get Started</a>
            </div>
        </div>
        
        <!-- LOAD JAVASCRIPT -->
        
        <!-- JQUERY -->
        <script src="/bower_components/jquery/dist/jquery.js"></script>
        
        <!--BOOTSTRAP-->
        <script src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
        
    </body>
</html>
