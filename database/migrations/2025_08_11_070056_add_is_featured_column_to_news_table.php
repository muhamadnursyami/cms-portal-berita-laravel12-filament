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
        // dikarenakan kita lupa menambahkan migration isfeature ke dalam migrate, new kemarin,
        // jadi untuk menambahkan column is_featured perlu membuat sebuah migration baru yang merujuk kedalam
        // table news
        Schema::table('news', function (Blueprint $table) {
            $table->boolean('is_featured')->default(false)->after('content');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('news', function (Blueprint $table) {
            //
        });
    }
};
