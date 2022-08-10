<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 100)->comment('Ф.И.О');
            $table->string('images')->default('assets/img/team/default.svg')->comment('Фотография');
            $table->string('rang')->default('1')->comment('0 - администрация, 1 - педагог, 2 - прочие');
            $table->string('content', 1000)->comment('Информация');
            $table->string('phone')->comment('Телефон');
            $table->string('email')->comment('Почта');
            $table->boolean('show')->default('1')->comment('Показать? 0 - нет, 1 - да');
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
        Schema::dropIfExists('teachers');
    }
}
