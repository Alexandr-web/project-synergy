<div class="section result-meeting">
    <header class="section__header">
        <h2 class="section__title section__title--middle">Итоги встречи</h2>
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
                    <td class="table__body-td" data-cell="completed" {{ $submit ? 'contenteditable' : '' }}></td>
                    <td class="table__body-td" data-cell="in-process" {{ $submit ? 'contenteditable' : '' }}></td>
                    <td class="table__body-td" data-cell="not-completed" {{ $submit ? 'contenteditable' : '' }}></td>
                </tr>
            </tbody>
        </table>
        @if ($submit)
        <button class="form__submit" id="save-data-meeting-btn">Сохранить</button>
        @endif
    </div>
</div>