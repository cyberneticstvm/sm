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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document_type')->references('id')->on('document_types');
            $table->String('title')->unique();
            $table->text('description')->nullable();
            $table->date('date')->nullable();
            $table->String('attachment_type', 1)->default('D')->comments('D-Document / I-Image / O-Other');
            $table->String('doc_url', 100)->nullable();
            $table->integer('status')->default(1)->comments('0-Archive / 1-Active');
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
        Schema::dropIfExists('documents');
    }
};
