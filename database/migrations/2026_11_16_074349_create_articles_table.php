<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('summary');
            $table->text('body');
            $table->string('permalink');
            $table->timestamp('published_at')->nullable();
            $table->foreignId('category_id')->constrained('categories');
            $table->enum('status', ['draft', 'published', 'archived']);
            $table->string('thumbnail_url')->nullable();
            $table->string('author_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
