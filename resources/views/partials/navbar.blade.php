<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="#"><img class="nav-logo" src="/images/logo2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ (Route::currentRouteName() === 'index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('index') }}">{{ Lang::get('menu.main') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() === 'models') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('models') }}">{{ Lang::get('menu.models') }}</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() === 'characteristics') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('characteristics') }}">{{ Lang::get('menu.characteristics') }}</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() === 'certificates') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('certificates') }}">{{ Lang::get('menu.certificates') }}</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() === 'patents') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('patents') }}">{{ Lang::get('menu.patents') }}</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() === 'contacts') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contacts') }}">{{ Lang::get('menu.contacts') }}</a>
            </li>
        </ul>
    </div>
</nav>