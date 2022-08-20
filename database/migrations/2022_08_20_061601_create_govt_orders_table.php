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
        Schema::create('govt_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id')->references('id')->on('go_types');
            $table->String('go_subject', 250)->nullable();
            $table->date('go_date')->nullable();
            $table->String('go_doc', 150)->nullable();
            $table->integer('order_by')->default(0);
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
        Schema::dropIfExists('govt_orders');
    }
};
