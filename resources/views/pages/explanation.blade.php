@extends('layouts.main-layout')

@section('content')

    <section style="background: #E9E9E9;padding: 25px">
        <div class="container" style="padding: 25px">
            <div class="h2">Это тренировочный проект</div>
            <div class="container" style="background: white;padding: 50px">
                <div class="h5">Проект был написан с использованием следующих фреймворков:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Laravel 8.34.0</li>
                    <li class="list-group-item">JQuery 3.6.0</li>
                    <li class="list-group-item">Bootstrap 4.6.0</li>
                </ul>
                <div class="h5">Обо мне:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Чепик Владимир</li>
                    <li class="list-group-item">Город Санкт-Петербург</li>
                    <li class="list-group-item">Окончил НИУ ИТМО факультет СПО</li>
                </ul>
                <div class="h5">Контактные данные для связи:</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">+7(981)861-33-96</li>
                    <li class="list-group-item">mr.drouf777@gmail.com</li>
                    <li class="list-group-item">
                        <a href="https://spb.hh.ru/resume/01103c8fff0834901b0039ed1f68744479454f#key-skills">
                            Резюме на hh.ru
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection
