<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lgas API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h3{
                text-align: center;
            }
            div{
                margin: 30px;
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>-->
        <div class="container">
            <div>
                <div>
                    <h1>
                        A simple API about all the 774 local governments and there respective states in nigeria.
                    </h1>
                </div>
                <hr>
                <div>
                    <h3>SHOW ALL LGA'S</h3>
                    <hr>
                    <b><u>URL</u></b><br>
                    /api/lgas
                    <br>
                    <br>
                    <b><u>Method</u></b><br>
                    get
                    <br>
                    <br>
                    <b><u>URL Parameters</u></b><br>
                    none
                    <br>
                    <br>
                    <b><u>Success Response</u></b><br>
                    Code:200
                    <br>
                    Content:
                    <br>
                    <code>
                    [{"lga":"Abadam","state":"Borno"},{"lga":"Abaji","state":"FCT"},{"lga":"Abak","state":"Akwa Ibom"},{"lga":"Abakaliki","state":"Ebonyi"},{"lga":"Aba North","state":"Abia"},{"lga":"Aba South","state":"Abia"},{"lga":"Abeokuta North","state":"Ogun"},{"lga":"Abeokuta South","state":"Ogun"},{"lga":"Abi","state":"Cross River"},{"lga":"Aboh Mbaise","state":"Imo"},{"lga":"Abua\/Odual","state":"Rivers"},{"lga":"Adavi","state":"Kogi"},{"lga":"Ado Ekiti","state":"Ekiti"}, …]
                    </code>
                    <br>
                    <br>
                    <b><u>Sample call</u></b><br>
                    <code>
                    $.ajax({
                    	    url: "/api/lgas",
                    	    dataType: "json",
                    	    type : "GET",
                    	    success : function(r) {
                    	      console.log(r);
                    	    }
                    });

                    </code>
                    <hr>
                    <h3>SHOW ALL STATES</h3>
                    <hr>
                    <b><u>URL</u></b><br>
                    /api/states
                    <br>
                    <br>
                    <b><u>Method</u></b><br>
                    get
                    <br>
                    <br>
                    <b><u>URL Parameters</u></b><br>
                    none
                    <br>
                    <br>
                    <b><u>Success Response</u></b><br>
                    Code:200
                    <br>
                    Content:
                    <br>
                    <code>
                    [{"state":"Abia"},{"state":"Adamawa"},{"state":"Akwa Ibom"},{"state":"Anambra"},{"state":"Bauchi"},{"state":"Bayelsa"},{"state":"Benue"},{"state":"Borno"},{"state":"Cross River"},{"state":"Delta"},{"state":"Ebonyi"},{"state":"Edo"},{"state":"Ekiti"},{"state":"Enugu"},{"state":"FCT"},{"state":"Gombe"},{"state":"Imo"},{"state":"Jigawa"},{"state":"Kaduna"},{"state":"Kano"},{"state":"Katsina"},{"state":"Kebbi"},{"state":"Kogi"},{"state":"Kwara"},{"state":"Lagos"},{"state":"Nasarawa"},{"state":"Niger"},{"state":"Ogun"},{"state":"Ondo"},{"state":"Osun"},{"state":"Oyo"},{"state":"Plateau"},{"state":"Rivers"},{"state":"Sokoto"},{"state":"Taraba"},{"state":"Yobe"},{"state":"Zamfara"}]
                    </code>
                    <br>
                    <br>
                    <b><u>Sample call</u></b><br>
                    <code>
                    $.ajax({
                    	    url: "/api/states",
                    	    dataType: "json",
                    	    type : "GET",
                    	    success : function(r) {
                    	      console.log(r);
                    	    }
                    });

                    </code>
                    <hr>
                    <h3>SHOW ALL LOCAL GOVERNMENTS IN STATES</h3>
                    <hr>
                    <b><u>URL</u></b><br>
                    /api/lgsinstate/:state
                    <br>
                    <br>
                    <b><u>Method</u></b><br>
                    get
                    <br>
                    <br>
                    <b><u>URL Parameters</u></b><br>
                    <b>Required:</b>state=[state]

                    <br>
                    <br>
                    <b><u>Success Response</u></b><br>
                    Code:200
                    <br>
                    Content:
                    <br>
                    <code>
                    [{"lga":"Agege","state":"Lagos"},{"lga":"Ajeromi-Ifelodu","state":"Lagos"},{"lga":"Alimosho","state":"Lagos"},{"lga":"Amuwo-Odofi","state":"Lagos"},{"lga":"Apapa","state":"Lagos"},{"lga":"Badagry","state":"Lagos"},{"lga":"Epe","state":"Lagos"},{"lga":"Eti Osa","state":"Lagos"},{"lga":"Ibeju-Lekki","state":"Lagos"},{"lga":"Ifako-Ijaiye","state":"Lagos"},{"lga":"Ikeja","state":"Lagos"},{"lga":"Ikorodu","state":"Lagos"},{"lga":"Kosofe","state":"Lagos"},{"lga":"Lagos Island","state":"Lagos"},{"lga":"Lagos Mainland","state":"Lagos"},{"lga":"Mushi","state":"Lagos"},{"lga":"Ojo","state":"Lagos"},{"lga":"Oshodi-Isolo","state":"Lagos"},{"lga":"Shomolu","state":"Lagos"},{"lga":"Surulere","state":"Lagos"}]
                    </code>
                    <br>
                    <br>
                    <b><u>Sample call</u></b><br>
                    <code>
                    $.ajax({
                    	    url: "/api/lgsinstate/lagos",
                    	    dataType: "json",
                    	    type : "GET",
                    	    success : function(r) {
                    	      console.log(r);
                    	    }
                    });

                    </code>
                </div>
            </div>
        </div>
    </body>
</html>
