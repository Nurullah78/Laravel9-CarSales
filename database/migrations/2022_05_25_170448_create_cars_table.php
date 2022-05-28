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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->float('price')->nullable();
            $table->string('region')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('detail')->nullable();
            $table->integer('notice_no')->nullable();
            $table->date('notice_date')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('series')->nullable();
            $table->string('model')->nullable();
            $table->integer('product_year')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('gear')->nullable();
            $table->integer('kilometer')->nullable();
            $table->string('body_type')->nullable();
            $table->integer('engine_power')->nullable();
            $table->integer('engine_capacity')->nullable();
            $table->string('traction')->nullable();
            $table->integer('door_count')->nullable();
            $table->string('color')->nullable();
            $table->string('guarantee')->nullable();
            $table->string('plate_from')->nullable();
            $table->string('seller')->nullable();
            $table->string('swap')->nullable();
            $table->string('use_case')->nullable();
            $table->string('image')->nullable();
            $table->string('status', 8)->default('Disable');
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
        Schema::dropIfExists('cars');
    }
};
