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
        Schema::create('user_social_media_profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('type')->nullable();
            $table->string('username')->nullable();
            $table->string('followers')->nullable();

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
        Schema::dropIfExists('user_social_media_profiles');
    }
};
