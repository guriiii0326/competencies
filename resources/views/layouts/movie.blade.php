<!DOCCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title')</title>
    
    <script src="{{ secure_asset('js/app.js') }}"defer></script>
    
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ secure_asset('css/movie.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>