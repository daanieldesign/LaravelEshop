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
            Schema::table('products', function (Blueprint $table) {
                $table->string('image_url')->nullable(); // Pro URL obrázku
                $table->string('subtitle')->nullable(); // Pro podtitulek
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn(['image_url', 'subtitle']);
            });
    }
};
