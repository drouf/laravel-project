<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->enum('catordog', ['cat', 'dog']);
            $table->boolean('status')->default(1);
            $table->enum('sex', ['Девочка', 'Мальчик']);
            $table->enum('age', ['0-1 год', '2-6 года', '7+ лет']);
            $table->enum('vacсination', ['Проведена', 'Не проведена']);
            $table->enum('temper', ['Активный', 'Спокойный']);
            $table->enum('sterilization', ['Проведена', 'Не проведена']);
            $table->enum('toilet', ['Приучен(a)', 'Не приучен(a)']);
            $table->enum('tokids', ['Позитивноe', 'Негативное', 'Нейтральное']);
            $table->enum('toanimals', ['Позитивноe', 'Негативное', 'Нейтральное']);
            $table->string('slug')->unique();
            $table->string('image_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
