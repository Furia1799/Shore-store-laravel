<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListOrdes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_ordes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table-> foreignId('id_order')->unique();;
            $table-> foreignId('id_product')->unique();;
            $table->integer('unit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_ordes');
    }
}
