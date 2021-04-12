@extends('layouts.main-layout')

@section('content')

    @php
        $rem_dogs = 12-count($dogs);
        $rem_cats = 12-count($cats);
        if ($rem_dogs > 0)
        {
            for($i = 12-$rem_dogs; $i < 12; $i++)
            {
                $pointer = rand(0, 11-$rem_dogs);
                $dogs[$i] = $dogs[$pointer];
            }
        }
        if ($rem_cats > 0)
        {
            for($i = 12-$rem_cats; $i < 12; $i++)
            {
                $pointer = rand(0, 11-$rem_cats);
                $cats[$i] = $cats[$pointer];
            }
        }
    @endphp
    <section style="background: #E9E9E9;padding-top: 50px">
        <div class="container">
            <h1 class="text-center">Наши собаки</h1>
            @include('includes.carousel',[
                'animals' => $dogs,
                'idCarousel' => 'carouselControls0',
                ])

            <div class="text-center">
                <a href="{{route('getParamQuery')}}" class="btn btn-outline-dark">Посмотреть всех животных</a>
            </div>
        </div>
    </section>

    <section style="background: #E9E9E9;padding-top: 50px; padding-bottom: 50px">
        <div class="container">
            <h1 class="text-center">Наши кошки</h1>
            @include('includes.carousel',[
                'animals' => $cats,
                'idCarousel' => 'carouselControls1',
                ])

            <div class="text-center">
                <a href="{{route('getParamQuery')}}" class="btn btn-outline-dark">Посмотреть всех животных</a>
            </div>
        </div>
    </section>

@endsection
