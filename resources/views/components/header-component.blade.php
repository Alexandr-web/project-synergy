<header class="header {{ $auth ? '' : 'header--red' }}">
    <div class="header__inner p-l-45 p-r-45 p-t-30 p-b-30">
        <div class="header__logo">
            @if ($auth)
                <img src="{{ asset('images/logo_synergy.png') }}" alt="Синергия Кадровый резерв">
            @else
                <img src="{{ asset('images/logo_synergy_white.png') }}" alt="Синергия Кадровый резерв">
            @endif
        </div>
        @if (!$auth)
        <div class="header__logout">
            <button class="header__logout-btn">Выйти</button>
        </div>
        @endif
    </div>
</header>