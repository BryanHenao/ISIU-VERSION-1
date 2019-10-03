<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdificioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Edificio';

    /**
     * Run the migrations.
     * @table Edificio
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idEdificio')->unsigned();
            $table->string('responsable', 191);
            $table->string('facultadDependencia', 191);
            $table->integer('Formulario1_idFormulario')->unsigned();
            $table->integer('Formulario1_users_id')->unsigned();
            $table->integer('Formulario1_users_Director_cedulaDirector')->unsigned();

            $table->index(["Formulario1_idFormulario", "Formulario1_users_id", "Formulario1_users_Director_cedulaDirector"], 'fk_Edificio_Formulario11_idx');

            $table->unique(["idEdificio"], 'idEdificio_UNIQUE');


            $table->foreign('Formulario1_idFormulario', 'fk_Edificio_Formulario11_idx')
                ->references('idFormulario')->on('Formulario1')
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
