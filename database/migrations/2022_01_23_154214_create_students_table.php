<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->char('inputsCertificate', 10);
            $table->string('first_name', 200)->comment('Имя');
            $table->string('surname', 200)->comment('Фамилия');
            $table->string('patronymic', 200)->comment('Отчество');
            $table->boolean('gender')->comment('Пол');
            $table->binary('data_of_birth')->comment('Дата рождения');
            $table->string('home_address_1', 200)->default(NULL)->comment('Населенный пункт');
            $table->string('home_address_2', 200)->default(NULL)->comment('Адрес регистрации');
            $table->string('class_education', 200)->comment('Класс/Курс');
            $table->string('location_education', 500)->comment('Место учебы');
            $table->string('parents', 300)->comment('Ф.И.О родителя');
            $table->string('email_address_0', 100)->unique()->comment('Email (электронная почта)');
            $table->string('telephone_mobile', 20)->comment('Номер телефона (родителя)');
            $table->string('arrows')->comment('Выберите направление из списка');
            $table->string('comments', 600)->default(NULL)->comment('Комментарий к форме (не обязательно)');
            $table->string('old_arrow')->default('')->comment('Обучался ли ребёнок ранее в IT-кубе? Если да, на каком направлении?');
            $table->boolean('verified')->default(0)->comment('Прошел проверку');
            $table->boolean('accepted')->default(0)->comment('Заявка в обработке');
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
        Schema::dropIfExists('students');
    }
}
