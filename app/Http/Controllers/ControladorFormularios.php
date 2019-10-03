<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestFormI;
use Illuminate\Support\Facades\DB;
use App\modeFormII;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;    

class ControladorFormularios extends Controller
{
    public function ViewFormI(){
        return view('Formularios.FormularioI');
    }

    public function ViewFormII(){
        return view('Formularios.FormularioII');
    }

    public function ViewFormIII(){
        return view('Formularios.FormularioIII');
    }
    public function ViewResumen(){
        return view('Formularios.Resumen');
    }

    public function insertFormI(RequestFormI $request){
        
        $formII=new modeFormII();
        $formII->bioclimatico=$request->input('evaluacionBioclimatico');
        $formII->geologia=$request->input('evaluacionGeologia');
        $formII->ecosistema=$request->input('evaluacionEcosistema');
        $formII->medioConstruido=$request->input('evaluacionMedioConstruido');
        $formII->biointeraccion=$request->input('evaluacionBiointeraccion');
        $formII->institucionSocial=$request->input('evaluacionInstitucional');
        $formII->promedio=$request->input('resumenPromedio');
        $formII->calificacion=$request->input('resumenCalificacion');
        $formII->descripcion=$request->input('resumenDescripcion');
        $formII->resultados="resultados finales formulario II";
        $user = Auth::user();
        $fomrII->users_id= Auth::user()->id;
        $formII->save();
        dd($formII->all());
        

    }
}
