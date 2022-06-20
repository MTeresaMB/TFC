    <div class="image-text">
        <span class="image">
            <img src="../../img/path4.png" alt="logo">
        </span>
        <div class="text header-text">
            <span class="name">StoryFactory</span>
        </div>
    </div>
    <div class="sidenav__close-icon">
        <i class="fas fa-times sidenav__brand-close"></i>
    </div>
    <ul class="sidenav__list">
        <li class="sidenav__list-item">

            <a href="{{route('main')}}" class="link">
                <box-icon name='home' type='solid' color='#FFFFFF'></box-icon>
                <span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li class="sidenav__list-item">
            <a href="{{ route('userStories') }}" class="link">
                <box-icon name='book' type="solid" color="#FFFFFF"></box-icon>
                <span class="nav-text">Stories</span>
            </a>
        </li>
        <li class="sidenav__list-item">
            <a href="{{ route("userFigures") }}" class="link">
                <box-icon name='user-detail' type='solid' color="#FFFFFF"></box-icon>
                <span class="nav-text">Characters</span>
            </a>
        </li>
        <li class="sidenav__list-item">
            <a href="{{route("userPlaces")}}" class="link">
                <box-icon name='business' type='solid' color="#FFFFFF"></box-icon>
                <span class="nav-text">Places</span>
            </a>
        </li>
        <li class="sidenav__list-item">
            <a href="{{route("userArticles")}}" class="link">
                <box-icon name='shapes' type='solid' color="#FFFFFF"></box-icon>
                <span class="nav-text">Objects</span>
            </a>
        </li>
        <li class="sidenav__list-item">
            <a href="{{route("exportView")}}" class="link">
                <box-icon name='export' color="#FFFFFF"></box-icon>
                <span class="nav-text">Export</span>
            </a>
        </li>
        <li class="sidenav__list-item">
            <a href="{{route("out")}}" class="link">
                <box-icon name='log-out-circle' color="white"></box-icon>
                <span class="nav-text">Logout</span>
            </a>
        </li>
    </ul>





