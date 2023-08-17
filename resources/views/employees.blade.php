@extends('layouts.default')

@section('title', 'Сотрудники')

@section('set-btn-back', true)

@section('content-title', 'Перечень ваших сотрудников')

@section('content')
<x-alert />
<ul class="list-group w-75 mx-auto rounded-1">
    <li class="js-employee-btn list-group-item fs-5">Яковлев Александр Николаевич</li>
    <li class="js-employee-btn list-group-item fs-5">Иванов Иван Иванович</li>
</ul>
<div class="modal" tabindex="-1">
    <div class="modal-dialog" style="max-width: 50%">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Информация о сотруднике</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-tab-target="tab-id-0">Характеристика от руководителя</button>
                  </h2>
                  <div class="accordion-collapse collapse" data-tab-body="tab-id-0">
                    <div class="accordion-body overflow-x-auto">
                        <table id="characteristics-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                            <tr>
                              <td>Дата заполнения (чч.мм.гг.):</td>
                              <td contenteditable="">11.10.2004</td>
                            </tr>
                            <tr>
                              <td>ФИО студента:</td>
                              <td>Иванов Иван Иванович</td>
                            </tr>
                            <tr>
                              <td>Структурное подразделение (Департамент):</td>
                              <td contenteditable="">Структурное подразделение 1321</td>
                            </tr>
                            <tr>
                              <td>Занимаемая студентом должность:</td>
                              <td contenteditable="">Веб разработчик</td>
                            </tr>
                            <tr>
                              <td>Период работы на данной позиции:</td>
                              <td contenteditable="">3 года</td>
                            </tr>
                            <tr>
                              <td>Основные достижения за время работы:</td>
                              <td contenteditable="">Съел яблоко</td>
                            </tr>
                            <tr>
                              <td>Сильные стороны и развитые компетенции:</td>
                              <td contenteditable="">Умеет есть яблоко</td>
                            </tr>
                            <tr>
                              <td>Замечания и упущения в работе:</td>
                              <td contenteditable="">Не выкинул огрызок яблока</td>
                            </tr>
                            <tr>
                              <td>Проявленные личные качества:</td>
                              <td contenteditable="">Внимательный, чуткий, вежливый</td>
                            </tr>
                            <tr>
                              <td>Зоны ближайшего развития:</td>
                              <td contenteditable="">Что это такое</td>
                            </tr>
                            <tr>
                              <td>Компетенции, которые необходимо развить в среднесрочной перспективе:</td>
                              <td contenteditable="">JavaScript, Nuxt, Vue</td>
                            </tr>
                            <tr>
                              <td>Карьерные и экспертные перспективы:</td>
                              <td contenteditable="">Нет</td>
                            </tr>
                        </table>
                        <button class="btn btn-outline-primary d-block mx-auto mt-3" id="btn-save-characteristics-table">Прикрепить</button>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-tab-target="tab-id-1">Итоги встречи</button>
                  </h2>
                  <div class="accordion-collapse collapse" data-tab-body="tab-id-1">
                    <div class="accordion-body overflow-x-auto">
                        <table id="meetings-results-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                          <thead>
                              <tr>
                                <th>Выполнено:</th>
                                <th>В работе:</th>
                                <th>Процесс реализации не запущен:</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td contenteditable="">Что-то</td>
                                <td contenteditable="">Что-нибудь</td>
                                <td contenteditable="">Да</td>
                              </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-outline-primary d-block mx-auto mt-3" id="btn-save-meetings-results-table">Готово</button>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-tab-target="tab-id-2">Итоги предыдущей встречи</button>
                    </h2>
                    <div class="accordion-collapse collapse" data-tab-body="tab-id-2">
                      <div class="accordion-body overflow-x-auto">
                          <table id="prev-meetings-results-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                  <th>Выполнено:</th>
                                  <th>В работе:</th>
                                  <th>Процесс реализации не запущен:</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Что-то</td>
                                  <td>Что-нибудь</td>
                                  <td>Да</td>
                                </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('scripts')
  @vite(['resources/js/pages/boss/index.js'])
@endsection