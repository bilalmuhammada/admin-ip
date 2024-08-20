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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('capital', 60)->nullable();
            $table->string('gsm_code', 20)->nullable();
            $table->string('currency_fullname', 60)->nullable();
            $table->string('currency_short_name', 20)->nullable();
            $table->string('currency_symbol', 20)->nullable();
            $table->boolean('priority')->nullable()->default(1);
            $table->boolean('status')->nullable()->default(1);
            $table->string('tax_type', 40)->nullable();

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
        Schema::dropIfExists('countries');
    }
};
