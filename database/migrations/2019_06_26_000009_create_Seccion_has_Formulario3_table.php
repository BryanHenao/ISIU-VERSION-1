<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionHasFormulario3Table extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Seccion_has_Formulario3';

    /**
     * Run the migrations.
     * @table Seccion_has_Formulario3
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('Seccion_idSeccion')->unsigned();
            $table->integer('Formulario3_idFormulario3')->unsigned();
            $table->integer('Formulario3_users_id')->unsigned();
            $table->integer('Formulario3_users_Director_cedulaDirector')->unsigned();

            $table->index(["Seccion_idSeccion"], 'fk_Seccion_has_Formulario3_Seccion1_idx');

            $table->index(["Formulario3_idFormulario3", "Formulario3_users_id", "Formulario3_users_Director_cedulaDirector"], 'fk_Seccion_has_Formulario3_Formulario31_idx');


            $table->foreign('Seccion_idSeccion', 'fk_Seccion_has_Formulario3_Seccion1_idx')
                ->references('idSeccion')->on('Seccion')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Formulario3_idFormulario3', 'fk_Seccion_has_Formulario3_Formulario31_idx')
                ->references('idFormulario3')->on('Formulario3')
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
