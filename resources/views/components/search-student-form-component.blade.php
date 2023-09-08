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
                    <div class="form__field-content form__field-content--row">
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
                        <label class="checkbox" for="is-foreigner">
                            <input class="form__checkbox" type="checkbox" id="is-foreigner" name="is-foreigner">
                            <span class="checkbox-custom">
                                <div class="checkbox-custom--on">
                                    <img class="checkbox-custom__icon" src="{{ asset('icons/check-on.svg') }}" alt="Галочка">
                                </div>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form__field form__field--row">
                    <div class="form__field-title">Статус:</div>
                    <div class="form__field-content form__field-content--row">
                        <label class="radio" for="status-working">
                            <input class="form__radio" type="radio" id="status-working" value="working" name="status">
                            <h4 class="radio__title">Работает</h4>
                        </label>
                        <label class="radio" for="status-fired">
                            <input class="form__radio" type="radio" id="status-fired" value="fired" name="status">
                            <h4 class="radio__title">Уволен</h4>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>