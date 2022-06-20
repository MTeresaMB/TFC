<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/28808fbfb0.js" crossorigin="anonymous"></script>    <link rel="stylesheet" href='{{ asset('resources\sass\dashboard\dashboard.css') }}'>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href='{{ asset('resources\sass\sidebar\sidebar.css') }}'>
    <link rel="stylesheet" href='{{ asset('resources\sass\header\header.css') }}'>
    <link rel="stylesheet" href='{{ asset('resources\sass\admin\admin.css') }}'>
	<title>StoryFactory - Admin Panel</title>
</head>
<body>
    <div class="grid-container">
        <div class="menu-icon">
            <i class="fas fa-bars header__menu"></i>
        </div>

        <header class="header">
            @include('.templates.headerUser.headerUser')
        </header>

        <aside class="sidenav">
            @include('.templates.sidebar.sidebarAdmin')
        </aside>

        <div class="wrapper">
            @foreach($users as $u)
            <div class="card_admin">
                <div class="card_load"><span class="iconify" data-icon="carbon:user-avatar-filled-alt"></span></div>
                <div class="card_load_extreme_title">{{$u->id_user }}</div>
                <div class="card_load_extreme_title">{{$u->username}}</div>
                <div class="card_load_extreme_title">{{$u->email}}</div>
                <div class="card_load_extreme_descripion">
                    <a class="link_delete" href="{{route("borrarUser",["id"=>$u->id_user])}}"><box-icon name='trash-alt' animation='spin' rotate='90'></box-icon></a>
                </div>
            </div>
                @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{asset("js/main.js")}}"></script>
    <script>
        const menuIconEl = $('.menu-icon');
        const sidenavEl = $('.sidenav');
        const sidenavCloseEl = $('.sidenav__close-icon');

        // Add and remove provided class names
    function toggleClassName(el, className) {
        if (el.hasClass(className)) {
            el.removeClass(className);
        } else {
            el.addClass(className);
        }
    }

        // Open the side nav on click
        menuIconEl.on('click', function() {
            toggleClassName(sidenavEl, 'active');
        });

        // Close the side nav on click
        sidenavCloseEl.on('click', function() {
            toggleClassName(sidenavEl, 'active');
        });

    </script>

</body>
</html>
