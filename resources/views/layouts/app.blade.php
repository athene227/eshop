<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/7fd45d627d.js"></script>
    </head>
    <body>
        @stack('style')
        <header class="h-[76px] z-20">
            @include('layouts.navbar')
        </header>
        <main>
            @yield('content')
        </main>
        @stack('script')
    </body>
</html>
