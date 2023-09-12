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
        Schema::create('requestbooks', function (Blueprint $table) {
            $table->id();
            $table->string('studentid');
            $table->string('studentname');
            $table->string('bookid');
            $table->string('bookname');
            $table->string('author_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requestbooks');
    }
};
