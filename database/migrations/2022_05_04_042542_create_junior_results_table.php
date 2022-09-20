<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junior_results', function (Blueprint $table) {
            $table->id();
            $table->string('english_language');
            $table->string('mathematics');
            $table->string('business_studies');
            $table->string('basic_science');
            $table->string('social_studies');
            $table->string('intro_tech');
            $table->string('french');
            $table->string('admission_num');
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
        Schema::dropIfExists('junior_results');
    }
};
