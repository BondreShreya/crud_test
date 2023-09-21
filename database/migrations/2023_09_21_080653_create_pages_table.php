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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('title', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->string('lang', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->text('content')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
