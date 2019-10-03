<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobiliarioExistenteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Mobiliario_Existente';

    /**
     * Run the migrations.
     * @table Mobiliario_Existente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_Mob_Exit')->unsigned();
            $table->string('estado', 191);
            $table->string('tipo', 191);
            $table->integer('numero');

            $table->unique(["id_Mob_Exit"], 'id_Mob_Exit_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
