<div class="search">
    <form class="search__form" id="search-student-form">
        <input class="form__input search__input" type="text" name="search" placeholder="Поиск студента...">
        <button class="form__submit" type="submit">Поиск</button>
    </form>
    <div class="filters">
        <div class="filters__head">
            <button class="filters__head-btn">
                <span class="filters__head-btn-text">Фильтровать</span>
                <img class="filters__head-btn-icon" src="{{ asset('icons/arrow-down.svg') }}" alt="Стрелка вниз">
            </button>
        </div>
        <div class="filters__body">
            <form class="form filters__form">
                <div class="form__field form__field--row">
                    <div class="form__field-title">Год поступления</div>
                    <div class="form__field-content">
                        <select class="form__select form__select--white" name="year-admission">
                            <option class="form__select-option" value="2023">2023</option>
                            <option class="form__select-option" value="2022">2022</option>
                            <option class="form__select-option" value="2021">2021</option>
                            <option class="form__select-option" value="2020">2020</option>
                            <option class="form__select-option" value="2019">2019</option>
                        </select>
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
                        <select class="form__select form__select--white" name="subdivision">
                            <option class="form__select-option" value="Структурное подразделение 1">Структурное подразделение 1</option>
                            <option class="form__select-option" value="Структурное подразделение 1">Структурное подразделение 1</option>
                            <option class="form__select-option" value="Структурное подразделение 1">Структурное подразделение 1</option>
                            <option class="form__select-option" value="Структурное подразделение 1">Структурное подразделение 1</option>
                        </select>
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
            </form>
        </div>
    </div>
</div>