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
        Schema::create('contractwithproducts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\ProductModel::class, 'product_id');
            $table->foreignIdFor(\App\Models\ContractModel::class, 'contract_id');
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
        Schema::dropIfExists('contractwithproducts');
    }
};
