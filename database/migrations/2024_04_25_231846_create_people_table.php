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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20)->notNullable();
            $table->string('First_name', 50)->notNullable();
            $table->string('Last_name', 50)->notNullable();
            $table->enum('Document_Type', ['CC', 'TI', 'Pasaporte', 'Nit'])->Nullable();
            $table->string('Document-number', 20);
            $table->string('Adress', 100);
            $table->string('Phone', 20)->Nullable();
            $table->string('Email', 50)->Nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
