<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            // 1
            $table->string('account_id')->comment('Привязка к учетной записи, если есть.');
            $table->string('organization',100)->unique()->comment('Организация/Меридиан/Кванториум/ИТкуб');
            $table->string('first_name', 100)->unique()->comment('Имя');
            $table->string('surname', 100)->unique()->comment('Фамилия');
            $table->string('patronymic', 100)->unique()->comment('Отчество');
            $table->boolean('gender')->unsigned()->default(NULL)->comment('Пол');
            $table->binary('data_of_birth')->comment('Дата рождения');
            // 2
            $table->string('home_address', 200)->default(NULL)->comment('Домашинй адрес');
            $table->string('email_address_0', 100)->unique()->comment('Почтовый ящик');
            $table->string('email_address_1', 100)->default(NULL)->comment('Почтовый ящик дополнительный');
            $table->string('email_address_2', 100)->default(NULL)->comment('Почтовый ящик дополнительный');
            $table->string('telephone_mobile', 20)->comment('Мобильный телефон');
            $table->string('telephone_home',20)->comment('Домашний телефон');
            $table->string('telephone_relative', 20)->comment('Телефон родственника');
            // 3
            $table->char('time_standard', 100)->comment('Табельный номер');
            $table->char('qualification_group', 100)->default(NULL)->comment('Квалификационная группа');
            $table->string('applicant_student')->comment('Соискатель/ Аспирант (Check)');
            $table->binary('start_work')->comment('Дата начала трудовой деятельности');
            $table->binary('end_work')->comment('Дата окончания трудовой деятельности');
            $table->string('underemployment')->comment('Неполная занятость(Да или нет)по умлочанию - НЕТ');
            $table->string('retiree')->comment('Пенсионер по выслуге лет');
            $table->string('staff_photo')->default(NULL)->comment('Фотография работника');
            $table->string('inn')->default(NULL)->comment('ИНН');
            $table->string('snils')->default(NULL)->comment('СНИЛС');
            $table->string('passport_series')->default(NULL)->comment('Серия паспорта');
            $table->string('passport_number')->default(NULL)->comment('Номер паспорта');
            $table->string('passport_issued_by')->default(NULL)->comment('Кем выдан паспорт УФМС / МВД');
            $table->binary('passport_date_of_issue')->default(NULL)->comment('Дата выдачи');
            $table->string('policy_series')->default(NULL)->comment('Серия полиса');
            $table->string('policy_number')->default(NULL)->comment('Номер полиса');
            $table->binary('policy_date_of_issue')->default(NULL)->comment('Дата выдачи полиса');
            $table->string('policy_insured_company')->default(NULL)->comment('Компания страхователь');
            // 4
            // staff_education_table->
            // 5
            // staff_curses_table->
            // 6
            // staff_awards_table->
            // 7
            // staff_portfolios_table->
            // 8
            // staff_events_table->
            // 9
            // staff_holidayes_table->
            // 10
            // staff_deleteds_table->

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
        Schema::dropIfExists('staff');
    }
}
