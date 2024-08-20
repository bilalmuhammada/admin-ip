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
        Schema::create('user_profession_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('professional_category')->nullable();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('category_model_id')->nullable()->constrained();
            $table->string('skills', 1000)->nullable();
            $table->decimal('price', 9, 2)->nullable()->default(0);
            $table->date('available_from_date')->nullable();
            $table->date('available_to_date')->nullable();


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
        Schema::dropIfExists('user_profession_details');
    }
};
