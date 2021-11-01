<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('default_system');
            $table->timestamps();
        });

        $categories = [
            'Militar',
            'Esporte',
            'Região',
            'Educação',
            'Crime, Direito e Justiça',
            'Saúde',
            'Transpote',
            'Global',
            'Feiras e Eventos',
            'Cultura e Entretenimento',
            'Economia e Negocios',
            'Ciencia e Tecnologia'
        ];

        foreach ($categories as $key => $value) {
            \App\Models\News\Category::create([
                'name' => $value,
                'default_system' => true
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_categories');
    }
}
