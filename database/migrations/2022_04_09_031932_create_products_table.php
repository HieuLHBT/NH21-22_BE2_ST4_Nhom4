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
            $table->id('product_id');
            $table->integer('manu_id');
<<<<<<< HEAD
            $table->string('name');          
            $table->integer('price');
            $table->string('image');
            $table->string('description', 500);
=======
            $table->string('product_name');
            $table->integer('price');
            $table->string('image');
            $table->string('description', 1000);
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
            $table->integer('quantity');
            $table->tinyinteger('feature');
            $table->timestamp('create_at');
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
