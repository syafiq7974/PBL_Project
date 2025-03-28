<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('products_admin', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('image')->nullable();
        $table->decimal('price', 10, 2);
        $table->integer('stock');
        $table->boolean('active')->default(true);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('products_admin');
}
};