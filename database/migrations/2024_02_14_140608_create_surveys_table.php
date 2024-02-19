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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('str_slug',155);
            $table->string('survey_title',255);
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->integer('category_id');
            $table->string('description',1500)->nullable();
            $table->integer('created_by');
            $table->tinyInteger('status')->comment('0=>inactive,1=>active,2=>remove');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
