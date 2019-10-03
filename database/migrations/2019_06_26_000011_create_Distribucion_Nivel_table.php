<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistribucionNivelTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Distribucion_Nivel';

    /**
     * Run the migrations.
     * @table Distribucion_Nivel
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idDistribucion_Nivel')->unsigned();
            $table->string('ambiente', 191);
            $table->string('nivel_Ubicacion', 191);
            $table->integer('n_Usuarios');
            $table->integer('metros2');
            $table->integer('Formulario1_idFormulario')->unsigned();

            $table->index(["Formulario1_idFormulario"], 'fk_Distribucion_Nivel_Formulario11_idx');

            $table->unique(["idDistribucion_Nivel"], 'idDistribucion_Nivel_UNIQUE');


            $table->foreign('Formulario1_idFormulario', 'fk_Distribucion_Nivel_Formulario11_idx')
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
