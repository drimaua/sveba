<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand" href="#"><img class="nav-logo" src="/images/logo2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ (Route::currentRouteName() === 'index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('index') }}">Главная<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() === 'models') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('models') }}">Модельный ряд</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() === 'characteristics') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('characteristics') }}">Характеристики</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() === 'certificates') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('certificates') }}">Сертификаты</a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() === 'contacts') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contacts') }}">Контакты</a>
            </li>
        </ul>
    </div>
</nav>