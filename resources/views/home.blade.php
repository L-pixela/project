<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    @extends('layouts.app')

    @section('title', 'Home')

    @section('content')
    <h2>Welcome to the Home Page</h2>
    <p>This is the content of the home page.</p>
    @endsection
</body>
</html>