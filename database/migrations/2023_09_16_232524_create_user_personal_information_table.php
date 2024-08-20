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
        Schema::create('user_personal_information', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('dialects')->nullable();
            $table->string('hair_type')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('age')->nullable();
            $table->string('valid_license')->nullable();
            $table->string('tattoes')->nullable();
            $table->string('gender')->nullable();
            $table->foreignId('spoken_language_id')->nullable()->constrained();
            $table->foreignId('ethnicity_id')->nullable()->constrained();

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
        Schema::dropIfExists('user_personal_information');
    }
};
