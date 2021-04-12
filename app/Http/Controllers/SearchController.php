<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getParamQuery(Request $request)
    {
        $animalQuery = Animal::query();
        $catordogs = [
            'dog' => 'dog',
            'cat' => 'cat',
        ];
        $ages = [
            '0-1year' => '0-1 год',
            '2-6years' => '2-6 года',
            '7plusyears' => '7+ лет',
        ];
        $sexes = [
            'girl' => 'Девочка',
            'boy' => 'Мальчик',
        ];
        $tempers = [
            'calm' => 'Спокойный',
            'active' => 'Активный',
        ];
        $speces = [
            'catordog' => $catordogs,
            'age' => $ages,
            'sex' => $sexes,
            'temper' => $tempers
        ];

        foreach ($speces as $spec)
        {
            $current_key = key($speces);
            $animalQuery->where( function ($query) use ($request, $spec, $current_key) {
                foreach ($spec as $item)
                {
                    if($request->filled(key($spec)))
                    {
                        $query->orWhere($current_key, $item);
                    }
                    next($spec);
                }
            });
            next($speces);
        }

        $animals = $animalQuery->paginate(12);

        return view('pages.search', [
            'animals' => $animals,
        ]);
    }
}
