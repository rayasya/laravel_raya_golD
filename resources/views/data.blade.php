<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passing Request</title>
    <style>
        body div {
            display: grid;
            place-content: center;
            height: 100vh;
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <marquee>Hai Selamat Datang! :)</marquee>
        <h1>Ini kata dari route : {{ $kata }}</h1>
        <h1>{{ $kata2 }}</h1>
    </div>
</body>

</html>
