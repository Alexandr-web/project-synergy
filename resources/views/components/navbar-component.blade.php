<?php
    function getActiveClass($activeRoute, $route) {
        return $activeRoute === str_replace('?tab=', '', $route) ? 'navbar__list-link--active' : '';
    }
?>

<nav class="navbar">
    <div class="navbar__inner">
        <ul class="navbar__list">
            @foreach ($list as $item)
            <li class="navbar__list-item">
                <a class="navbar__list-link {{ getActiveClass($activeRoute, $item['path']) }}" href="{{ $item['path'] }}">{{ $item['text'] }}</a>
            </li>   
            @endforeach
        </ul>
    </div>
</nav>