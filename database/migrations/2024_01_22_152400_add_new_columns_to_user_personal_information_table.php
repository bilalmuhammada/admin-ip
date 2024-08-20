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
        Schema::table('user_personal_information', function (Blueprint $table) {
            $table->string('eye_color')->nullable()->after('gender');
            $table->integer('height')->nullable()->after('eye_color');
            $table->integer('weight')->nullable()->after('height');
            $table->integer('shoes_size')->nullable()->after('gender');
            $table->text('bio')->nullable()->after('shoes_size');
            $table->boolean('willing_to_traval')->nullable()->after('gender');
            $table->boolean('is_collaboration')->nullable()->after('willing_to_traval');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_personal_information', function (Blueprint $table) {
            
        });
    }
};
