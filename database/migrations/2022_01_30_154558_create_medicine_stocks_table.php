<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('medicine_id');
            $table->unsignedBigInteger('medicine_manufacturer_id');
            $table->string('supplier_name');
            $table->date('manufactured_date');
            $table->date('expiry_date');
            $table->double('cost_price');
            $table->double('quantity');
            $table->timestamps();

            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
            $table->foreign('medicine_manufacturer_id')->references('id')->on('medicine_manufacturers')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('medicine_stocks');
    }
}
