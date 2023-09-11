<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            $table->string('category_name');
            $table->string('category_image')->nullable();
            $table->timestamps();
        });

        Schema::create('sub_categories', function (Blueprint $table) {
            $table->bigIncrements('sub_category_id');
            $table->string('name');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->string('sub_category_image')->nullable();
            $table->timestamps();
        });


        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->double('price', 15, 2);
            $table->double('sale_price', 15, 2);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('category_id')->on('categories')->nullable();
            $table->string('main_image')->nullable();
            $table->string('image')->nullable();
            $table->longText('description');
            $table->string('tags')->nullable();
            $table->integer('stock')->default(0);
            $table->boolean('is_stock')->comment('1:In Stock,0:Out Stock')->default(0);
            $table->boolean('status')->comment('1:Published,2:Unpublished,3:Draft')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
};
