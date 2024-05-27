<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('image')->nullable();
            $table->string('tags');
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }
};