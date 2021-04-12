<div id="{{$idCarousel}}" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @for($carousel_item_number = 0; $carousel_item_number < 3; $carousel_item_number++)
            <div class="carousel-item @if($carousel_item_number == 0) active @endif">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        @for($card_number = 0; $card_number < 4; $card_number++)
                            @php
                                if(isset($animals))
                                    $current_animal = $animals[4*$carousel_item_number+$card_number];
                            @endphp
                            <div class="col-3">
                                @include("includes.show-little-card", ['current_animal' =>$current_animal])
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#{{$idCarousel}}" data-bs-slide="prev" style="width: 50px; left: 40px">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#{{$idCarousel}}" data-bs-slide="next" style="width: 50px; right: 40px">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
