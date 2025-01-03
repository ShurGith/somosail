<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('excerpt');
            $table->foreignId('user_id');
            $table->string('image')->default('default_image.png');
            $table->boolean('is_published')->default(true);
            $table->boolean('publico')->default(true);
            $table->timestamps();
           // $table->foreign('autor_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
