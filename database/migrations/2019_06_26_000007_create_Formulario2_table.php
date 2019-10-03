<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulario2Table extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Formulario2';

    /**
     * Run the migrations.
     * @table Formulario2
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idFormulario2')->unsigned();
            $table->string('resultados');
            $table->integer('users_id')->unsigned();
            $table->integer('users_Director_cedulaDirector')->unsigned();
            $table->integer('bioclimatico');
            $table->integer('geologia');
            $table->integer('ecosistema');
            $table->integer('medioConstruido');
            $table->integer('biointeraccion');
            $table->integer('institucionSocial');
            $table->integer('promedio');
            $table->string('calificacion');
            $table->string('descripcion');



            $table->index(["users_id", "users_Director_cedulaDirector"], 'fk_Formulario2_users1_idx');

            $table->unique(["idFormulario2"], 'idFormulario2_UNIQUE');


            $table->foreign('users_id', 'fk_Formulario2_users1_idx')
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
