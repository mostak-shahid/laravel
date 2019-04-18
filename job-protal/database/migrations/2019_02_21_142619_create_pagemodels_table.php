<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagemodels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pagename');
            $table->string('slug');
            $table->string('layout');
            $table->text('page_description')->nullable();
            $table->string('image')->nullable();
            $table->string('activation')->nullable();
            $table->string('metaname')->nullable();
            $table->text('metakeyword')->nullable();
            $table->text('metadescription')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagemodels');
    }
}
