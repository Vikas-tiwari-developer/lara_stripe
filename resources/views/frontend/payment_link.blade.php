<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Name: {{ $name }}</p>
    <p>Payment Link : {{ $payment_link }}</p>

    <a href="{{ $payment_link }}" > Make Payment</a>
</body>
</html>