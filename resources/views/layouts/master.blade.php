<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', "Developer's Best Friend")
    </title>

    <meta charset='utf-8'>

    @yield('head')
</head>

<body>

    <header>
        <h1>This is a proof of concept of the master layout</h1>
    </header>

    <section>
        @yield('content')
    </section>

    @yield('body')

</body>
</html>
