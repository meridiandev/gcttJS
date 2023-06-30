<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->comment('site_title');
            $table->string('site_header')->comment('site_header');
            $table->string('site_email')->comment('site_email');
            $table->string('site_phone')->comment('site_phone');
            $table->string('site_meridian')->comment('site_meridian');
            $table->string('site_address')->comment('site_address');
            $table->string('site_footer')->comment('site_footer');
            $table->string('site_footer_link')->comment('site_footer_link');
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
        Schema::dropIfExists('settings');
    }
}
