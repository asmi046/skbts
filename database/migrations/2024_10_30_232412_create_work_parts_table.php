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
        Schema::create('work_parts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Заголовок');
            $table->text('services')->comment('Услуги');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_parts');
    }
};
