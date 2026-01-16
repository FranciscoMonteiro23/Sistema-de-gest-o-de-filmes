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
    Schema::create('movies', function (Blueprint $table) {
        $table->id();
        $table->string('title', 255);
        $table->string('director', 255);
        $table->foreignId('genre_id')->constrained()->cascadeOnDelete();
        $table->integer('release_year')->nullable();
        $table->boolean('available')->default(true);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('movies');
}
};