<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MEOWS') }}</title>

   

      <!-- Fonts -->
  

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user-style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>
    <div id="app">
   

        <main id="user-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3 px-0">
                        <div class="container main-container vh-100">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}"></script>
    
    @stack('script')
</body>
</html>
