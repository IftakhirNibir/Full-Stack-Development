<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Navbar</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif;">

    @include('partials.navbar')

    @yield('main_content')

    @include('partials.footer')
</body>
</html>
