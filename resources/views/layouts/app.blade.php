<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        <nav>
            @include('includes.nav')
        </nav>
        <main role="main" class="py-4">
            @yield('content')
        </main>
        <footer class="px-xl-5">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>
