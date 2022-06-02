<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='{{ asset('resources\sass\login_register\register.css') }}'>
    <title>StoryFactory - Sign up</title>
</head>
<body>
    <div class="login-box">
        <h2 class="login-box-title">Register</h2>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>

            <div class="user-box">
                <input type="email" name="email" required>
                <label>Email address</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="user-box">
                <div><a href="{{ route('login') }}" class="register">Already registered? Sign In</a></div>

            </div>

            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a>
        </form>
    </div>
</body>
</html>
