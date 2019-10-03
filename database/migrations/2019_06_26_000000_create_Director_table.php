<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Director';

    /**
     * Run the migrations.
     * @table Director
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cedulaDirector')->unsigned();
            $table->string('nombreDirector', 191);
            $table->string('correoDirector', 191);
            $table->string('contrasena', 191);
            $table->integer('telefono');

            $table->unique(["correoDirector"], 'correoDirector_UNIQUE');

            $table->unique(["telefono"], 'telefono_UNIQUE');

            $table->unique(["cedulaDirector"], 'cedulaDirector_UNIQUE');
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
