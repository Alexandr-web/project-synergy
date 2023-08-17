@extends('layouts.default')

@section('title', 'Аттестационный лист')

@section('set-btn-back', true)

@section('content-title', 'Аттестационный лист студента')

@section('content')
<x-alert />
<div class="overflow-x-auto">
    <table id="attestation-sheet-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td class="w-50">Дата заполнения (чч.мм.гг.):</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Ваше Имя Фамилия Отчество:</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Структурное подразделение(Департамент):</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Ваш Курс:</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Перечислите ваши измеримые достижения за отчетный период:</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Какие планы вам не удалось осуществить и почему?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Какие компетенции, навыки и умения вы развивали за отчетный период?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Какие компетенции, навыки и умения вы собираетесь развивать в будущемпериоде?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Кто ваш наставник?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Чему вы научились под руководствомвашего наставника?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Кого из ваших сокурсников вы считаете лидером, которого можно ставить в пример и равняться на него?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Кто из ваших сокурсников оказался «случайным попутчиком» для программы Кадровый резерв и Корпорации?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Укажите сотрудников Корпорации, от которых вы получаете ценные знания и рекомендации?:</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Кого из сотрудников Корпорации вы считаете Лидером, которого можно ставить в пример и равняться на него?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Какие карьерные перспективы вы перед собой видите?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Какие улучшения необходимо сделать в вашем отделе, департаменте и Корпорации в целом для повышения эффективности деятельности?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Какие новые продукты и услуги Клиентам вы предлагаете создать в Корпорации?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Какие новые направления бизнеса вы предлагаете открыть в Корпорации?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Какие улучшения в системе подготовки программы "Кадровый резерв"  необходимо осуществить?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Какие направления набора абитуриентов на программу "Кадровый резерв" вы считаете наиболее эффективными?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Выберите направления, в которых вы видите свое дальнейшее развитие вКорпорации?</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">В каком департаменте вы сможете принести Корпорации ощутимую пользу и результат</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
        <tr>
            <td class="w-50">Сформулируйте в свободной форме ваши предложения высшему руководству по обеспечению устойчивого развития корпорации</td>
            <td class="w-50" contenteditable=""></td>
        </tr>
    </table>
</div>
<button class="js-save-table btn btn-outline-primary d-block mx-auto mt-3">Сохранить</button>
@endsection

@section('scripts')
    @vite(['resources/js/pages/student/index.js'])
@endsection