<?php
    $options_for_year = [
        [
            'text' => '2023',
            'value' => '2023'
        ],
        [
            'text' => '2022',
            'value' => '2022'
        ],
        [
            'text' => '2021',
            'value' => '2021'
        ],
        [
            'text' => '2020',
            'value' => '2020'
        ],
        [
            'text' => '2019',
            'value' => '2019'
        ]
    ];

    $options_for_subdivision = [
        [
            'text' => 'Структурное подразделение 1',
            'value' => 'Структурное подразделение 1'
        ],
        [
            'text' => 'Структурное подразделение 2',
            'value' => 'Структурное подразделение 2'
        ],
        [
            'text' => 'Структурное подразделение 3',
            'value' => 'Структурное подразделение 3'
        ]
    ];
?>

<div class="search">
    <form class="search__form" id="search-student-form">
        <div class="search__block">
            <input class="form__input search__input" type="text" name="search" placeholder="Поиск студента...">
            <button class="form__submit" type="submit">Поиск</button>
        </div>
        <div class="filters">
            <div class="filters__head">
                <button class="filters__head-btn collapsed" data-tab-target="filter" type="button">
                    <span class="filters__head-btn-text">Фильтровать</span>
                    <img class="filters__head-btn-icon" src="{{ asset('icons/arrow-down.svg') }}" alt="Стрелка вниз" data-tab-icon>
                </button>
            </div>
            <div class="filters__body" data-tab-body="filter" data-simplebar data-simplebar-auto-hide="false">
                <div class="form__field form__field--row">
                    <div class="form__field-title">Год поступления</div>
                    <div class="form__field-content">
                        <x-custom-select-component tabBody="year-education" id="year-education-select" :options="$options_for_year" :white="true" :small="true" />
                    </div>
                </div>
                <div class="form__field form__field--row">
                    <div class="form__field-title">Иностранец</div>
                    <div class="form__field-content form__field-content--row">
                        <label class="custom-checkbox" data-custom-checkbox-type="checkmark" for="is-foreigner">
                            <input class="form__checkbox" type="checkbox" id="is-foreigner" name="is-foreigner">
                            <span class="custom-checkbox__target" style="background-image: url({{ asset('icons/check-off.svg') }})">
                                <img class="custom-checkbox__icon" src="{{ asset('icons/check-on.svg') }}" alt="Галочка">
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form__field form__field--row">
                    <div class="form__field-title">Статус:</div>
                    <div class="form__field-content form__field-content--row">
                        <label class="custom-radio" data-custom-radio-type="line" for="status-working">
                            <input class="form__radio" type="radio" id="status-working" value="working" name="status">
                            <span class="custom-radio__target">Работает</span>
                        </label>
                        <label class="custom-radio" data-custom-radio-type="line" for="status-fired">
                            <input class="form__radio" type="radio" id="status-fired" value="fired" name="status">
                            <span class="custom-radio__target">Уволен</span>
                        </label>
                    </div>
                </div>
                <div class="form__field form__field--row">
                    <div class="form__field-content">
                        <div class="radios radios--column">
                            <label class="custom-radio" data-custom-radio-type="box" for="bak">
                                <input class="form__radio" type="radio" id="bak" value="БАК" name="education">
                                <span class="custom-radio__target">Обучение на БАК (ВО)</span>
                            </label>
                            <label class="custom-radio" data-custom-radio-type="box" for="asp">
                                <input class="form__radio" type="radio" id="asp" value="АСП" name="education">
                                <span class="custom-radio__target">Обучение на АСП</span>
                            </label>
                            <label class="custom-radio" data-custom-radio-type="box" for="vvo">
                                <input class="form__radio" type="radio" id="vvo" value="ВВО" name="education">
                                <span class="custom-radio__target">Обучение на ВВО</span>
                            </label>
                            <label class="custom-radio" data-custom-radio-type="box" for="mva">
                                <input class="form__radio" type="radio" id="mva" value="МВА" name="education">
                                <span class="custom-radio__target">Обучение на МВА</span>
                            </label>
                            <label class="custom-radio" data-custom-radio-type="box" for="mag">
                                <input class="form__radio" type="radio" id="mag" value="МАГ" name="education">
                                <span class="custom-radio__target">Обучение на МАГ</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form__field">
                    <div class="form__field-title m-b-10">Структурное подразделение</div>
                    <div class="form__field-content">
                        <x-custom-select-component tabBody="subdivision-tab" id="subdivision-select" :options="$options_for_subdivision" :white="true" :small="true" />
                    </div>
                </div>
                <div class="form__field form__field--row">
                    <div class="form__field-title">Встреча проведена</div>
                    <div class="form__field-content form__field-content--row">
                        <label class="custom-checkbox" data-custom-checkbox-type="checkmark" for="meeting-is-finish">
                            <input class="form__checkbox" type="checkbox" id="meeting-is-finish" name="is-complete">
                            <span class="custom-checkbox__target" style="background-image: url({{ asset('icons/check-off.svg') }})">
                                <img class="custom-checkbox__icon" src="{{ asset('icons/check-on.svg') }}" alt="Галочка">
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>