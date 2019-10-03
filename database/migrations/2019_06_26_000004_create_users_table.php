<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('nombreEvaluador');
            $table->string('tipoEvaluador');
            $table->integer('telefonoEvaluador');
            $table->integer('Director_cedulaDirector')->unsigned();

            $table->index(["Director_cedulaDirector"], 'fk_Evaluador_Dirt_id');

            $table->unique(["telefonoEvaluador"], 'telefonoEvaluador_UNIQUE');

            $table->unique(["id"], 'id_UNIQUE');

            $table->foreign('Director_cedulaDirector', 'fk_Evaluador_Direct_id')
                ->references('cedulaDirector')->on('Director')
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
        Schema::dropIfExists('users');
    }
}
