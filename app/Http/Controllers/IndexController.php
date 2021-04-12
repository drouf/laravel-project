<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class IndexController extends Controller
{
    public function index()
    {
        $dogs = Animal::where('catordog', 'dog')
            ->where('status', 1) //status - статус нахождения животного в приюте, где 0 - уже не в приюте, 1 - в приюте
            ->get();
        $cats = Animal::where('catordog', 'cat')
            ->where('status', 1)
            ->get();
        return view('pages.index', [
            'dogs' => $dogs,
            'cats' => $cats,
        ]);
    }

    public function explanation()
    {
        return view('pages.explanation');
    }

    public function getAnimalCard($slug)
    {
        $animal = Animal::where('slug', $slug)->first();
        return view('pages.show-animal-card', [
            'animal' => $animal,
        ]);
    }


}
