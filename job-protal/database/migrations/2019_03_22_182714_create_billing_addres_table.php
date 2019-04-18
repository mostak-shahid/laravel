<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingAddresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_addres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id');
            $table->text('billing_address')->nullable();
            $table->string('billing_phone_no',20)->nullable();
            $table->string('billing_email',50)->nullable();
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
        Schema::dropIfExists('billing_addres');
    }
}
