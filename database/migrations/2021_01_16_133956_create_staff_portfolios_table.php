<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_portfolios', function (Blueprint $table) {
            $table->unsignedInteger('portfolio_id')->nullable()->comment('Портфолио id');
            $table->string('portfolio_name', 300)->default(NULL)->comment('Наименование издания');
            $table->string('portfolio_years', 4)->default(NULL)->comment('Год издания');
            $table->string('portfolio_link', 500)->default(NULL)->comment('Где опубликованно(ссылка на публикацию)');
            $table->string('portfolio_certificate', 500)->default(NULL)->comment('Прикрепить свидеьельство(FilesAdd)');
            $table->foreign(['portfolio_id'])->references('id')->on('staff')->cascadeOnDelete();

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
        Schema::dropIfExists('staff_portfolios');
    }
}
