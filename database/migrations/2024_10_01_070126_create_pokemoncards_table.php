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
        Schema::create('pokemoncards', function (Blueprint $table) {
            $table->id();
            $table->float('price');
            $table->string('desc');
            $table->string('label');
            $table->date('production_date');
            $table->string('image_path')->default('avatar.png');
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
        Schema::dropIfExists('pokemoncards');
    }
};
