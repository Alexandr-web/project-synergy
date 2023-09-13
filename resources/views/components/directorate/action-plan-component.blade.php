<?php
    $options = [
        [
            'value' => 'сентябрь 2021 - октябрь 2022',
            'text' => 'сентябрь 2021 - октябрь 2022'
        ],
        [
            'value' => 'сентябрь 2021 - октябрь 2022',
            'text' => 'сентябрь 2021 - октябрь 2022'
        ],
        [
            'value' => 'сентябрь 2021 - октябрь 2022',
            'text' => 'сентябрь 2021 - октябрь 2022'
        ],
        [
            'value' => 'сентябрь 2021 - октябрь 2022',
            'text' => 'сентябрь 2021 - октябрь 2022'
        ],
        [
            'value' => 'сентябрь 2021 - октябрь 2022',
            'text' => 'сентябрь 2021 - октябрь 2022'
        ]
    ];
?>

<div class="section action-plan">
    <header class="section__header">
        <h2 class="section__title">План мероприятий</h2>
    </header>
    <aside class="section__aside m-t-15">
        <ul class="selections">
            <li class="selections-item">
                <span class="selections-item__name">Цикл событий по развитию</span>
                <x-custom-select-component id="event-loop-select" tabBody="event" :options="$options" />
            </li>
        </ul>
    </aside>
    <div class="section__main">
        <ul class="events-list">
            <li class="event-card">
                <header class="event-card__header">
                    <h3 class="event-card__title">ГТО</h3>
                    <h4 class="event-card__date">3 сентября 2022</h4>
                </header>
                <div class="event-card__main">
                    <h3 class="event-card__name">Обсуждение стратегии по развитию OS в России</h3>
                    <h6 class="event-card__address">Москва, «Городские лаборатории» ВЭБ</h6>
                </div>
            </li>
            <li class="event-card">
                <header class="event-card__header">
                    <h3 class="event-card__title">ГТО</h3>
                    <h4 class="event-card__date">3 сентября 2022</h4>
                </header>
                <div class="event-card__main">
                    <h3 class="event-card__name">Обсуждение стратегии по развитию OS в России</h3>
                    <h6 class="event-card__address">Москва, «Городские лаборатории» ВЭБ</h6>
                </div>
            </li>
            <li class="event-card">
                <header class="event-card__header">
                    <h3 class="event-card__title">ГТО</h3>
                    <h4 class="event-card__date">3 сентября 2022</h4>
                </header>
                <div class="event-card__main">
                    <h3 class="event-card__name">Обсуждение стратегии по развитию OS в России</h3>
                    <h6 class="event-card__address">Москва, «Городские лаборатории» ВЭБ</h6>
                </div>
            </li>
            <li class="event-card">
                <header class="event-card__header">
                    <h3 class="event-card__title">ГТО</h3>
                    <h4 class="event-card__date">3 сентября 2022</h4>
                </header>
                <div class="event-card__main">
                    <h3 class="event-card__name">Обсуждение стратегии по развитию OS в России</h3>
                    <h6 class="event-card__address">Москва, «Городские лаборатории» ВЭБ</h6>
                </div>
            </li>
        </ul>
    </div>
</div>