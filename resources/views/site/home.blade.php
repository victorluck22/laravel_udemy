<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h3>Bem Vindo ao Site</h3>
    <ul>
        <li>
            <a href="{{ route('site.index') }}"> Home</a>
        </li>
        <li>
            <a href="{{ route('site.about') }}">About</a>
        </li>
        <li>
            <a href="{{ route('site.contact') }}">Contact</a>
        </li>
    </ul>
</body>
</html>
