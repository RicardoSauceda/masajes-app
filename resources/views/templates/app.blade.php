<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://js.stripe.com/v3/"></script>
    <title>@yield('title')</title>
</head>

<body class=" flex flex-col min-h-screen bg-gray-50">
    <x-header-component title="Header" />
    @yield('main')
    <x-footer-component title="Footer" />
</body>

</html>