@extends('layouts.main-layout')

@section('content')

    <section style="background: #E9E9E9;padding: 25px">
        <a href="{{url()->previous()}}" class="btn btn-outline-dark">Назад</a>
        <div class="container" style="padding: 25px">
            <div class="container" style="background: white;padding: 50px">
                <div class="row">
                    <div class="col">
                        <h2>{{$animal->name}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <img src="{{$animal->image_path}}" class="card-img-top" alt="...">

                    </div>
                    <div class="col-4">
                        <table class="table table-hover" style="height: 100%">
                            @php
                                $raws = array(
                                    'Пол:' => $animal->sex,
                                    'Возраст:' => $animal->age,
                                    'Прививки:' => $animal->vacсination,
                                    'Стерилизация:' => $animal->sterilization,
                                    'Характер:' => $animal->temper,
                                    'Туалет:' => $animal->toilet,
                                    'К детям:' => $animal->tokids,
                                    'К животным:' => $animal->toanimals,
                                    'Телефон для связи:' => '+79818613396',
                                );
                            @endphp
                            @foreach($raws as $raw)
                                @php
                                    $key = key($raws);
                                    next($raws);
                                @endphp
                                @include('includes.rows-show-animal-card', ['col1' => $key, 'col2' => $raw])
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
