<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('status', 20)->default('baru')->change();
        });

        DB::table('products')->update([
            'status' => DB::raw("CASE WHEN stock = 99 THEN 'digital' WHEN stock <= 1 THEN 'bekas' ELSE 'baru' END"),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('products')->update([
            'status' => DB::raw("CASE WHEN status = 'digital' THEN 1 ELSE 0 END"),
        ]);

        Schema::table('products', function (Blueprint $table) {
            $table->boolean('status')->default(true)->change();
        });
    }
};
