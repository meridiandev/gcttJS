<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_events', function (Blueprint $table) {
            $table->unsignedInteger('events_id')->default(NULL)->comment('Мероприятие id');
            $table->string('events_name')->default(NULL)->comment('Название мероприятия');
            $table->string('events_name')->default(NULL)->comment('Вид мероприятия (1.1.8.2.1.1)');
            $table->string('events_level')->default(NULL)->comment('Уровень проведения (1.1.8.2.1.2)');
            $table->string('events_form')->default(NULL)->comment('Форма участия (1.1.8.2.1.3)');
            $table->string('events_status')->default(NULL)->comment('Форма участия (1.1.8.2.1.3)');
            $table->string('events_concurs_name')->default(NULL)->comment('Название конкурсного мероприятия');
            $table->string('events_result')->default(NULL)->comment('Результат');
            $table->string('events_participation_year')->default(NULL)->comment('Год участия');
            $table->string('events_certificate_attach')->default(NULL)->comment('Прикрепить свидетельство');
            $table->foreign(['events_id'])->references('id')->on('staff')->cascadeOnDelete();

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
        Schema::dropIfExists('staff_events');
    }
}
