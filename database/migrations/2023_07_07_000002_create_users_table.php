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
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->foreignId('role_id')->nullable()->constrained('roles');
            $table->foreignId('plan_id')->nullable()->constrained();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('position')->nullable();
            $table->string('password')->nullable();
            $table->foreignId('country_id')->nullable()->constrained();
            $table->foreignId('state_id')->nullable()->constrained();
            $table->foreignId('city_id')->nullable()->constrained();
            $table->string('nationality')->nullable();
            $table->string('sector')->nullable();
            $table->string('post_code')->nullable();
            $table->integer('total_views')->nullable();
            $table->integer('total_clicks')->nullable();
            $table->enum('type', ['BUYER', 'SELLER'])->default('BUYER');
            $table->text('description')->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE', 'POPULAR', 'PENDING', 'RATED', 'FAVORITE'])->default('ACTIVE');
            $table->date('dob')->nullable();
            $table->string('password_reset_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
