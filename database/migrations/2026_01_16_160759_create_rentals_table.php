<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('rentals', function (Blueprint $table) {
        $table->id();
        $table->foreignId('movie_id')->constrained()->cascadeOnDelete();
        $table->foreignId('user_id')->constrained()->restrictOnDelete();
        $table->date('rental_date');
        $table->date('return_date')->nullable();
        $table->boolean('returned')->default(false);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('rentals');
}
};