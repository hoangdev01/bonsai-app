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
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->text("name");
            $table->text("description");
            $table->float("height");
            $table->integer("age");
            $table->float("starting_price");
            $table->text("special_point");
            $table->integer("pot_id");
            $table->integer("species_id");
            $table->integer("bending_style_id");
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
        Schema::dropIfExists('trees');
    }
};
