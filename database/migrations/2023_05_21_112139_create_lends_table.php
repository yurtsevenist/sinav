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
        Schema::create('lends', function (Blueprint $table) {
            $table->id();
            $table->integer('uid')->comment("Kullanıcı id si");
            $table->integer('bid')->comment("kitap id si");
            $table->date('lenddate')->comment("ödünç alma tarihi");
            $table->date('deliverydate')->nullable()->comment("geri verme tarihi");
            $table->timestamps();
            $table->foreign('uid')
            ->references('id')
            ->on('users')->onDelete('cascade');
            $table->foreign('bid')
            ->references('id')
            ->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lends');
    }
};
