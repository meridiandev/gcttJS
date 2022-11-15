<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Название документа');
            //$table->string('type')->comment('Тип документа: 0 - устав, 1 - лицензия, 2 - приказ, 3 - положение, 4 - правила, 5 - план мероприятий, 6 - учебный план, 7 - насписание занятий, 8 - форма, 9 - прейскурант');
            $table->string('link_document')->comment('Ссылка на документ');
            $table->string('show')->default(0)->comment('Виден всем? по умолчанию - нет!');
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
        Schema::dropIfExists('documents');
    }
}
