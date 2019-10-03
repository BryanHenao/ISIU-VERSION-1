<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobiliarioFormulario1Table extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'mobiliario_formulario1';

    /**
     * Run the migrations.
     * @table mobiliario_formulario1
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Formulario1_idFormulario')->unsigned();
            $table->integer('Mobiliario_Existente_id')->unsigned();

            $table->index(["Mobiliario_Existente_id"], 'fk_Formulario1_has_Mobiliario_Existente_Mobiliario_Existent_idx');

            $table->index(["Formulario1_idFormulario"], 'fk_Formulario1_has_Mobiliario_Existente_Formulario1_idx');


            $table->foreign('Formulario1_idFormulario', 'fk_Formulario1_has_Mobiliario_Existente_Formulario1_idx')
                ->references('idFormulario')->on('Formulario1')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Mobiliario_Existente_id', 'fk_Formulario1_has_Mobiliario_Existente_Mobiliario_Existent_idx')
                ->references('id_Mob_Exit')->on('Mobiliario_Existente')
                ->onDelete('no action')
                ->onUpdate('no action');
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
