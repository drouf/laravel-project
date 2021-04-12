<div class="card mb-4">
    <div class="card-body">
        <img src="{{$current_animal->image_path}}" class="card-img-top" alt="...">
        <div class="text-center">
            <h5 class="card-title">{{$current_animal->name}}</h5>
            <a href="{{route('getAnimalCard', $current_animal->slug )}}" class="btn btn-outline-dark">Посмотреть</a>
        </div>
    </div>
</div>
