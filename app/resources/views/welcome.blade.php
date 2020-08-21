<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Harry Potter Spell Database</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div class="btns">
                <a href="/">Search</a>
                <a href="/view" style="margin-right:0px;">Saved Entries</a>
        </div>
        <div id="app">
            @yield ('spells')
            @yield ('view')
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        #app{
            width:100%;
            height:100vh;
            background-image:url('img/background.jpg');
            background-size:cover;
            background-position:center;
            padding:50px;
            box-sizing:border-box;
        }
        *{
            margin:0px;
            padding:0px;
        }
        .btns{
            width:100%;
            text-align:center;
            padding:10px;
            box-sizing:border-box;
            position:fixed;
            bottom:0px;
            left:0px;
            background-color:#131313;
        }
        .btns a{
            color:white;
            margin-right:15px;
            font-size:20px;
        }
    </style>
</html>
