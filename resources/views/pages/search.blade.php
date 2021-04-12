@extends('layouts.main-layout')

@section('links')
    <script src="/js/app.js"></script>
@endsection

@section('content')

    <link rel="stylesheet" type="text/css" href="/css/pagination.css">

    <section style="background: #E9E9E9;padding: 25px">

        <form method="GET" action="{{route('getParamQuery')}}" id="main_form">
            <div class="container">
                <div class="row gy-2">
                    <div class="col-md-5 col-sm-12">
                        <p class="h5">Кого вы ищете</p>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group1" id="group1">
                            <input type="checkbox" class="btn-check" id="cancel1" autocomplete="false" @if(!request()->hasAny(['dog', 'cat'])) checked @endif>
                            <label class="btn btn-outline-dark" for="cancel1">Любое</label>

                            <input type="checkbox" class="btn-check" id="btncheckcatordog1" autocomplete="false" name="dog" @if(request()->has("dog")) checked @endif>
                            <label class="btn btn-outline-dark" for="btncheckcatordog1">Собака</label>

                            <input type="checkbox" class="btn-check" id="btncheckcatordog2" autocomplete="false"  name="cat" @if(request()->has("cat")) checked @endif>
                            <label class="btn btn-outline-dark" for="btncheckcatordog2">Кошка</label>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <p class="h5">Возраст питомца</p>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group2" id="group2">
                            <input type="checkbox" class="btn-check" id="cancel2" autocomplete="false" @if(!request()->hasAny(['0-1year', '2-6years', '7plusyears'])) checked @endif>
                            <label class="btn btn-outline-dark" for="cancel2">Любое</label>

                            <input type="checkbox" class="btn-check" id="btncheckage1" autocomplete="false" name="0-1year" @if(request()->has("0-1year")) checked @endif>
                            <label class="btn btn-outline-dark" for="btncheckage1">0-1 год</label>

                            <input type="checkbox" class="btn-check" id="btncheckage2" autocomplete="false"  name="2-6years" @if(request()->has("2-6years")) checked @endif>
                            <label class="btn btn-outline-dark" for="btncheckage2">2-6 года</label>

                            <input type="checkbox" class="btn-check" id="btncheckage3" autocomplete="false"  name="7plusyears" @if(request()->has("7plusyears")) checked @endif>
                            <label class="btn btn-outline-dark" for="btncheckage3">7+ лет</label>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <p class="h5">Пол питомца</p>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group2" id="group3">
                            <input type="checkbox" class="btn-check" id="cancel3" autocomplete="false" @if(!request()->hasAny(['boy', 'girl'])) checked @endif>
                            <label class="btn btn-outline-dark" for="cancel3">Любое</label>

                            <input type="checkbox" class="btn-check" id="btnchecksex1" autocomplete="false" name="boy" @if(request()->has("boy")) checked @endif>
                            <label class="btn btn-outline-dark" for="btnchecksex1">Мальчик</label>

                            <input type="checkbox" class="btn-check" id="btnchecksex2" autocomplete="false"  name="girl" @if(request()->has("girl")) checked @endif>
                            <label class="btn btn-outline-dark" for="btnchecksex2">Девочка</label>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <p class="h5">Характер питомца</p>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group4" id="group4">
                            <input type="checkbox" class="btn-check" id="cancel4" autocomplete="false" @if(!request()->hasAny(['calm', 'active'])) checked @endif>
                            <label class="btn btn-outline-dark" for="cancel4">Любое</label>

                            <input type="checkbox" class="btn-check" id="btnchecktemper1" autocomplete="false" name="calm" @if(request()->has("calm")) checked @endif>
                            <label class="btn btn-outline-dark" for="btnchecktemper1">Спокойный</label>

                            <input type="checkbox" class="btn-check" id="btnchecktemper2" autocomplete="false"  name="active" @if(request()->has("active")) checked @endif>
                            <label class="btn btn-outline-dark" for="btnchecktemper2">Активный</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" style="padding: 20px">
                    <div class="col">
                        <div class="text-center">
                            <input class="btn btn-outline-dark" id="reset" type="reset" value="Очистить">
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <div class="container">
            <div class="row">
                @foreach($animals as $current_animal)
                    <div class="col-sm-6 col-md-3">
                        @include('includes.show-little-card', $current_animal)
                    </div>
                @endforeach
            </div>
        </div>

        {{$animals->links('vendor.pagination.bootstrap-4')}}

    </section>
@endsection
