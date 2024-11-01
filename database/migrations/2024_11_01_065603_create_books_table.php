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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');             // Title of the book
            $table->string('author');            // Author of the book
            $table->string('isbn')->unique();    // ISBN number
            $table->integer('publication_year'); // Year of publication
            $table->string('genre');             // Genre or category
            $table->integer('copies')->default(1); // Number of copies available
            $table->boolean('is_borrowed')->default(false); // Borrowed status
            $table->timestamps();                // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
