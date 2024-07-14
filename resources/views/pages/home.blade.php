<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Hello {{ $user }}, my old friend! </h1>

        @if (lcfirst($user) === "darkness")
        <h2>I've come to talk with you again...</h2>
        @endif
    </header>
</body>
</html>