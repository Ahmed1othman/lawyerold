<div id="logos" class=" language_moblie d-block d-md-none">
    <div id="languages" style="top: -30px; @if(app()->getLocale() == 'ar')right: -30px; @else left: -30px; @endif">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if($properties['native'] != LaravelLocalization::getCurrentLocaleNative() )
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            @endif
        @endforeach
    </div>
</div>


