<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">
    </head>
    <body class="bg-gray-100 text-center">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

                <div id="app">
                    <test-component v-bind:articles = '{{json_encode($articles)}}'></test-component>
                    <prop-component v-bind:users ='{{json_encode($users)}}'></prop-component>
                    <grafic-component></grafic-component>
                    <grafic-pie-component></grafic-pie-component>
                    <ajax-component></ajax-component>

                </div>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
