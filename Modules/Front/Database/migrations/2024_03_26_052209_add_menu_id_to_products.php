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
            $table->string('slug')->after('name');
            $table->foreignId('menu_id')->nullable()->after('price')->constrained();
            $table->foreignId('sub_menu_id')->nullable()->after('price')->constrained();
        });

        Schema::table('menus', function (Blueprint $table) {
            $table->string('slug')->after('name');
        });

        Schema::table('sub_menus', function (Blueprint $table) {
            $table->string('slug')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
