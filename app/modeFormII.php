<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeFormII extends Model
{
    protected $table = 'formulario2';
    protected $primaryKey = 'idFormulario2';
    public $timestamps = false;

    protected $fillable = ['idFormulario2', 'bioclimatico', 'geologia', 'ecosistema',
    'medioConstruido', 'biointeraccion', 'institucionSocial', 'promedio', 'calificacion', 'descripcion'];
}
