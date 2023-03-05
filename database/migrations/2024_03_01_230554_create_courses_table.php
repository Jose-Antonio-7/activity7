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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->unsignedInteger('cover');
            $table->string('content');
            

            $table->unsignedBigInteger('kit_id');
            $table->foreign('kit_id')->references('id')->on('kits');
                

            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');
                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
