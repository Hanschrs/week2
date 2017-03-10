<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gallery</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="css/animate.css">
        <!-- Styles -->
        <style>
            html, body {
                background: rgb(238,255,0);
                background: -moz-linear-gradient(left, rgba(238,255,0,0.6) 0%, rgba(255,141,0,0.6) 50%, rgba(255,0,0,0.6) 100%);
                background: -webkit-linear-gradient(left, rgba(238,255,0,0.6) 0%,rgba(255,141,0,0.6) 50%,rgba(255,0,0,0.6) 100%);
                background: linear-gradient(to right, rgba(238,255,0,0.6) 0%,rgba(255,141,0,0.6) 50%,rgba(255,0,0,0.6) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeff00', endColorstr='#ff0000',GradientType=0 );
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .seperenam-height{
            	height: 18vh;
            }

            .position-ref {
                position: relative;
                padding-top: 2em;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
            	margin-top: 350px;
            	margin-left: 0.5em;
                font-size: 86px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            smaller {
            	font-size: 0.7em;
            }

            .backbutton {
            	padding: 0.5em 0;
            	font-size: 2em;
            	background-color: rgba(32, 49, 55, 0.6);
            }

            .backbutton a {
            	color: white;
            	font-weight: bold;
            }

            .backbutton a:hover {
            	color: #E89C0C;
            	text-decoration: none;
            	transition-duration: 0.3s;
            }

            img{
                max-width: 400px;
                margin: 2em;
            }

            h1 {
                margin:0;
            }
        </style>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </head>
    <body>
        <div class="position-ref full-height text-center">
            <h1>GALLERY</h1>
        	<img src="{{asset('images/1.jpg')}}">
            <img src="{{asset('images/2.jpg')}}">
            <img src="{{asset('images/3.jpg')}}">
            <img src="{{asset('images/4.jpg')}}">
            <img src="{{asset('images/5.jpg')}}">
            <div class="text-center backbutton"><a href="{{ url('home') }}"><small>((</small> Home <small>))</small></a> </div>
        </div>
    </body>
</html>
