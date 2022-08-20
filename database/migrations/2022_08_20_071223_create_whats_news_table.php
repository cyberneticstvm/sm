<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whats_news', function (Blueprint $table) {
            $table->id();
            $table->String('title', 250)->unique();
            $table->String('doc_type', 10)->nullable();            
            $table->String('url', 250)->nullable();
            $table->String('document', 250)->nullable();
            $table->unsignedBigInteger('category')->references('id')->on('whats_new_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('whats_news');
    }
};
