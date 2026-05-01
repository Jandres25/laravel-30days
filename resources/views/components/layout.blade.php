<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

<nav>
    <ul>
        <li>
            <x-nav-link href="/">Home</x-nav-link>
        </li>
        <li>
            <x-nav-link href="/about">About</x-nav-link>
        </li>
        <li>
            <x-nav-link href="/contact">Contact</x-nav-link>
        </li>
    </ul>
</nav>

{{ $slot }}

</body>
</html>
