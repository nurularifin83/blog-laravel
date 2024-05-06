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
            $table->bigInteger('post_author');
            $table->bigInteger('post_category_ID');
            $table->text('post_image')->nullable();
            $table->longText('post_content')->nullable()->charset('utf8mb4');
            $table->text('post_title')->nullable()->charset('utf8mb4');
            $table->string('post_status')->nullable()->charset('utf8mb4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
