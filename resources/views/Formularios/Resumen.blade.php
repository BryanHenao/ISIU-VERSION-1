@extends('Layouts.Base')
    @section('content')
        
        <br><br><br><br><br>

 <!--FORMULARIO 4-->
                             <div class="tab-pane" id="description">

                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center; background-color:#C0D8E7"><h5><b>RESULTADOS</b></h3></th>
                                            </tr>
                                        </thead>
                                    </table>
        
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="width: 460px">RESUMEN ITEMS </td>
                                                    <td style="text-align: center; background-color: #B2BEC6  ; color: black">N/A</td>
                                                    <td style="text-align: center; background-color: #B2BEC6  ; color: black">BAJOS</td>
                                                    <td style="text-align: center; background-color: #B2BEC6  ; color: black">MEDIOS</td>
                                                    <td style="text-align: center; background-color: #B2BEC6  ; color: black">ALTOS</td>
                                                    <td style="text-align: center; background-color: #B2BEC6  ; color: black">TOTAL</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">FRECUENCIA</td>
                                                    <td><input type="text" id="ambiente1" name="ambiente1" style="width: 100%" readonly></td>
                                                    <td><input type="text" id="nivelUbicacion1" name="nivelUbicacion1" style="width: 100%" readonly></td>
                                                    <td><input type="text" id="numUsuarios1" name="numUsuarios1" style="width: 100%" readonly ></td>
                                                    <td><input type="text" id="m21" name="m21" style="width: 100%" readonly></td>
                                                    <td><input type="text" id="m21" name="m21" style="width: 100%" readonly></td>
                                                </tr>                                        
                                            </tr>
                                        </tbody>
                                    </table>
        
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <tr>
                                                    <td colspan="5">ELEMENTO</td>
                                                    <td style="text-align: center; background-color: #B2BEC6  ; color: black">INDICE POR ELEMENTO</td>
                                                    <td style="text-align: center; background-color: #B2BEC6  ; color: black">INDICE PONDERADO</td>
                                                    <td style="text-align: center; background-color: #B2BEC6  ; color: black">NIVEL SEGURIDAD</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td colspan="5">SEGURIDAD ESTRUCTURAL (50%)</td>
                                                    <td><input type="text" id="indiceelemento" name="indiceelemento" style="width: 100%" readonly></td>
                                                    <td><input type="text" id="indiceponderado" name="indiceponderado" style="width: 100%" readonly></td>
                                                    <td><input type="text" id="indiceseguridad" name="indiceseguridad" style="width: 100%" readonly ></td>
                                                </tr>
        
                                                <tr>
                                                    <td colspan="5">SEGURIDAD NO ESTRUCTURAL (30%)</td>
                                                    <td><input type="text" id="indiceelemento" name="indiceelemento" style="width: 100%" readonly></td>
                                                    <td><input type="text" id="indiceponderado" name="indiceponderado" style="width: 100%" readonly></td>
                                                    <td><input type="text" id="indiceseguridad" name="indiceseguridad" style="width: 100%" readonly ></td>
                                                </tr>
                                                        
                                                <tr>
                                                    <td colspan="5">SEGURIDAD FUNCIONAL (20%)</td>
                                                    <td><input type="text" id="indiceelemento" name="indiceelemento" style="width: 100%" readonly></td>
                                                    <td><input type="text" id="indiceponderado" name="indiceponderado" style="width: 100%" readonly></td>
                                                    <td><input type="text" id="indiceseguridad" name="indiceseguridad" style="width: 100%" readonly ></td>
                                                </tr>
        
        
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <tbody>
                                            <tr>
                                                <tr>
                                                    <td colspan="4" >RANGO DE SEGURIDAD DE LA <br>INSTALACIÓN UNIVERSITARIA</td>
                                                    <td><input type="text" id="nivelseg" name="nivelseg" style="width: 100%" readonly></td>
                                                    <td>CLASIFICACIÓN</td>
                                                    <td><input type="text"  id="ambiente1" name="ambiente1" style="width: 100%" readonly></td>
                                                </tr>    
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
        
                                </div>
        

    @endsection