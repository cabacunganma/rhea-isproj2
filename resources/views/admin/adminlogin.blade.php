<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{asset('adminlogin/css/style.css')}}" rel="stylesheet"/>
    <!-- Styles -->
    <link href="{{asset('adminlogin/fonts/el_messiri/elMessiri-SemiBold.ttf')}}" rel="stylesheet"/>
    <link href="{{asset('adminlogin/fonts/montserrat/Montserrat-Regular.ttf')}}" rel="stylesheet"/>
    <link href="{{asset('adminlogin/fonts/montserrat/Montserrat-SemiBold.ttf')}}" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Style -->
    <link href="{{asset('adminlogin/css/style.css')}}" rel="stylesheet"/>

</head>

<body>

<div class="wrapper">
    <div class="inner">
        <div class="image-holder">
            <img src="adminlogin/images/registration-form-4.jpg" alt="">
        </div>
        <form action="">
            <h3>Login</h3>
            <div class="form-holder">
                <input type="text" placeholder="e-mail" class="form-control">
            </div>
            <div class="form-holder">
                <input type="password" placeholder="Password" class="form-control" style="font-size: 15px;">
            </div>
            <div class="form-login">
                <button>Login</button>
                <p><a href="#">forgot password?</a></p>
            </div>
        </form>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>

</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
</html>

