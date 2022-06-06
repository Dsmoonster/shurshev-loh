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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('city', 255);
            $table->string('street', 255);
            $table->string('house', 255);
            $table->integer('apartment')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->integer('price')->unsigned();
            $table->enum('status', ['pending', 'canceled', 'success'])->default('pending');
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
        Schema::dropIfExists('orders');
    }
};
