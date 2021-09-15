<!DOCTYPE html>
<html>
    <head>
        <title>laravel with spa</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    <body>
       <div id="app">
        <app-header class="mb-3"></app-header>
        <router-view class="mt-3"></router-view>
        </div>
       <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>