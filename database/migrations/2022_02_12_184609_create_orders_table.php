<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date_order');
            $table->string('customer_name');
            $table->string('customer_id');
            $table->string('customer_address');
            $table->string('customer_email');
            $table->string('order_currency');
            $table->string('product_id');
            $table->string('product_name');
            $table->string('product_quantity');
            $table->string('product_unit_of_measure');
            $table->float('net_product_value');
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
        Schema::dropIfExists('orders');
    }
}
