<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="css/animate.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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

            .box-kiri {
            	border-right: 5px solid #E89C0C;
            	background-image: url(images/hans.jpg);
            	/*background-attachment: local;*/
            	/*background-size: contain;*/
            	background-size: 100% auto;
    			background-repeat: no-repeat;
    			background-position: center;
            }

            .box-kanan {
            	background-color: rgba(32,55,55,0.9);
            }
			
			.flex-center {
                align-items: center;
                display: flex;
                justify-content: left;
            }

            .keterangan {
            	padding-left: 2em;
            	color: #E89C0C;
            	/*font-size: 2em;*/
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
        </style>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </head>
    <body>
        <div class="position-ref full-height col-md-6 box-kiri">
        	<div class="title wow fadeInUp animated" data-wow-delay="0s">H<smaller>ans</smaller><br>C<smaller>hristian</smaller><br>Y<smaller>ulianto</smaller></div>
        </div>
        <div class="position-ref full-height col-md-6 box-kanan" style="padding: 0;">
        	<div class="seperenam-height flex-center keterangan wow fadeInLeft animated" data-wow-delay=".3s"><h1>24 May 1995</h1></div>
        	<div class="seperenam-height flex-center keterangan wow fadeInLeft animated" data-wow-delay=".5s"><h2>hans_christian@windowslive.com</div>
        	<div class="seperenam-height flex-center keterangan wow fadeInLeft animated" data-wow-delay=".7s"><h3>@hanschrs</h3></div>
        	<div class="seperenam-height flex-center keterangan wow fadeInLeft animated" data-wow-delay=".9s"><h4>08113579229 / 081567904426</h4></div>
        	<div class="seperenam-height flex-center keterangan wow fadeInLeft animated" data-wow-delay="1.1s"><h5>Puri Widya Kencana J3/12</h5></div>
        	<div class="text-center backbutton"><a href="{{ url('home') }}"><small>((</small> Home <small>))</small></a> </div>
        </div>
    </body>
</html>
