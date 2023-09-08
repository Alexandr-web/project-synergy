<div class="section manager-characteristic">
    <header class="section__header">
        <h2 class="section__title section__title--middle">Характеристика руководителя</h2>
    </header>
    <div class="section__main">
        <form class="form questionnaire-form">
            <div class="form__field">
                <label class="form__label" for="date-fill">Дата заполнения</label>
                <input class="form__input" type="date" id="date-fill" name="date-fill">
            </div>
            <div class="form__field">
                <label class="form__label" for="name">ФИО студента</label>
                <input class="form__input" type="text" id="name" name="name" placeholder="Фамилия Имя Отчество">
            </div>
            <div class="form__field">
                <label class="form__label" for="department">Структурное подразделение (департамент)</label>
                <input class="form__input" type="text" id="department" name="department" placeholder="Название департамента">
            </div>
            <div class="form__field">
                <label class="form__label" for="job">Занимаемая студентом должность</label>
                <input class="form__input" type="text" id="job" name="job" placeholder="Должность">
            </div>
            <div class="form__field">
                <label class="form__label" for="work-date">Период работы на данной позиции</label>
                <input class="form__input" type="text" id="work-date" name="work-date" placeholder="Период работы">
            </div>
            <div class="form__field">
                <label class="form__label" for="achievements">Основные достижения во время работы</label>
                <textarea class="form__textarea form__input" name="achievements" id="achievements" placeholder="Основные достижения во время работы"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="strengths">Сильные стороны и развитые компетенции</label>
                <textarea class="form__textarea form__input" name="strengths" id="strengths" placeholder="Сильные стороны и развитые компетенции"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="remarks">Замечания и упущения в работе</label>
                <textarea class="form__textarea form__input" name="remarks" id="remarks" placeholder="Замечания и упущения в работе"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="personal-qualities">Проявленные личные качества</label>
                <textarea class="form__textarea form__input" name="personal-qualities" id="personal-qualities" placeholder="Проявленные личные качества"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="proximal-development">Зоны ближайшего развития</label>
                <textarea class="form__textarea form__input" name="proximal-development" id="proximal-development" placeholder="Зоны ближайшего развития"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="competencies-for-development">Компетенции, которые необходимо развить в среднесрочной перспективе</label>
                <textarea class="form__textarea form__input" name="competencies-for-development" id="competencies-for-development" placeholder="Компетенции, которые необходимо развить в среднесрочной перспективе"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="perspectives">Карьерные и экспертные перспективы</label>
                <textarea class="form__textarea form__input" name="perspectives" id="perspectives" placeholder="Карьерные и экспертные перспективы"></textarea>
            </div>
            @if ($submit)
            <button class="form__submit" type="submit">Отправить</button>
            @endif
        </form>
    </div>
</div>