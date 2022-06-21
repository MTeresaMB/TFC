<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VEJX5EH2VG"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VEJX5EH2VG');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TRMHS97');</script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href='{{ asset('resources\sass\login_register\register.css') }}'>
    <title>StoryFactory - Sign up</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRMHS97"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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

            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
        </form>
    </div>
</body>
</html>
