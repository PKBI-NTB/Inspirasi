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
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->string('telpon');
            $table->string('alamat');
            $table->string('email');
            $table->string('url_instagram');
            $table->string('url_facebook');
            $table->string('url_tiktok');
            $table->string('url_youtube');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontaks');
    }
};
