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
    <link rel="stylesheet" href='{{ asset('resources\sass\manuscript\stories.css') }}'>
    {{-- <a href="https://www.flaticon.com/free-icons/book" title="book icons">Book icons created by itim2101 - Flaticon</a> --}}
	<title>StoryFactory - Your Stories</title>
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

        <div class="wrapper">
            @foreach($historias as $a)
            <div class="card_book">
                <div class="card_load"><span class="iconify" data-icon="ph:books"></span></div>
                    <div class="card_load_extreme_title">{{$a->title}}</div>
                    <div class="card_load_extreme_descripion">
                        <a href="{{ route('create') }}"><box-icon type='solid' name='plus-circle' color="#2c354d"></box-icon></a>
                        <a href="{{route("editarHistorias",["id"=>$a->id_manuscript])}}"><box-icon name='edit' type='solid' color='#0f8d48'></box-icon></a>
                        <a href="{{route("borrarHistorias",["id"=>$a->id_manuscript])}}"><box-icon type='solid' name='trash-alt' color="#7a1616"></box-icon></a>
                    </div>
            </div>
            @endforeach
        </div>
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
