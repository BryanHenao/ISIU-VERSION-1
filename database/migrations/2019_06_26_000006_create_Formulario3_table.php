<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulario3Table extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Formulario3';

    /**
     * Run the migrations.
     * @table Formulario3
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idFormulario3')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('users_Director_cedulaDirector')->unsigned();

            $table->index(["users_id", "users_Director_cedulaDirector"], 'fk_Formulario3_users_id');

            $table->unique(["idFormulario3"], 'idFormulario3_UNIQUE');


            $table->foreign('users_id', 'fk_Formulario3_users_id')
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
