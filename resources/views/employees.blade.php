@extends('layouts.default')

@section('title', 'Главная')

@section('content')
<x-alert />
<h4 class="text-center">Перечень ваших сотрудников</h4>
<ul class="list-group ms-3 w-100 rounded-1">
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
                    <button class="accordion-button" type="button" data-tab-target="tab-id-0">Характеристика от руководителя</button>
                  </h2>
                  <div class="accordion-collapse collapse show" data-tab-body="tab-id-0">
                    <div class="accordion-body overflow-x-auto">
                        <table id="characteristics-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                            <tr>
                              <td data-question="Дата заполнения (чч.мм.гг.):" data-target-answer="0">Дата заполнения (чч.мм.гг.):</td>
                              <td data-answer="11.10.2004" data-answer-id="0" contenteditable="">11.10.2004</td>
                            </tr>
                            <tr>
                              <td data-question="ФИО студента:" data-target-answer="1">ФИО студента:</td>
                              <td data-answer="Иванов Иван Иванович" data-answer-id="1">Иванов Иван Иванович</td>
                            </tr>
                            <tr>
                              <td data-question="Структурное подразделение (Департамент):" data-target-answer="2">Структурное подразделение (Департамент):</td>
                              <td data-answer="Структурное подразделение 1321" data-answer-id="2" contenteditable="">Структурное подразделение 1321</td>
                            </tr>
                            <tr>
                              <td data-question="Занимаемая студентом должность:" data-target-answer="3">Занимаемая студентом должность:</td>
                              <td data-answer="Веб разработчик" data-answer-id="3" contenteditable="">Веб разработчик</td>
                            </tr>
                            <tr>
                              <td data-question="Период работы на данной позиции:" data-target-answer="4">Период работы на данной позиции:</td>
                              <td data-answer="3 года" data-answer-id="4" contenteditable="">3 года</td>
                            </tr>
                            <tr>
                              <td data-question="Основные достижения за время работы:" data-target-answer="5">Основные достижения за время работы:</td>
                              <td data-answer="Съел яблоко" data-answer-id="5" contenteditable="">Съел яблоко</td>
                            </tr>
                            <tr>
                              <td data-question="Сильные стороны и развитые компетенции:" data-target-answer="6">Сильные стороны и развитые компетенции:</td>
                              <td data-answer="Умеет есть яблоко" data-answer-id="6" contenteditable="">Умеет есть яблоко</td>
                            </tr>
                            <tr>
                              <td data-question="Замечания и упущения в работе:" data-target-answer="7">Замечания и упущения в работе:</td>
                              <td data-answer="Не выкинул огрызок яблока" data-answer-id="7" contenteditable="">Не выкинул огрызок яблока</td>
                            </tr>
                            <tr>
                              <td data-question="Проявленные личные качества:" data-target-answer="8">Проявленные личные качества:</td>
                              <td data-answer="Внимательный, чуткий, вежливый" data-answer-id="8" contenteditable="">Внимательный, чуткий, вежливый</td>
                            </tr>
                            <tr>
                              <td data-question="Зоны ближайшего развития:" data-target-answer="9">Зоны ближайшего развития:</td>
                              <td data-answer="Что это такое" data-answer-id="9" contenteditable="">Что это такое</td>
                            </tr>
                            <tr>
                              <td data-question="Компетенции, которые необходимо развить в среднесрочной перспективе:" data-target-answer="10">Компетенции, которые необходимо развить в среднесрочной перспективе:</td>
                              <td data-answer="JavaScript, Nuxt, Vue" data-answer-id="10" contenteditable="">JavaScript, Nuxt, Vue</td>
                            </tr>
                            <tr>
                              <td data-question="Карьерные и экспертные перспективы:" data-target-answer="11">Карьерные и экспертные перспективы:</td>
                              <td data-answer="Нет" data-answer-id="11" contenteditable="">Нет</td>
                            </tr>
                        </table>
                        <button class="btn btn-outline-primary d-block mx-auto mt-3" id="btn-save-characteristics-table">Прикрепить</button>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-tab-target="tab-id-1">Итоги встречи</button>
                  </h2>
                  <div class="accordion-collapse collapse show" data-tab-body="tab-id-1">
                    <div class="accordion-body overflow-x-auto">
                        <table id="meetings-results-table" class="table table-bordered m-0" border="1" cellspacing="0" cellpadding="0">
                          <thead>
                              <tr>
                                <th data-question="Выполнено:" data-target-answer="0">Выполнено:</th>
                                <th data-question="В работе:" data-target-answer="1">В работе:</th>
                                <th data-question="Процесс реализации не запущен:" data-target-answer="2">Процесс реализации не запущен:</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td data-answer="Что-то" data-answer-id="0" contenteditable="">Что-то</td>
                                <td data-answer="Что-нибудь" data-answer-id="1" contenteditable="">Что-нибудь</td>
                                <td data-answer="Да" data-answer-id="2" contenteditable="">Да</td>
                              </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-outline-primary d-block mx-auto mt-3" id="btn-save-meetings-results-table">Готово</button>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-tab-target="tab-id-2">Итоги предыдущей встречи</button>
                    </h2>
                    <div class="accordion-collapse collapse show" data-tab-body="tab-id-2">
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