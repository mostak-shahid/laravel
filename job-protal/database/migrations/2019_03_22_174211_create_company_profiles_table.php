<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id');
            $table->string('company_name')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('thana')->nullable();
            $table->text('company_address')->nullable();
            $table->text('company_type')->nullable();
            $table->text('business_description')->nullable();
            $table->string('license_no')->nullable();
            $table->string('rl_no')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_logo')->nullable();
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
        Schema::dropIfExists('company_profiles');
    }
}
