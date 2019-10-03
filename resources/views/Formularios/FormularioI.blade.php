@extends('Layouts.Base')
@section('content')

<br><br><br><br>

    <div class="container">
        <!--F1-1. IDENTIFICACIÓN DE LA EDIFICACIÓN-->
        <table id="example" class="table table-striped table-bordered ancho" >
            <thead>
                <tr>
                    <th class="titulos"><h5><b>F1-1. IDENTIFICACIÓN DE LA EDIFICACIÓN</b></h5></th>
                </tr>
            </thead>
        </table>
        <table id="f1_1" name="f1_1" class="table table-striped table-bordered ancho">
            <tbody>
                <tr>
                    <tr>
                        <td  rowspan="2"><br>NOMBRE DEL EDIFICIO<input class="ancho" type="text" id="nombreEdificio" name="nombreEdificio" ></td>
                        <td colspan="2">DIRECCIÓN<input id="direccion" class="ancho" name="direccion" type="text" ></td>
                    </tr>
                    <tr>
                        <td colspan="2">PAIS <input class="ancho" id="pais" name="pais" type="text" ></td>
                    </tr>
                    <tr>
                        <td>UNIVERSIDAD <input class="ancho" type="text" id="universidad" name="universidad" ></td>
                        <th colspan="2" class="centrar"><br>GEOREFERENCIA</th>

                    </tr>
                    <tr>
                        <td >AREA <input class="ancho" type="text" id="area" name="area"></td>
                        <td >LATITUD <input class="ancho" type="text" id="latitud" name="latitud"></td>
                        <td >LONGITUD <input class="ancho" type="text" id="longitud" name="longitud" ></td>
                    </tr>
                    <tr>
                        <td rowspan="3"><br><br><br>NOMBRE DE QUIEN BRINDA LA INFORMACIÓN <input class="ancho" type="text" id="nombBrindaInfo"></td>
                        <td colspan="2">CARGO <input class="ancho" type="text" id="cargo" name="cargo" ></td>
                    </tr>
                    <tr>
                        <td colspan="2">CORREO <input class="ancho" type="text" id="correo" name="correo"></td>
                    </tr>
                    <tr>
                        <td colspan="2">TELEFONO <input class="ancho" type="text" id="telefono" name="telefono"></td>
                    </tr>
                </tr>
            </tbody>
        </table>

        <br>

        <!--F1-2. FACULTADES y/o DEPENDENCIAS QUE FUNCIONAN EN EL EDIFICIO-->
        <table id="example" class="table table-striped table-bordered ancho" >
            <thead>
                <tr>
                    <th class="titulos"><h5><b>F1-2. FACULTADES y/o DEPENDENCIAS QUE FUNCIONAN EN EL EDIFICIO</b></h3></th>
                </tr>
            </thead>
        </table>
        <table id="example" class="table table-striped table-bordered ancho" >
            <tbody>
                <tr>
                    <tr>
                        <td rowspan="3" class="centrar"><br><br>FACULTAD</td>
                        <td ><input class="ancho" type="text" id="facultad1" name="facultad1" ></td>
                        <td  rowspan="3" class="centrar"><br><br>JORNADA</td>
                        <td ><input class="ancho" type="text" id="jornada1" name="jornada1" ></td>
                    </tr>
                    <tr>
                        <td ><input class="ancho" type="text" id="facultad2" name="facultad2" ></td>
                        <td ><input class="ancho" type="text" id="jornada2" name="jornada2" ></td>
                    </tr>   

                    <tr>
                        <td ><input class="ancho" type="text" id="jornada3" name="jornada3"></td>  
                    </tr>
                    <tr>
                            <td rowspan="3" class="centrar"><br><br>DEPENDENCIAS<br>(Oficinas Administrativas)</td>
                            <td ><input class="ancho" type="text" id="dependencia1" name="dependencia1" ></td>
                            <td  rowspan="3" class="centrar"><br><br>JORNADA</td>
                            <td ><input class="ancho" type="text" id="Djornada1" name="Djornada1" ></td>
                        </tr>
                        <tr>
                            <td ><input class="ancho" type="text" id="Dfacultad2" name="Dfacultad2" ></td>
                            <td ><input class="ancho" type="text" id="Djornada2" name="Djornada2" ></td>
                        </tr>   

                        <tr>
                            <td ><input class="ancho" type="text" id="Djornada3" name="Djornada3" ></td>  
                        </tr>
                </tr>
            </tbody>
        </table>

        <br>

        <!--F1-3. DATOS GENERALES DEL EDIFICIO-->
        <table id="example" class="table table-striped table-bordered" class="ancho">
            <thead>
                <tr>
                    <th class="titulos"><h5><b>F1-3. DATOS GENERALES DEL EDIFICIO</b></h3></th>
                </tr>
            </thead>
        </table>
        <table id="example" class="table table-striped table-bordered" class="ancho">
            <tbody>
                <tr>
                    <tr>
                        <td colspan="2">PROPIETARIO DEL PREDIO<input class="ancho" type="text" id="propietarioPredio" name="propietarioPredio" ></td>
                        <td colspan="2">NUMERO DE PISOS<input class="ancho" id="numPisos" name="numPisos" type="text" ></td>
                    </tr>
                </tr>
                <tr>
                    <td colspan="4" class="centrar">USO DEL EDIFICIO POR NIVEL</td>
                </tr>
                <tr>
                    <td colspan="4" class="centrar"><input class="ancho" type="text" id="usoEdificio" name="usoEdificio" style="height: 100px;"></td>
                </tr>
            </tbody>
        </table>

        <br>

        <!--F1-4. MOBILIARIO EXISTENTE EN EL EDIFICIO-->
        <table id="example" class="table table-striped table-bordered ancho" >
            <thead>
                <tr>
                    <th class="titulos"><h5><b>F1-4. MOBILIARIO EXISTENTE EN EL EDIFICIO</b></h3></th>
                </tr>
            </thead>
        </table>
        <table id="example" class="table table-striped table-bordered ancho" >
            <tbody>
                <tr>
                    <tr>
                        <td class="mobiliarioExistente" colspan="10"><h7><b>ESTADO</b></h7></td>
                        <td class="mobiliarioExistente"  >PUPITRES</td>
                        <td class="mobiliarioExistente" >MESAS<br>INDIVIDULAES</td>
                        <td class="mobiliarioExistente" >MESAS<br>BI-<br>PERSONALES</td>
                        <td class="mobiliarioExistente" >SILLAS<br>PARA ALUMNO</td>
                        <td class="mobiliarioExistente" >CATEDRA Y SILLAS<br>PARA MAESTRO</td>
                        <td class="mobiliarioExistente" >TABLEROS</td>
                        <td class="mobiliarioExistente" >LIBRERAS</td>
                        <td class="mobiliarioExistente" >ARCHIVOS</td>
                        <td class="mobiliarioExistente" >ESTANTERIAS</td>
                    </tr>
                    <tr>
                        <td colspan="10"><h7><b>BUEN ESTADO</b></h7></td>
                        <td><input type="text" id="pupitres1" name="pupitres1" class="ancho80"></td>
                        <td><input type="text" id="mesasIndividuales1" name="mesasIndividuales1" class="ancho80"></td>
                        <td><input type="text" id="mesasBipersonales1" name="mesasBipersonales1" class="ancho80"></td>
                        <td><input type="text" id="sillasAlumno1" name="sillasAlumno1" class="ancho80"></td>
                        <td><input type="text" id="catedra1" name="catedra1" class="ancho80"></td>
                        <td><input type="text" id="tableros1" name="tableros1" class="ancho80"></td>
                        <td><input type="text" id="libreras1" name="libreras1" class="ancho80"></td>
                        <td><input type="text" id="archivos1" name="archivos1" class="ancho80"></td>
                        <td><input type="text" id="estanterias1" name="estanterias1" class="ancho80"></td>
                    </tr>
                    <tr>
                        <td colspan="10" class="ancho80"><h7><b>REGULAR ESTADO</b></h7></td>
                        <td><input type="text" id="pupitres2" name="pupitres2" class="ancho80"></td>
                        <td><input type="text" id="mesasIndividuales2" name="mesasIndividuales2" class="ancho80"></td>
                        <td><input type="text" id="mesasBipersonales2" name="mesasBipersonales2" class="ancho80"></td>
                        <td><input type="text" id="sillasAlumno2" name="sillasAlumno2" class="ancho80"></td>
                        <td><input type="text" id="catedra2" name="catedra2" class="ancho80"></td>
                        <td><input type="text" id="tableros2" name="tableros2" class="ancho80"></td>
                        <td><input type="text" id="libreras2" name="libreras2" class="ancho80"></td>
                        <td><input type="text" id="archivos2" name="archivos2" class="ancho80"></td>
                        <td><input type="text" id="estanterias2" name="estanterias2" class="ancho80"></td>
                    </tr>
                    <tr>
                        <td colspan="10"><h7><b>INSERVIBLE</b></h7></td>
                        <td><input type="text" id="pupitres3" name="pupitres3" class="ancho80"></td>
                        <td><input type="text" id="mesasIndividuales3" name="mesasIndividuales3" class="ancho80"></td>
                        <td><input type="text" id="mesasBipersonales3" name="mesasBipersonales3" class="ancho80"></td>
                        <td><input type="text" id="sillasAlumno3" name="sillasAlumno3" class="ancho80"></td>
                        <td><input type="text" id="catedra3" name="catedra3" class="ancho80"></td>
                        <td><input type="text" id="tableros3" name="tableros3" class="ancho80"></td>
                        <td><input type="text" id="libreras3" name="libreras3" class="ancho80"></td>
                        <td><input type="text" id="archivos3" name="archivos3" class="ancho80"></td>
                        <td><input type="text" id="estanterias3" name="estanterias3" class="ancho80"></td>
                    </tr>
                </tr>
            </tbody>                            
        </table>
        <table>
            <tbody>
                <tr>
                    <td><h7><b>OBSERVACIONES</b><input type="text" id="observaciones" name="observaciones" style="width: 322%; height: 70px;"></h7></td>
                </tr>
            </tbody>
        </table>

        <br><br><br>  

        <!--F1-5. DISTRIBUCIÓN FÍSICA POR NIVEL-->
        <table id="example" class="table table-striped table-bordered ancho" >
            <thead>
                <tr>
                    <th class="titulos"><h5><b>F1-5. DISTRIBUCIÓN FÍSICA POR NIVEL</b></h3></th>
                </tr>
            </thead>
        </table>
        <table id="example" class="table table-striped table-bordered ancho">
            <tbody>
                <tr>
                    <tr>
                        <td colspan="5">No</td>
                        <td class="distribucionFisica">AMBIENTE</td>
                        <td class="distribucionFisica">NIVEL (UBICACIÓN)</td>
                        <td class="distribucionFisica">N° DE USUARIOS</td>
                        <td class="distribucionFisica">M2</td>
                    </tr>
                    <tr>
                        <td colspan="5">1</td>
                        <td><input type="text" id="ambiente1" name="ambiente1" class="ancho"></td>
                        <td><input type="text" id="nivelUbicacion1" name="nivelUbicacion1" class="ancho"></td>
                        <td><input type="text" id="numUsuarios1" name="numUsuarios1" class="ancho"></td>
                        <td><input type="text" id="m21" name="m21" class="ancho"></td>
                    </tr>
                    <tr>
                        <td colspan="5">2</td>
                        <td><input type="text" id="ambiente2" name="ambiente2" class="ancho"></td>
                        <td><input type="text" id="nivelUbicacion2" name="nivelUbicacion2" class="ancho"></td>
                        <td><input type="text" id="numUsuario2" name="nivelUsuario2" class="ancho"></td>
                        <td><input type="text" id="m22" name="m22" class="ancho"></td>
                    </tr>
                    <tr>
                        <td colspan="5">3</td>
                        <td><input type="text" id="ambiente3" name="ambiente3" class="ancho"></td>
                        <td><input type="text" id="nivelUbicacion3" name="nivelUbicacion3" class="ancho"></td>
                        <td><input type="text" id="numUsuarios3" name="numUsuario3" class="ancho"></td>
                        <td><input type="text" id="m23" name="m23   " class="ancho"></td>
                    </tr>
                </tr>
            </tbody>
        </table>

        <br>

        <!--F1-6. DATOS ADICIONALES-->
        <table id="example" class="table table-striped table-bordered ancho" >
            <thead>
                <tr>
                    <th class="titulos"><h5><b>F1-6. DATOS ADICIONALES</b></h3></th>
                </tr>
            </thead>
        </table>
        <table id="example" class="table table-striped table-bordered" class="ancho">
            <tbody>
                <tr>
                    <tr>
                        <td colspan="2"><input type="text" id="datosAdicionales" name="datosAdicionales" style="width: 100%; height: 70px;"></td>
                    </tr>
                </tr>
            </tbody>
        </table>

        <br>

        <!--F1-3. DATOS GENERALES DEL EDIFICIO-->
        <table id="example" class="table table-striped table-bordered ancho">
            <thead>
                <tr>
                    <th class="titulos"><h5><b>F1-6.1. DATOS DEL (LOS) RESPONSABLES DEL EDIFICIO</b></h3></th>
                </tr>
            </thead>
        </table>
        <table id="example" class="table table-striped table-bordered" class="ancho">
            <tbody>
                <tr>
                    <tr>
                        <td class="centrar">NOMBRE DEL DECANO Y/O RESPONSABLE<br></vr>DEL EDIFICIO</td>
                        <td class="centrar">FACULTAD Y/O DEPENDENCIA</td>
                        <td class="centrar">FIRMA</td>
                        <td class="centrar">SELLO</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="decanoResponsable" name="decanoResponsable" class="ancho"></td>
                        <td><input type="text" id="facultadDependencia" name="facultadDependencia" class="ancho"></td>
                        <td><input type="text" id="firmaResponsable" name="firmaResponsable" class="ancho"></td>
                        <td><input type="text" id="sello" name="sello" class="ancho"></td>
                    </tr>
                </tr>
            </tbody>
        </table>

        <br>

        <!--F1-6.1. DATOS DEL (LOS) RESPONSABLES DE LA EVALUACIÓN-->
        <table id="example" class="table table-striped table-bordered ancho" >
            <thead>
                <tr>
                    <th class="titulos"><h5><b>F1-6.1. DATOS DEL (LOS) RESPONSABLES DE LA EVALUACIÓN</b></h3></th>
                </tr>
            </thead>
        </table>
        <table id="example" class="table table-striped table-bordered ancho" >
            <tbody>
                <tr>
                    <tr>
                        <td class="centrar"><b>NOMBRE DEL EVALUADOR</b></td>
                        <td colspan="2"><input type="text" id="nombreEvaluador" name="nombreEvaluador" class="ancho"></td>
                    </tr>
                    <tr>
                        <td class="centrar"><b>INSTITUCIÓN QUE REPRESENTA</b></td>
                        <td colspan="2"><input type="text" id="institucionRepresenta" name="institucionRepresenta" class="ancho"></td>
                    </tr>
                    <tr>
                        <td class="centrar"><b>TELEFONO</b></td>
                        <td colspan="2"><input type="text" id="telefonoInstitucion" name="telefonoInstitucion" class="ancho"></td>
                    </tr>
                    <tr>
                        <td class="centrar"><b>FECHA</b></td>    
                        <td colspan="2"><input type="date" id="fecha" name="fecha" class="centrar ancho"></td>                                        
                    </tr>
                    <tr>
                        <td class="centrar"><b><br>FIRMAR</b></td>
                        <td colspan="2"><input type="text" id="firmaEvaluador" name="firmaEvaluador" class="ancho" style=" height: 50px;"></td>
                    </tr>
                </tr>
            </tbody>
        </table>
        
        <br><br>

        <table id="example" class="table table-striped table-bordered ancho" >
            <thead>
                <tr>
                    <td><input type="text" id="anexo" name="anexo" class="ancho" style="height: 150px;"></td>
                </tr>
            </thead>
        </table>
    </div>
@endsection