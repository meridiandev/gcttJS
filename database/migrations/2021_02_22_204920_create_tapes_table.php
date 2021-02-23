<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tapes', function (Blueprint $table) {
            $table->id();
            //$table->bigIncrements('id');
            $table->string('title', 300);
            $table->string('content', 5000);
            $table->string('content_main_page', 300);
            $table->string('author')->unsignedInteger()->default();
            $table->string('slug', 100)->unsignedInteger()->default();
            $table->string('link_images_1', 300)->unsignedInteger()->default();
            $table->string('link_images_2', 300)->unsignedInteger()->default();
            $table->string('link_images_3', 300)->unsignedInteger()->default();
            $table->string('link_images_4', 300)->unsignedInteger()->default();
            $table->string('link_images_5', 300)->unsignedInteger()->default();
            $table->string('content_access')->unsignedInteger()->default(0);
            $table->boolean('organization_show')->unsignedInteger()->default(10);
            $table->boolean('published')->unsignedInteger()->default(0);
            $table->boolean('published_slider_status')->unsignedInteger()->default(0);
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
        Schema::dropIfExists('tapes');
    }
}
