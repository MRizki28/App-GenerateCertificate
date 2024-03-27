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
        Schema::create('tb_template_certificate', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_user')->nullable()->constrained('users');
            $table->string('template');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_template_certificate');
    }
};
