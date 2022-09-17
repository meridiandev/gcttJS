<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Название расписания');
            $table->string('link_schedule')->comment('Ссылка на расписание');
            $table->string('show')->default(0)->comment('Виден всем? по умолчанию - нет!');
            $table->string('comments')->default('Нет')->comment('Комментарий, по умолчанию - нет');
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
        Schema::dropIfExists('schedules');
    }
};
