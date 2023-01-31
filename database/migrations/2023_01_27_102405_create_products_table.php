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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("count");
            $table->bigInteger('price');
            $table->tinyInteger('status_for_store');//1-kirim; 2-chiqim; 3-vozvrat

            $table->index("store_id");
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');

            $table->index("client_id");
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

//            $table->index("client_id");
//            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

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
        Schema::dropIfExists('products');
    }
};
