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
        Schema::create('pots', function (Blueprint $table) {
            $table->id();
            $table->string("code")->unique();
            $table->text("name");
            $table->text("description")->nullable();
            $table->text("status")->nullable();
            $table->float("price")->default(0);
            $table->string("color")->nullable();
            $table->float("height")->nullable();
            $table->float("width")->nullable();
            $table->integer("amount")->default(0);
            $table->integer("type_id")->nullable();
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
        Schema::dropIfExists('pots');
    }
};
