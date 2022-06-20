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
    <link rel="stylesheet" href='{{ asset('resources\sass\export\export.css') }}'>
	<title>StoryFactory - Export your Stories</title>
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
            @include('.templates.sidebar.sidebar')
        </aside>
        <div class="wrapper">
       	    @foreach($historias as $a)
                <div class="card_export">
                    <div class="card_load"><span class="iconify" data-icon="ant-design:export-outlined"></span></div>
                    <div class="card_load_extreme_title">{{$a->title}}</div>
                    <div class="card_load_extreme_descripion">
                        <button class="export" id="{{$a->id_manuscript}}">Export</button>
                    </div>
                </div>
	        @endforeach
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="{{asset("js/export.js")}}"></script>
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

</html>
