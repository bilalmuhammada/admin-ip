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
        Schema::create('user_histories', function (Blueprint $table) {
            $table->id();

            $table->foreignId('influencer_id')->nullable()->constrained('users');
            $table->string('action'); // e.g., 'click' or 'view'
            $table->string('target'); // e.g., the URL or identifier of the clicked or viewed item
            $table->date('activity_date');
            $table->foreignId('action_by')->nullable()->constrained('users');

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
        Schema::dropIfExists('user_histories');
    }
};
