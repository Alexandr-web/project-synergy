<div class="section result-last-meeting">
    <header class="section__header">
        <h2 class="section__title section__title--middle">Итоги предыдущей встречи</h2>
    </header>
    <div class="section__main">
        <table class="table table--grey">
            <thead class="table__head">
                <th class="table__head-th">Выполнено</th>
                <th class="table__head-th">В работе</th>
                <th class="table__head-th">Процесс реализации не запущен</th>
            </thead>
            <tbody>
                <tr class="table__body-tr">
                    <td class="table__body-td"></td>
                    <td class="table__body-td"></td>
                    <td class="table__body-td"></td>
                </tr>
            </tbody>
        </table>
        @if ($checkbox)
        <div class="check-block m-t-50">
            <div class="check-block__text">Встреча проведена</div>
            <label class="custom-checkbox" data-custom-checkbox-type="checkmark" for="is-foreigner">
                <input class="form__checkbox" type="checkbox" id="is-foreigner" name="is-foreigner" {{ $disabled ? "disabled" : "" }}>
                <span class="custom-checkbox__target" style="background-image: url({{ asset('icons/check-off.svg') }})">
                    <img class="custom-checkbox__icon" src="{{ asset('icons/check-on.svg') }}" alt="Галочка">
                </span>
            </label>
        </div>
        @endif
    </div>
</div>