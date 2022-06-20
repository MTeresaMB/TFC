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
    <link rel="stylesheet" href='{{ asset('resources\sass\places\place.css') }}'>

	<title>StoryFactory - Edit your Places</title>
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
        <form action="{{route("assign_editar_place")}}" method="post" class="form__group">
            @csrf
            <input type="hidden" name="id" value="{{$f->id_place}}">
            <label for="name" class="form__label">Name of the place</label>
            <input type="text" id="name" name="name" value="{{$f->name}}" class="form__field" required>
            <label for="description" class="form__label">Description of the place</label>
            <input type="text" id="description" name="description" value="{{$f->description}}" class="form__field" required>
            <label for="history" class="form__label">History of the place</label>
            <input type="text" id="history" name="history" value="{{$f->history}}" class="form__field" required>
            <button class="button">Edit Place</button>
        </form>

    </div>
    <script src="{{asset("js/main.js")}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
