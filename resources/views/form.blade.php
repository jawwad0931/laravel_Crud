<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{ $title }}</h2>
    <form  action="{{ $url }}" method="post">
        @csrf
        <input type="text" name="name" value="{{ $customer->name }}">
        <input type="number" name="grade" value="{{ $customer->grade }}">
        <input type="submit" name="" id="">
    </form>
</body>
</html>