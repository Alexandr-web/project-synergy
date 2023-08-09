@extends('layouts.student')

@section('title', 'Главная')

@section('content')
    <div>
        <h4 class="text-center">Аттестационный лист студента программы "Кадровый резерв"</h4>
        <table class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
            <tr>
                <td class="w-50" data-question="">1. Дата заполнения (чч.мм.гг.):</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">2. Ваше Имя Фамилия Отчество:</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">3. Структурное подразделение(Департамент):</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">4. Ваш Курс:</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">5. Перечислите ваши измеримые достижения за отчетный период:</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">6. Какие планы вам не удалось осуществить и почему?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">7. Какие компетенции, навыки и умения вы развивали за отчетный период?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">8. Какие компетенции, навыки и умения вы собираетесь развивать в будущемпериоде?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">9. Кто ваш наставник?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">10. Чему вы научились под руководствомвашего наставника?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">11. Кого из ваших сокурсников вы считаете лидером, которого можно ставить в пример и равняться на него?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">12. Кто из ваших сокурсников оказался «случайным попутчиком» для программы Кадровый резерв и Корпорации?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">13. Укажите сотрудников Корпорации, от которых вы получаете ценные знания и рекомендации?:</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">14. Кого из сотрудников Корпорации вы считаете Лидером, которого можно ставить в пример и равняться на него?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">15. Какие карьерные перспективы вы перед собой видите?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">16. Какие улучшения необходимо сделать в вашем отделе, департаменте и Корпорации в целом для повышения эффективности деятельности?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">17. Какие новые продукты и услуги Клиентам вы предлагаете создать в Корпорации?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">18. Какие новые направления бизнеса вы предлагаете открыть в Корпорации?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">19. Какие улучшения в системе подготовки программы "Кадровый резерв"  необходимо осуществить?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">20. Какие направления набора абитуриентов на программу "Кадровый резерв" вы считаете наиболее эффективными?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">21. Выберите направления, в которых вы видите свое дальнейшее развитие вКорпорации?</td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">22. В каком департаменте вы сможете принести Корпорации ощутимую пользу и результат </td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
            <tr>
                <td class="w-50" data-question="">23. Сформулируйте в свободной форме ваши предложения высшему руководству по обеспечению устойчивого развития корпорации. </td>
                <td class="w-50" data-answer="" contenteditable></td>
            </tr>
        </table>
    </div>
@endsection