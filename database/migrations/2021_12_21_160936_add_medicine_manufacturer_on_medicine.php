<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMedicineManufacturerOnMedicine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medicines', function (Blueprint $table) {
            $table->unsignedBigInteger('medicine_manufacturer_id')->nullable();
            $table->foreign('medicine_manufacturer_id')->references('id')->on('medicine_manufacturers')->onDelete('set null');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicines', function (Blueprint $table) {
            $table->dropForeign('medicine_manufacturer-id');
            $table->dropColumn('medicine_manufacturer-id');
        });
    }
}
