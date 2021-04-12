<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $collection_sex = collect(['Девочка', 'Мальчик']);
        $collection_age = collect(['0-1 год', '2-6 года', '7+ лет']);
        $collection_vaccination = collect(['Проведена', 'Не проведена']);
        $collection_temper = collect(['Активный', 'Спокойный']);
        $collection_sterilization = collect(['Проведена', 'Не проведена']);
        $collection_toilet = collect(['Приучен(a)', 'Не приучен(a)']);
        $collection_tokids = collect(['Позитивноe', 'Негативное', 'Нейтральное']);
        $collection_toanimals = collect(['Позитивноe', 'Негативное', 'Нейтральное']);
        for ($i = 0; $i< 22; $i++)
        {
            $catordog = $this->catordogfunc($i);
            DB::table('animals')->insert([
                'name' => $catordog."_".$i,
                'catordog' => $catordog,
                'sex' => $collection_sex->random(),
                'age' => $collection_age->random(),
                'vacсination' => $collection_vaccination->random(),
                'temper' => $collection_temper->random(),
                'sterilization' => $collection_sterilization->random(),
                'toilet' => $collection_toilet->random(),
                'tokids' => $collection_tokids->random(),
                'toanimals' => $collection_toanimals->random(),
                'slug' => Str::random(10),
                'image_path' => 'https://res.cloudinary.com/dofy6farv/image/upload/w_1280,h_1024,c_fill/v1617468210/images/'.$catordog.'s/'.$catordog.($i+1).'.jpg'
            ]);
        }
    }

    private function catordogfunc($i)
    {
        if($i < 12)
        {
            return "dog";
        }
        else
        {
            return "cat";
        }
    }
}

