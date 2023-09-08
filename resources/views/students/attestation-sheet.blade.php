@extends('layouts.default')

@section('title', 'Аттестационный лист студента')

@section('content')
<div class="section feedback-section">
    <header class="section__header">
        <h2 class="section__title">Аттестационный лист студента программы «Кадровый Резерв»</h2>
    </header>
    <div class="section__main">
        <form class="form questionnaire-form">
            <div class="form__field">
                <label class="form__label" for="date-fill">1. Дата заполнения</label>
                <input class="form__input" type="date" id="date-fill" name="date-fill">
            </div>
            <div class="form__field">
                <label class="form__label" for="name">2. Ваше ФИО</label>
                <input class="form__input" type="text" id="name" name="name" placeholder="Фамилия Имя Отчество">
            </div>
            <div class="form__field">
                <label class="form__label" for="department">3. Структурное подразделение (департамент)</label>
                <input class="form__input" type="text" id="department" name="department" placeholder="Название департамента">
            </div>
            <div class="form__field">
                <label class="form__label">4. Ваш курс</label>
                <div class="radios">
                    <label class="custom-radio">
                        <input class="form__radio" type="radio" name="course" value="1">
                        <span class="custom-radio__target" data-custom-radio-type="box">1</span>
                    </label>
                    <label class="custom-radio">
                        <input class="form__radio" type="radio" name="course" value="2">
                        <span class="custom-radio__target" data-custom-radio-type="box">2</span>
                    </label>
                    <label class="custom-radio">
                        <input class="form__radio" type="radio" name="course" value="3">
                        <span class="custom-radio__target" data-custom-radio-type="box">3</span>
                    </label>
                    <label class="custom-radio">
                        <input class="form__radio" type="radio" name="course" value="4">
                        <span class="custom-radio__target" data-custom-radio-type="box">4</span>
                    </label>
                </div>
            </div>
            <div class="form__field">
                <label class="form__label" for="achievements">5. Перечислите ваши достижения за отчетный период</label>
                <textarea class="form__textarea form__input" name="achievements" id="achievements" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="unfulfilled-plans">6. Какие планы вам не удалось осуществить и почему?</label>
                <textarea class="form__textarea form__input" name="unfulfilled-plans" id="unfulfilled-plans" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="developed-skills">7. Какие компетенции, навыки и умения вы развивали за отчетный период?</label>
                <textarea class="form__textarea form__input" name="developed-skills" id="developed-skills" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="skills-for-development">8. Какие компетенции, навыки и умения вы собираетесь развивать в будущем периоде?</label>
                <textarea class="form__textarea form__input" name="skills-for-development" id="skills-for-development" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="mentor">9. Кто ваш наставник?</label>
                <textarea class="form__textarea form__input" name="mentor" id="mentor" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="acquired-skills-from-mentor">10. Чему вы научились под руководством вашего наставника?</label>
                <textarea class="form__textarea form__input" name="acquired-skills-from-mentor" id="acquired-skills-from-mentor" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="who-is-leader">11. Кого из ваших сокурсников вы считаете лидером, которого можно ставить в пример и равняться на него?</label>
                <textarea class="form__textarea form__input" name="who-is-leader" id="who-is-leader" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="skillful-employees">13. Укажите сотрудников Корпорации, от которых вы получаете ценные знания и рекомендации?</label>
                <textarea class="form__textarea form__input" name="skillful-employees" id="skillful-employees" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="leader-employee">14. Кого из сотрудников Корпорации вы считаете Лидером, которого можно ставить в пример и равняться на него?</label>
                <textarea class="form__textarea form__input" name="leader-employee" id="leader-employee" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="future-perspectives">15. Какие карьерные перспективы вы перед собой видите?</label>
                <textarea class="form__textarea form__input" name="future-perspectives" id="future-perspectives" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="new-business-directions">18. Какие новые направления бизнеса вы предлагаете открыть в Корпорации?</label>
                <textarea class="form__textarea form__input" name="new-business-directions" id="new-business-directions" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="improvements">19. Какие улучшения в системе подготовки программы «Кадровый Резерв» необходимо осуществить?</label>
                <textarea class="form__textarea form__input" name="improvements" id="improvements" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="best-directions">20. Какие направления набора абитуриентов на программу «Кадровый Резерв» вы считаете наиболее эффективными?</label>
                <textarea class="form__textarea form__input" name="best-directions" id="best-directions" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="my-directions">21. Выберите направления, в которых вы видите свое дальнейшее развитие в Корпорации?</label>
                <textarea class="form__textarea form__input" name="my-directions" id="my-directions" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="my-profitable-directions">22. В каком департаменте вы сможете принести Корпорации ощутимую пользу и результат</label>
                <textarea class="form__textarea form__input" name="my-profitable-directions" id="my-profitable-directions" placeholder="Введите текст"></textarea>
            </div>
            <div class="form__field">
                <label class="form__label" for="my-suggestions">23. Сформулируйте в свободной форме ваши предложения высшему руководству по обеспечению устойчивого развития корпорации.</label>
                <textarea class="form__textarea form__input" name="my-suggestions" id="my-suggestions" placeholder="Введите текст"></textarea>
            </div>
            <button class="form__submit" type="submit">Отправить</button>
        </form>
    </div>
</div>
@endsection