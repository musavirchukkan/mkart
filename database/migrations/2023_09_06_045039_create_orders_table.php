<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string('order_number')->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('billing_name');
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('address_id')->on('user_addresses');

            $table->double('price', 15, 2);
            $table->enum('payment_status', ['paid', 'refunded', 'canceled']);
            $table->enum('mode_of_payment', ['cod', 'Gpay', 'Visa', 'Rupay', 'Mastercard']);
            $table->enum('status', ['placed', 'confirmed', 'shiped', 'delivered', 'returned']);
            $table->timestamps();
        });


        Schema::create('order_lines', function (Blueprint $table) {
            $table->bigIncrements('order_line_id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->integer('quantity');
            $table->double('price', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_lines');
        Schema::dropIfExists('orders');
    }
};
