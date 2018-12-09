<div class="lang-selector">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <a class="btn lang-selector-a @if(LaravelLocalization::getCurrentLocale() == $localeCode) lang-selector-active @endif"
           rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
            {{ $properties['native'] }}
        </a>
    @endforeach
</div>
<div class="jumbotron text-center top-heading">
    <img src="/images/tower2.png" class="top-tower">
    <h1>{{ Lang::get('menu.top-title') }}</h1>
    <img src="/images/logo.png">
    <h4>{{ Lang::get('menu.top-slogan') }}</h4>
</div>