<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversidadTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Universidad';

    /**
     * Run the migrations.
     * @table Universidad
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idUniversidad')->unsigned();
            $table->string('nombreUniversidad', 191);
            $table->integer('Director_cedulaDirector')->unsigned();

            $table->index(["Director_cedulaDirector"], 'fk_Universidad_Director1_idx');

            $table->unique(["idUniversidad"], 'idUniversidad_UNIQUE');


            $table->foreign('Director_cedulaDirector', 'fk_Universidad_Director1_idx')
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
       Schema::dropIfExists($this->tableName);
     }
}
