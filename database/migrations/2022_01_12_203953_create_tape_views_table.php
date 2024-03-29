<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTapeViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tape_views', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("tape_id");
            $table->string("slug");
            $table->string("url");
            $table->string("session_id");
            $table->unsignedInteger('user_id')->nullable();
            $table->string("ip");
            $table->string("agent");
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
        Schema::dropIfExists('tape_views');
    }
}
