@extends('layouts.default')

@section('title', 'Аттестационный лист')

@section('content')
<x-alert />
<h4 class="text-center">Аттестационный лист студента программы "Кадровый резерв"</h4>
<div class="overflow-x-auto">
    <table id="attestation-sheet-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td class="w-50" data-target-answer="0" data-question="Дата заполнения (чч.мм.гг.):">Дата заполнения (чч.мм.гг.):</td>
            <td class="w-50" data-answer="" data-answer-id="0" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="1" data-question="Ваше Имя Фамилия Отчество:">Ваше Имя Фамилия Отчество:</td>
            <td class="w-50" data-answer="" data-answer-id="1" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="2" data-question="Структурное подразделение(Департамент):">Структурное подразделение(Департамент):</td>
            <td class="w-50" data-answer="" data-answer-id="2" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="3" data-question="Ваш Курс:">Ваш Курс:</td>
            <td class="w-50" data-answer="" data-answer-id="3" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="4" data-question="Перечислите ваши измеримые достижения за отчетный период:">Перечислите ваши измеримые достижения за отчетный период:</td>
            <td class="w-50" data-answer="" data-answer-id="4" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="5" data-question="Какие планы вам не удалось осуществить и почему?">Какие планы вам не удалось осуществить и почему?</td>
            <td class="w-50" data-answer="" data-answer-id="5" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="6" data-question="Какие компетенции, навыки и умения вы развивали за отчетный период?">Какие компетенции, навыки и умения вы развивали за отчетный период?</td>
            <td class="w-50" data-answer="" data-answer-id="6" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="7" data-question="Какие компетенции, навыки и умения вы собираетесь развивать в будущемпериоде?">Какие компетенции, навыки и умения вы собираетесь развивать в будущемпериоде?</td>
            <td class="w-50" data-answer="" data-answer-id="7" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="8" data-question="Кто ваш наставник?">Кто ваш наставник?</td>
            <td class="w-50" data-answer="" data-answer-id="8" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="9" data-question="Чему вы научились под руководствомвашего наставника?">Чему вы научились под руководствомвашего наставника?</td>
            <td class="w-50" data-answer="" data-answer-id="9" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="10" data-question="Кого из ваших сокурсников вы считаете лидером, которого можно ставить в пример и равняться на него?">Кого из ваших сокурсников вы считаете лидером, которого можно ставить в пример и равняться на него?</td>
            <td class="w-50" data-answer="" data-answer-id="10" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="11" data-question="Кто из ваших сокурсников оказался «случайным попутчиком» для программы Кадровый резерв и Корпорации?">Кто из ваших сокурсников оказался «случайным попутчиком» для программы Кадровый резерв и Корпорации?</td>
            <td class="w-50" data-answer="" data-answer-id="11" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="12" data-question="Укажите сотрудников Корпорации, от которых вы получаете ценные знания и рекомендации?:">Укажите сотрудников Корпорации, от которых вы получаете ценные знания и рекомендации?:</td>
            <td class="w-50" data-answer="" data-answer-id="12" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="13" data-question="Кого из сотрудников Корпорации вы считаете Лидером, которого можно ставить в пример и равняться на него?">Кого из сотрудников Корпорации вы считаете Лидером, которого можно ставить в пример и равняться на него?</td>
            <td class="w-50" data-answer="" data-answer-id="13" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="14" data-question="Какие карьерные перспективы вы перед собой видите?">Какие карьерные перспективы вы перед собой видите?</td>
            <td class="w-50" data-answer="" data-answer-id="14" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="15" data-question="Какие улучшения необходимо сделать в вашем отделе, департаменте и Корпорации в целом для повышения эффективности деятельности?">Какие улучшения необходимо сделать в вашем отделе, департаменте и Корпорации в целом для повышения эффективности деятельности?</td>
            <td class="w-50" data-answer="" data-answer-id="15" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="16" data-question="Какие новые продукты и услуги Клиентам вы предлагаете создать в Корпорации?">Какие новые продукты и услуги Клиентам вы предлагаете создать в Корпорации?</td>
            <td class="w-50" data-answer="" data-answer-id="16" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="17" data-question="Какие новые направления бизнеса вы предлагаете открыть в Корпорации?">Какие новые направления бизнеса вы предлагаете открыть в Корпорации?</td>
            <td class="w-50" data-answer="" data-answer-id="17" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="18" data-question="Какие улучшения в системе подготовки программы "Кадровый резерв"  необходимо осуществить?">Какие улучшения в системе подготовки программы "Кадровый резерв"  необходимо осуществить?</td>
            <td class="w-50" data-answer="" data-answer-id="18" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="19" data-question="Какие направления набора абитуриентов на программу "Кадровый резерв" вы считаете наиболее эффективными?">Какие направления набора абитуриентов на программу "Кадровый резерв" вы считаете наиболее эффективными?</td>
            <td class="w-50" data-answer="" data-answer-id="19" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="20" data-question="Выберите направления, в которых вы видите свое дальнейшее развитие вКорпорации?">Выберите направления, в которых вы видите свое дальнейшее развитие вКорпорации?</td>
            <td class="w-50" data-answer="" data-answer-id="20" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="21" data-question="В каком департаменте вы сможете принести Корпорации ощутимую пользу и результат">В каком департаменте вы сможете принести Корпорации ощутимую пользу и результат</td>
            <td class="w-50" data-answer="" data-answer-id="21" contenteditable></td>
        </tr>
        <tr>
            <td class="w-50" data-target-answer="22" data-question="Сформулируйте в свободной форме ваши предложения высшему руководству по обеспечению устойчивого развития корпорации">Сформулируйте в свободной форме ваши предложения высшему руководству по обеспечению устойчивого развития корпорации</td>
            <td class="w-50" data-answer="" data-answer-id="22" contenteditable></td>
        </tr>
    </table>
</div>
<button class="js-save-table btn btn-outline-primary d-block mx-auto mt-3">Сохранить</button>
@endsection

@section('scripts')
    @vite(['resources/js/pages/student/index.js'])
@endsection