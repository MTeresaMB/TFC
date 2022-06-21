<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script src="https://kit.fontawesome.com/28808fbfb0.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href='{{ asset('resources\sass\sidebar\sidebar.css') }}'>
    <link rel="stylesheet" href='{{ asset('resources\sass\header\header.css') }}'>
    <link rel="stylesheet" href='{{ asset('resources\sass\figures\figure.css') }}'>
	<title>StoryFactory - Edit Your Characters</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRMHS97"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
	<div class="grid-container">

       <header class="header">
        @include('.templates.headerUser.headerUser')
       </header>

       <aside class="sidenav">
        @include('.templates.sidebar.sidebar')
       </aside>
        <form action="{{ route("assign_editar") }}" method="post" class="form__group">
            @csrf
            <input type="hidden" value="{{$f->id_figure}}" name="id">

            <label for="nameFigure" class="form__label">Name Figure</label>
            <input type="text" id="nameFigure" name="nameFigure" value="{{$f->nameFigure}}" class="form__field" required>

            <label for="biography" class="form__label">Biography</label>
            <input type="text" id="biography" name="biography" value="{{$f->biography}}" class="form__field" required>

            <label for="role" class="form__label">Role</label>
            <input type="text" id="role" name="role" value="{{$f->role}}" class="form__field" required>

            <label for="flaw" class="form__label">Flaw</label>
            <input type="text" id="flaw" name="flaw" value="{{$f->flaw}}" class="form__field" required>

            <label for="external_motivation" class="form__label">External_motivation</label>
            <input type="text" id="external_motivation" name="external_motivation" value="{{$f->external_motivation}}" class="form__field" required>

            <label for="internal_motivation" class="form__label">Internal_motivation</label>
            <input type="text" id="internal_motivation" name="internal_motivation" value="{{$f->internal_motivation}}" class="form__field" required>

            <label for="positive_traits" class="form__label">positive_traits</label>
            <input type="text" id="positive_traits" name="positive_traits" value="{{$f->positive_traits}}" class="form__field" required>

            <label for="negative_traits" class="form__label">negative_traits</label>
            <input type="text" id="negative_traits" name="negative_traits" value="{{$f->negative_traits}}" class="form__field" required>

            <label for="quirks_mannerisms" class="form__label">quirks_mannerisms</label>
            <input type="text" id="quirk_mannerisms" name="quirks_mannerisms" value="{{$f->quirks_mannerisms}}" class="form__field" required>

            <label for="motto" class="form__label">motto</label>
            <input type="text" id="motto" name="motto" value="{{$f->motto}}" class="form__field" required>

            <label for="build" class="form__label">build</label>
            <input type="text" id="build" name="build" value="{{$f->build}}" class="form__field" required>

            <label for="hair_color" class="form__label">hair_color</label>
            <input type="text" id="hair_color" name="hair_color" value="{{$f->hair_color}}" class="form__field" required>

            <label for="hair_style" class="form__label">hair_style</label>
            <input type="text" id="hair_style" name="hair_style" value="{{$f->hair_style}}" class="form__field" required>

            <label for="eye_color" class="form__label">eye_color</label>
            <input type="text" id="eye_color" name="eye_color" value="{{$f->eye_color}}" class="form__field" required>

            <label for="scars" class="form__label">scars</label>
            <input type="text" id="scars" name="scars" value="{{$f->scars}}" class="form__field" required>

            <button class="button">Change Character</button>
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
