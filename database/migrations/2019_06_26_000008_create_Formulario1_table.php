<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulario1Table extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Formulario1';

    /**
     * Run the migrations.
     * @table Formulario1
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idFormulario')->unsigned();
            $table->string('area');
            $table->string('facultad');
            $table->string('jornada');
            $table->string('propiedad_predio');
            $table->integer('num_predios');
            $table->string('nombreUniversidad');

            $table->integer('users_id')->unsigned();
            $table->integer('users_Director_cedulaDirector')->unsigned();

            $table->index(["users_id", "users_Director_cedulaDirector"], 'fk_Formulario1_users_idx');

            $table->unique(["idFormulario"], 'idFormulario_UNIQUE');


            $table->foreign('users_id', 'fk_Formulario1_users_idx')
                ->references('id')->on('users')
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
