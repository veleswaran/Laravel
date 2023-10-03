<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Styles -->
        
    </head>
    <body>
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand"></a>
                @if (Route::has('login'))
                <form class="nav">
                    @auth
                    <div class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link text-white">Dashboard</a>
                    </div>
                    @else
                    <div class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-white">Log in</a>
                    </div>

                        @if (Route::has('register'))
                        <div class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                        </div>
                        @endif
                    @endauth
                </form>
                @endif
            </div>
        </nav>
          
    </body>
</html>
