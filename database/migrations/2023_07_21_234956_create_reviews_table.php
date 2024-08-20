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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->date('date')->nullable();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->decimal('overall_rating', 2, 1)->default(0);
            $table->decimal('star_rating', 2, 1)->default(0);

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
        Schema::dropIfExists('reviews');
    }
};
