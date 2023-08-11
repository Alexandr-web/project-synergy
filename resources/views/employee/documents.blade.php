@extends('layouts.employee')

@section('title', 'Общая информация')

@section('content')
    <x-alert />
    <div class="w-75 mx-auto">
        <h2>Общая информация</h2>
        <div class="accordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-tab-target="tab-id-0">
                  Яковлев Александр Николаевич
                </button>
              </h2>
              <div class="accordion-collapse collapse" data-tab-body="tab-id-0">
                <div class="accordion-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="w-25">
                                Паспорт
                            </div>
                            <div class="w-75 d-flex align-items-center justify-content-end">
                                <input class="js-document-upload-input form-control w-50 me-2" type="file" data-document="passport" name="passport-file">
                                <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="passport">Скачать</a>
                                <button class="btn btn-outline-danger">Удалить файл</button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="w-25">
                                Трудовой договор
                            </div>
                            <div class="w-75 d-flex align-items-center justify-content-end">
                                <input class="js-document-upload-input form-control w-50 me-2" type="file" data-document="employment-contract" name="employment-contract-file">
                                <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="employment-contract">Скачать</a>
                                <button class="btn btn-outline-danger">Удалить файл</button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="w-25">
                                Договор на оказание платных услуг
                            </div>
                            <div class="w-75 d-flex align-items-center justify-content-end">
                                <input class="js-document-upload-input form-control w-50 me-2" type="file" data-document="paid-services" name="paid-services-file">
                                <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="paid-services">Скачать</a>
                                <button class="btn btn-outline-danger">Удалить файл</button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="w-25">
                                Ученический договор
                            </div>
                            <div class="w-75 d-flex align-items-center justify-content-end">
                                <input class="js-document-upload-input form-control w-50 me-2" type="file" data-document="student-agreement" name="student-agreement-file">
                                <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="student-agreement">Скачать</a>
                                <button class="btn btn-outline-danger">Удалить файл</button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                            <div class="w-25">
                                Договор С3 на скидку
                            </div>
                            <div class="w-75 d-flex align-items-center justify-content-end">
                                <input class="js-document-upload-input form-control w-50 me-2" type="file" data-document="contract-c3" name="contract-c3-file">
                                <a class="js-document-btn btn btn-outline-warning me-2" href="url-file" download="file-name" data-btn="download" data-document="contract-c3">Скачать</a>
                                <button class="btn btn-outline-danger">Удалить файл</button>
                            </div>
                        </li>
                    </ul>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite(['resources/js/pages/employee/documents/index.js'])
@endsection