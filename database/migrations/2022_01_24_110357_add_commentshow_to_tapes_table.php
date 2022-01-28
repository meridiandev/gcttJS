<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommentshowToTapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tapes', function (Blueprint $table) {
            $table->boolean('comments_shows')->default(0)->after('date_published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tapes', function (Blueprint $table) {
            $table->dropColumn('comments_shows');
        });
    }
}
