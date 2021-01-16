<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffDeletedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_deleteds', function (Blueprint $table) {
            $table->unsignedInteger('deleted_id')->default(NULL)->comment('');
            $table->boolean('deleted_status')->default(FALSE)->comment('Удалить без приказа(Check) (удаляет дубликат или ошибочные данные)');
            $table->binary('delete_date')->default(NULL)->comment('Дата окончания отпуска');
            $table->string('delete_dismissal_order_number')->default(NULL)->comment('Номер приказа об увольнении');
            $table->string('delete_comment')->default(NULL)->comment('Основание увольнения(Comments)');
            $table->foreign(['deleted_id'])->references('id')->on('staff')->cascadeOnDelete();

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
        Schema::dropIfExists('staff_deleteds');
    }
}
