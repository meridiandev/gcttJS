<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_education', function (Blueprint $table) {
            $table->unsignedBigInteger('educational_id')->default(NULL)->comment('ДБ Образовательное учреждение');
            $table->string('educational_institution')->default(NULL)->comment('Образовательное учреждение');
            $table->string('educational_document')->default(NULL)->comment('Документ об образовании');
            $table->string('educational_series')->default(NULL)->comment('Серия документа об образовании');
            $table->string('educational_number')->default(NULL)->comment('Номер документа об образовании');
            $table->string('educational_date_of_issue')->default(NULL)->comment('Дата выдачи документа об образовании');
            $table->string('educational_level')->default(NULL)->comment('Уровень образования (1.1.4.1.2)');
            $table->string('educational_form')->default(NULL)->comment('Форма обучения (1.1.4.1.3)');
            $table->string('educational_specialty')->default(NULL)->comment('Специальность(База данных специальностей - DropDown ) (1.1.4.1.4)');
            $table->string('educational_qualification')->default(NULL)->comment('Квалификация');
            $table->boolean('educational_difference')->default(FALSE)->comment('Отличие(Check)');
            $table->boolean('educational_teacher')->default(FALSE)->comment('Педагогическое образование (Да или Нет)');
            $table->foreign(['educational_id'])->references('id')->on('staff')->cascadeOnDelete();

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
        Schema::dropIfExists('staff_education');
    }
}
