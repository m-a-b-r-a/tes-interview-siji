<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - {{config('app.name')}}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/login/css/iofrm-theme13.css')}}">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Easiest Way to Manage Your Task</h3>
                    <img class="img-login" src="{{asset('vendor/login/images/jempol.png')}}" alt="jempol">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="page-links">
                            <a href="{{route('login')}}">Login</a><a href="register13.html" class="active">Register</a>
                        </div>
                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input class="form-control" type="text" name="name" placeholder="Name" required autofocus autocomplete="name">
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required value="{{old('email')}}">
                            <input class="form-control" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('vendor/login/js/jquery.min.js')}}"></script>
<script src="{{asset('vendor/login/js/popper.min.js')}}"></script>
<script src="{{asset('vendor/login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/login/js/main.js')}}"></script>
</body>
</html>
