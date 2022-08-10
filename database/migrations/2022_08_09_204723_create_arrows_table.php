<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrows', function (Blueprint $table) {
            $table->id();
            $table->string('logo', 300)->comment('Ссылка на логотип');
            $table->string('name', 200)->comment('Название направления');
            $table->string('content', 2000)->comment('Описание направления');
            $table->string('link_program', 1000)->comment('Ссылка на программу');
            $table->string('actual')->default(0)->comment('Актуальность в % направления');
            $table->string('hours')->default(0)->comment('Часов в программе');
            $table->string('show')->default(1)->comment('Показать или скрыть');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arrows');
    }
}
