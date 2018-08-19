<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Orange Shabu</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="https://use.typekit.net/jzy1fau.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
            
        <!-- 引入样式 -->
        <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
        <!-- 引入组件库 -->
        <script src="https://unpkg.com/element-ui/lib/index.js"></script>
    </head>
    <body>
        <div id="app"></div>
        <!-- <script type="text/javascript" src="{{ asset('js/manifest.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script> -->
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
