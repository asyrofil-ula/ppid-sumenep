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
        Schema::create('aplikasi_layanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aplikasi');
            $table->string('post_by');
            $table->string('icon')->nullable();
            $table->boolean('is_active')->default(false);
            $table->text('description')->nullable();
            $table->string('path_dokumen')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplikasi_layanan');
    }
};
