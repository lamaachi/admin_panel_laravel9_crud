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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cate_id');
            $table->string('name');
            $table->string('slug');
            $table->mediumText('small_descreption');
            $table->string('descreption');
            $table->float('original_price');
            $table->float('selling_price');
            $table->string('image');
            $table->integer('qte');
            $table->integer('tax');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
            $table->mediumText('meta_keys');
            $table->mediumText('meta_desc');
            $table->mediumText('meta_title');


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
        Schema::dropIfExists('products');
    }
};
