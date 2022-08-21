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
            $table->text("description")->nullable();
            $table->float("height")->default(0);
            $table->integer("age")->default(0);
            $table->float("starting_price")->default(0);
            $table->text("special_point")->nullable();
            $table->integer("pot_id")->nullable();
            $table->integer("species_id")->nullable();
            $table->integer("bending_style_id")->nullable();
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
