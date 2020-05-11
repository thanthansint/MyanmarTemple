<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords"
            content="Myanmar, Buddhist, Temple, Religion, Social, Network, Community, Post, Event, Announvement">
        <meta name="description" content="A user friendly community website for Myanmar People">
        <meta name="author" content="Than, Than Sint">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MBT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <!-- Styles -->
        <link href="/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


        <style>
            html, body {
                background-color: #fff;
                /* color: #636b6f; */
                color: #1b5e20;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }

            .title {
                font-size: 74px;
            }

            .links > a {
                /* color: #636b6f; */
                color: #1b5e20;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 1000;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .logo-set {
                margin-top: 30px;
            }
            .logo {

                width: 250;
                height: 100;
            }
        </style>
    </head>
    <body>
        <div class="flex-center full-height">
            @if (Route::has('login'))
                <div class="top-left position-ref links col s12">
                    <a href="/loginAdmin">Admin Login</a>
                </div>
                <div class="top-right links col s12">
                    @auth
                        <a href="/home">Home</a>
                    @else
                        <a href="/login">Login</a>

                        @if (Route::has('register'))
                            <a href="/register">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content col s12">
                <div class="logo-set ">
                    <p class="welcome-title">Myanmar Buddhist Temple</p>
                    <img class="logo responsive-img" src="/image/kayawait.jpg" alt="pagoda logo">
                </div>
            </div>
        </div>
    </body>
</html>
