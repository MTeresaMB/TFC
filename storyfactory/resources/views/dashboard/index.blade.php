<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href='{{ asset('resources\sass\dashboard\dashboard.css') }}'>
    <title>StoryFactory - Dashboard</title>
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

        <main class="main">
            <div class="main-header">
                <div class="main-header__heading">
                    <span class="iconify" data-icon="fa-solid:feather-alt"></span> Recent Stories
                </div>
                <hr>
                <div class="main-header__updates">
                    @if (sizeof($recentStories) == 0)
                        <p>You don't have any stories</p>
                    @endif
                    @foreach ($recentStories as $a)
                        <p>{{ $a->title }}</p>
                    @endforeach
                </div>
                <div class="buttonViewMore">
                    <a href="{{ route('userStories') }}" class="view-more">
                        View More
                    </a>
                </div>
            </div>

            <div class="main-overview">
                <div class="overviewcard">
                    <button class="overviewcard__icon">
                        <a href="{{ route('create') }}" class="overviewcard__link"><span class="overviewcard__info">
                                New Story
                            </span></a>
                    </button>
                </div>
                <div class="overviewcard">
                    <button class="overviewcard__icon">
                        <a href="{{ route('create_figure') }}" class="overviewcard__link"><span
                                class="overviewcard__info"> New Character
                            </span></a>
                    </button>
                </div>

                <div class="overviewcard">
                    <button class="overviewcard__icon">
                        <a href="{{ route('create_place') }}" class="overviewcard__link"><span
                                class="overviewcard__info"> New Place
                            </span></a>
                    </button>
                </div>
                <div class="overviewcard">
                    <button class="overviewcard__icon">
                        <a href="{{ route('create_article') }}" class="overviewcard__link"><span
                                class="overviewcard__info"> New Object
                            </span></a>
                    </button>
                </div>
            </div>

            <div class="main-cards">
                <div class="card">
                    <canvas id="myChart"></canvas>
                    <p>{{ $caracteres }} chars</p>
                </div>
                <div class="card">
                    <div class="character-sheets">
                        <div class="container-title">Characters Sheets</div>
                        <div class="container-character">
                            @foreach ($figure as $character)
                                <div class="name-character">Name:</div>
                                <div class="name-character-sheets">{{ $character->nameFigure }}</div>
                            @endforeach
                        </div>
                        <div>
                            <a href="{{ route('userFigures') }}" class="view-more">
                                View More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="object-sheets">
                        <div class="container-title">Objects Sheets</div>
                        <div class="container-object">
                            @foreach ($objeto as $object)
                                <div class="name-object">Name:</div>
                                <div class="name-object-sheets">{{ $object->name }}</div>
                            @endforeach
                        </div>
                        <div>
                            <a href="{{ route('userArticles') }}" class="view-more">
                                View More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="place-sheets">
                        <div class="container-title">Places Sheets</div>
                        <div class="container-place">
                            @foreach ($places as $place)
                                <div class="name-place">Name:</div>
                                <div class="name-place-sheets">{{ $place->name }}</div>
                            @endforeach
                        </div>
                        <div>
                            <a href="{{ route('userPlaces') }}" class="view-more">
                                View More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</body>

</html>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>

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
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Words written'],
            datasets: [{
                label: '# of words',
                data: [{{ intval($caracteres) }}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',

                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
{{-- <div class="recent-books">
                <div class="recent-title"><span class="iconify" data-icon="fa-solid:feather-alt"></span> Recent
                    Stories</div>
                <hr>
                <div class="container-story">
                    @if (sizeof($recentStories) == 0)
                        <p>You don't have any stories</p>
                    @endif
                    @foreach ($recentStories as $a)
                        <p>{{ $a->title }}</p>
                    @endforeach
                </div>
                <div class="buttonViewMore">
                    <a href="{{ route('userStories') }}" class="view-more">
                        View More
                    </a>
                </div>
                <div class="buttonViewMore">
                    <a href="{{ route('create') }}" class="view-more2">New Story</a>
                </div>
            </div>
            <div class="grafica">
                <canvas id="myChart"></canvas>
                {{-- <p>{{ $caracteres }}</p> --}}
{{-- </div> --}}


{{-- <div class="container_cards">
                <div class="character-sheets">
                    <div class="container-title">Characters Sheets</div>
                    <div class="container-character">
                        @foreach ($figure as $a)
                            <div class="name-character">Name:</div>
                            <div>{{ $a->nameFigure }}</div>
                        @endforeach
                    </div>
                    <a href="{{ route('userFigures') }}" class="view-more">
                        View More
                    </a>
                </div>

                <div class="place-sheets">
                    <div class="container-title">Places Sheets</div>
                    <div class="container-place">
                        @foreach ($places as $a)
                            <div class="name-place">Name:</div>
                            <div>{{ $a->name }}</div>
                        @endforeach
                    </div>

                    <a href="{{ route('userPlaces') }}" class="view-more">
                        View More
                    </a>
                </div>
                <div class="object-sheets">
                    <div class="container-title">Objects Sheets</div>
                    <div class="container-object">
                        @foreach ($objeto as $a)
                            <div class="name-place">Name:</div>
                            <div>{{ $a->name }}</div>
                        @endforeach
                    </div>
                    <a href="{{ route('userArticles') }}" class="view-more">
                        View More
                    </a>
                </div> --}}
