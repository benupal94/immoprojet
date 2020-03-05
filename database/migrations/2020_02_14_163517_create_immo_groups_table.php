<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmoGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immo_groups', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->decimal('prix');
            $table->string('images');
            $table->string('lotissement');
            $table->string('description');
            $table->string('avance');
            $table->BigInteger('id_type')->unsigned()->index();
            $table->BigInteger('id_proprietaire')->unsigned()->index();
            $table->BigInteger('id_pays')->unsigned()->index();
            $table->BigInteger('id_ville')->unsigned()->index();
            $table->BigInteger('id_quartier')->unsigned()->index();
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
        Schema::dropIfExists('immo_groups');
    }
}
