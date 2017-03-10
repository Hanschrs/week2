<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #fff;*/
                background-image: url(images/bg-home.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                padding: 12em;
                text-align: center;
                /*background-color: rgba(255,255,255,0.2);*/
                background-color: rgba(0,0,0,0.4);
            }

            .title {
                font-size: 84px;
                color: #ffffff;
            }

            .title a {
                color: #E89C0C;
            }

            .links > a {
                /*color: #636b6f;*/
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            
            .bg-trans{
                background: rgb(238,255,0);
                background: -moz-linear-gradient(left, rgba(238,255,0,0.6) 0%, rgba(255,141,0,0.6) 50%, rgba(255,0,0,0.6) 100%);
                background: -webkit-linear-gradient(left, rgba(238,255,0,0.6) 0%,rgba(255,141,0,0.6) 50%,rgba(255,0,0,0.6) 100%);
                background: linear-gradient(to right, rgba(238,255,0,0.6) 0%,rgba(255,141,0,0.6) 50%,rgba(255,0,0,0.6) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeff00', endColorstr='#ff0000',GradientType=0 );
            }
        </style>

        <!-- JS -->
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height bg-trans">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Hans Christian Yulianto
                    <br>
                    <div class="wow fadeInUp animated" data-wow-delay=".3s">
                        <a href="{{ url('about') }}" style="padding-right: 0.6em;">About</a>
                        <a href="{{ url('gallery') }}" style="padding-left: 0.6em;">Gallery</a> 
                    </div>
                </div>
                <div class="links">
                    <a href="https://github.com/hanschrs">Github</a>
                    <a href="https://www.facebook.com/hanschrs">Facebook</a>
                    <a href="https://twitter.com/hanschrs">Twitter</a>
                    <a href="https://www.instagram.com/hanschrs/">Instagram</a>
                    <a href="https://www.youtube.com/watch?v=Y9vi9dcMgnE">Youtube</a>
                </div>
            </div>
        </div>
    </body>
</html>
