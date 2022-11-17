<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->text("name");
            $table->text("description");
            $table->tinyInteger("tier");
            $table->tinyInteger("emplacements");
            $table->string("element");
            $table->boolean("two_hand");
            $table->json("stats");
            $table->json("equipable_by");
            $table->string("icon",200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipements');
    }
}
