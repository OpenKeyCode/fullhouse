<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('title');
            $table->string('slug');
            $table->longText('description')->nullable();
            $table->longText('short_description')->nullable();
            $table->unsignedDecimal('price', 12,3);
            $table->unsignedDecimal('discount',12,3);
            $table->boolean('stock');
            $table->string('image');
//            $table->boolean('live_image');
            $table->boolean('status')->default(false);
            $table->longText('parameters')->nullable();

            $table->foreignId('room_id')->nullable()->constrained('rooms');
            $table->foreignId('product_category_id')->constrained('product_categories');
            $table->foreignId('delivery_id')->nullable()->constrained('deliveries');

            $table->unsignedInteger('identifier')->default(rand(99999999, 999999999));

            $table->timestamps();
            $table->softDeletes();
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
}
