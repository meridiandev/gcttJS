<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_courses', function (Blueprint $table) {
            $table->unsignedInteger('course_id')->default(NULL)->comment('ID');
            $table->string('course_name')->default(NULL)->comment('Наименование курсов');
            $table->string('course_type')->default(NULL)->comment('Тип курсов(DropDown) (1.1.5.2.1)');
            $table->string('course_location')->default(NULL)->comment('Место проведения');
            $table->string('course_education_document')->default(NULL)->comment('Документ об образовании(DropDown) (1.1.5.2.2)');
            $table->string('course_education_series')->default(NULL)->comment('Серия документа об образовании');
            $table->string('course_education_number')->default(NULL)->comment('Номер документа об образовании');
            $table->binary('course_education_date_of_issue')->default(NULL)->comment('Дата выдачи документа об образовании');
            $table->string('course_education_qualification')->default(NULL)->comment('Квалификация(DropDown) (1.1.5.2.3)');
            $table->string('course_education_hour')->default(NULL)->comment('Количество часов');
            $table->boolean('course_education_teacher')->default(NULL)->comment('Педагогическое образование(Да или Нет) по умолчанию Нет');
            $table->foreign(['course_id'])->references('id')->on('staff')->cascadeOnDelete();

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
        Schema::dropIfExists('staff_courses');
    }
}
