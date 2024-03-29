<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('description');
            $table->string('author');
            $table->date('datepost');
            $table->integer('likes');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
