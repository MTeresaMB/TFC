<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href='{{ asset('resources\sass\manuscript\stories.css') }}'>

	<title>StoryFactory - Edit - Your Stories</title>
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

        <input type="hidden" name="id" id="id_text" value="{{$id}}">
        <input type="hidden" name="summary" id="summary" value="{{$summary}}">
        <input type="hidden" name="title" id="title" value="{{$title}}">
        <div id="editorjs"></div>
        <button id="saveBtn" class="button">
            Save
        </button>
    </div>

</body>


<!-- Imports -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/editorjs-paragraph-with-alignment@3.0.0"></script>
<script src="{{asset("js/editar_historias.js")}}"></script>
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
