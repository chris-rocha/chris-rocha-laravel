<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Chris Rocha</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Chris Rocha is a Tampa, Florida native that specializes in web development and graphic design.">
        <meta name="google-site-verification" content="AEtWKrxgD3wzvwVUHijRJ4-PhfhxqqUrbP9letoK_HM" />
        <link media="screen" href="https://fonts.googleapis.com/css?family=Noto+Sans+HK:400,900|Material+Icons&display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
    </head>
    <body>
        <div id="app">
            <router-view><h1>Hello world</h1></router-view>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
