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
        Schema::create('avies', function (Blueprint $table) {
            $table->id('idavis');
            $table->foreignId('iduser')->nullable()->default(null);
            $table->string('name');
            $table->string('email');
            $table->text('avis');
            $table->string('image');
            $table->string('rate');
            $table->foreign('iduser')->references('iduser')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avies');
    }
};
