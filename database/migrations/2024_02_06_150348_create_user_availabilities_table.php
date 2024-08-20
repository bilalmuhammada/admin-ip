<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_availabilities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('country_id')->nullable()->constrained();
            $table->foreignId('city_id')->nullable()->constrained();
            $table->date('availability_date')->nullable();
            $table->boolean('is_default')->nullable()->default(0);

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
        Schema::dropIfExists('user_availabilities');
    }
};
