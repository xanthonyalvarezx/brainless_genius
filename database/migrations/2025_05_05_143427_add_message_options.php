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
        Schema::table('messages', function (Blueprint $table) {
            $table->integer('saved')->nullable()->after('message')->default(0);
            $table->integer('job')->nullable()->after('saved')->default(0);
            $table->integer('reply')->nullable()->after('job')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn('saved');
            $table->dropColumn('job');
            $table->dropColumn('reply');
        });
    }
};
