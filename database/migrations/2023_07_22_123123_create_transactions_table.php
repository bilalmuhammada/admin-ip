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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_number')->nullable();
            $table->enum('status', ['active', 'inactive', 'pending'])->default('active');
            $table->date('date')->nullable();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->decimal('amount', 9, 2)->default(0);
            $table->decimal('total_transaction', 9, 2)->default(0);
            $table->string('type')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
};
