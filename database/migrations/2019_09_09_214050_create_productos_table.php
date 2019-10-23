<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_name');
            $table->string('pro_code');
            $table->double('pro_precio');
            $table->text('pro_info');
            $table->string('pro_category');
            $table->string('pro_type');
            $table->string('pro_image')->nullable();
            $table->string('pro_estado');
            $table->string('spl_price');
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
        Schema::dropIfExists('productos');
    }
}
