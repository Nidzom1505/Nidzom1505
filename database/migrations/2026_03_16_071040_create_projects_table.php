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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nama_project')->index();
            $table->string('slug')->unique();
            $table->text('deskripsi');
            $table->text('tantangan')->nullable();
            $table->text('solusi')->nullable();

            $table->string('link_github')->nullable();
            $table->string('link_project')->nullable();

            $table->string('jenis');
            $table->json('tech_stack')->nullable();
            $table->bigInteger('tahun');
            $table->string('image');
            $table->json('screenshots')->nullable();

            $table->string('kontribusi')->nullable();
            $table->string('konteks')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
