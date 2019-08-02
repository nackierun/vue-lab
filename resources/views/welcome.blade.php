<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel + Vue</title>
    </head>
    <body>
        <div id="app">
            <example-component></example-component>
        </div>
        <form method="POST" action="/profile">
        @csrf
        <p>csrf</p>
        </form>
        <script type="text/javascript" src="js/app.js"></script>
    </body> 
</html>