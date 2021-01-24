<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_awards', function (Blueprint $table) {
            $table->unsignedBigInteger('award_id')->default(NULL)->comment('ID');
            $table->string('award_name')->default(NULL)->comment('Наименование');
            $table->string('award_type')->default(NULL)->comment('Тип (1.1.6.3.1)');
            $table->string('award_type_status')->default(NULL)->comment('Тип награды (1.1.6.3.2)');
            $table->foreign(['award_id'])->references('id')->on('staff')->cascadeOnDelete();

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
        Schema::dropIfExists('staff_awards');
    }
}
