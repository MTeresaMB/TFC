<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='{{asset("resources\sass\app.css")}}'>
    <title>Document</title>
</head>
<body>
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Enter your email address">
        <input type="password" name="password" placeholder="Enter your password">
        <button>enter</button>
    </form>
</body>
</html>
