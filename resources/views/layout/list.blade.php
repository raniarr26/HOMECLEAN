<html>
    <head>
        <title>@yield ('title', 'My App')</title>
    </head>
    <body>
        <header>
            @include('components.header')
        </header>
        <h1>List product</h1>
        <div class="container">
            <main>
                @yield('content')
            </main>
        </div>
    <footer>
        @include('components.footer')
    </footer>
    </body>
</html>