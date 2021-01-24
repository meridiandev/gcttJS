<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffHolidayesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_holidayes', function (Blueprint $table) {
            $table->unsignedBigInteger('holidays_id')->default(NULL)->comment('Тип отпуска');
            $table->string('holidays_type')->default(NULL)->comment('');
            $table->binary('holidays_start')->default(NULL)->comment('Дата начала отпуска');
            $table->binary('holidays_end')->default(NULL)->comment('Дата окончания отпуска');
            $table->foreign(['holidays_id'])->references('id')->on('staff')->cascadeOnDelete();

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
        Schema::dropIfExists('staff_holidayes');
    }
}
