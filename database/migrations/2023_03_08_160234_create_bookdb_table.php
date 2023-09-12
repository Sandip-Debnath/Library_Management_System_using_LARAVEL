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
        Schema::create('bookdb', function (Blueprint $table) {
            $table->id('id');
            $table->string('isbn_no',50);
            $table->string('book_name',200);
            $table->string('auth_name',200);
            $table->string('pub_name',200);
            $table->integer('bookcount')->default(1);
            $table->boolean('availability')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookdb');
    }
};
