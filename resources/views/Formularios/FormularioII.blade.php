@extends('Layouts.Base')
    @section('content')

        <br><br><br><br>

        <!--FORMULARIO 2-->
        <div class="container">

            <!--F2-1. COMPONENTE BIOCLIMATICO-->
            <table id="example" class="table table-striped table-bordered ancho">
                <thead>
                    <tr>
                        <th class="estilo7"><h5><b>F2-1. COMPONENTE BIOCLIMATICO</b></h5></th>
                    </tr>
                </thead>
            </table>
            <table id="example" class="table table-striped table-bordered ancho">
                <tbody>
                    <tr>
                        <tr>
                            <td colspan="11" class="estilo3"><h7><b>E</b></h7></td>
                            <td class="estilo1">CONFORT HIGROTÉRMICO</td>
                            <td class="estilo1">VIENTO<br>HURACANES<br>TORMENTA</td>
                            <td class="estilo1">PRECIPITACIÓN</td>
                            <td class="estilo1">RUÍDOS</td>
                            <td class="estilo1">CALIDAD DEL AIRE</td>
                            <td rowspan="4"></td>
                            <td class="estilo2"><h7><b>P</b></h7></td>
                            <td class="estilo2"><b>F</b></td>
                            <td class="estilo2"><b>ExPxF</b></td>
                            <td class="estilo2"><b>PxF</b></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="centrar ancho200"><h7><b>1</b></h7></td>
                            <td><input type="text" id="cHidrogenico1" name="cHidrogenico1" class="ancho centrar" onchange="calcularF_Bioclimatico();calcularExPxF_Bioclimatico();calcularPxP_Bioclimatico();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()" ></td>
                            <td><input type="text" id="vht1" name="vht1" class="ancho centrar" onchange="calcularF_Bioclimatico();calcularExPxF_Bioclimatico();calcularPxP_Bioclimatico();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="precipitacion1" name="precipitacion1" class="ancho centrar" onchange="calcularF_Bioclimatico();calcularExPxF_Bioclimatico();calcularPxP_Bioclimatico();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="ruidos1" name="ruidos1" class="ancho centrar"onchange="calcularF_Bioclimatico();calcularExPxF_Bioclimatico();calcularPxP_Bioclimatico();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="calidadAire1" name="calidadAire1" class="ancho centrar" onchange="calcularF_Bioclimatico();calcularExPxF_Bioclimatico();calcularPxP_Bioclimatico();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td class="centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="fpBioclimatico3" name="fpBioclimatico3" class="ancho80 centrar"  readonly></td>
                            <td><input type="text" id="expxfBioclimatico3" name="expxfBioclimatico3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfBioclimatico3" name="pxfBioclimatico3" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="centrar ancho200"><h7><b>2</b></h7></td>
                            <td><input type="text" id="cHidrogenico2" name="cHidrogenico2" class="ancho centrar" onchange="calcularF_Bioclimatico2();calcularExPxF_Bioclimatico2();calcularPxP_Bioclimatico2();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="vht2" name="vht2" class="ancho centrar"  onchange="calcularF_Bioclimatico2();calcularExPxF_Bioclimatico2();calcularPxP_Bioclimatico2();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="precipitacion2" name="precipitacion2" class="ancho centrar"  onchange="calcularF_Bioclimatico2();calcularExPxF_Bioclimatico2();calcularPxP_Bioclimatico2();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="ruidos2" name="ruidos2" class="ancho centrar"  onchange="calcularF_Bioclimatico2();calcularExPxF_Bioclimatico2();calcularPxP_Bioclimatico2();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="calidadAire2" name="calidadAire2" class="ancho centrar"  onchange="calcularF_Bioclimatico2();calcularExPxF_Bioclimatico2();calcularPxP_Bioclimatico2();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td class="centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="fpBioclimatico2" name="fpBioclimatico2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfBioclimatico2" name="expxfBioclimatico2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfBioclimatico2" name="pxfBioclimatico2" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11"class="centrar ancho200"><h7><b>3</b></h7></td>
                            <td><input type="text" id="cHidrogenico3" name="cHidrogenico3" class="ancho centrar"  onchange="calcularF_Bioclimatico3();calcularExPxF_Bioclimatico3();calcularPxP_Bioclimatico3();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="vht3" name="vht3" class="ancho centrar"  onchange="calcularF_Bioclimatico3();calcularExPxF_Bioclimatico3();calcularPxP_Bioclimatico3();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="precipitacion3" name="precipitacion3" class="ancho centrar"  onchange="calcularF_Bioclimatico3();calcularExPxF_Bioclimatico3();calcularPxP_Bioclimatico3();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="ruidos3" name="ruidos3" class="ancho centrar"  onchange="calcularF_Bioclimatico3();calcularExPxF_Bioclimatico3();calcularPxP_Bioclimatico3();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td><input type="text" id="calidadAire3" name="calidadAire3" class="ancho centrar"  onchange="calcularF_Bioclimatico3();calcularExPxF_Bioclimatico3();calcularPxP_Bioclimatico3();sumatoria_Bioclimatico_expx();sumatoria_Bioclimatico_pxf();total();calculoFinal()"></td>
                            <td class="centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="fpBioclimatico1" name="fpBioclimatico1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfBioclimatico1" name="expxfBioclimatico1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfBioclimatico1" name="pxfBioclimatico1" class="ancho80 centrar" readonly></td>  
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo4"><b>Σ</b></td>
                            <td class="ancho2"><input type="text" id="sumatoriaBioclimaticoExPxF" name="sumatoriaBioclimaticoExPxF" class="ancho80 centrar" readonly></td>
                            <td class="ancho2"><input type="text" id="sumatoriaBioclimaticoPxF" name="sumatoriaBioclimaticoPxF" class="ancho80 centrar" readonly></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo6" ></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo4"><b>VALOR TOTAL</b></td>
                            <td colspan="2" class="ancho2"><input type="text" id="TotalBioclimatico" name="TotalBioclimatico" class="estilo8" readonly></td>
                        </tr>
                    </tr>
                </tbody>                            
            </table>

            <br><br><br>

            <!--F2-2. COMPONENTE GEOLOGÍA-->
            <table id="example" class="table table-striped table-bordered ancho">
                <thead>
                    <tr>
                        <th class="estilo7"><h5><b>F2-2. COMPONENTE GEOLOGÍA</b></h5></th>
                    </tr>
                </thead>
            </table>
            <table id="example" class="table table-striped table-bordered ancho">
                <tbody>
                    <tr>
                        <tr>
                            <td colspan="11" class="estilo3"><h7><b>E</b></h7></td>
                            <td class="estilo1">SISMICIDAD</td>
                            <td class="estilo1">EROSIÓN</td>
                            <td class="estilo1">DERRUMBES<br>DESLIZAMIENTOS</td>
                            <td class="estilo1">VULCANISMO</td>
                            <td class="estilo1">RANGO DE PENDIENTES</td>
                            <td class="estilo1">CALIDAD DEL SUELO</td>
                            <td class="estilo2"><h7><b>P</b></h7></td>
                            <td class="estilo2"><b>F</b></td>
                            <td class="estilo2"><b>ExPxF</b></td>
                            <td class="estilo2"><b>PxF</b></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="sismicidad1" name="sismicidad1" class="ancho centrar" onchange="calcularF_Geologia();calcularExPxF_Geologia();calcularPxP_Geologia();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"  ></td>
                            <td><input type="text" id="erosion1" name="erosion1" class="ancho centrar"  onchange="calcularF_Geologia();calcularExPxF_Geologia();calcularPxP_Geologia();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="derrumbes1" name="derrumbes1" class="ancho centrar" onchange="calcularF_Geologia();calcularExPxF_Geologia();calcularPxP_Geologia();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="vulcanismo1" name="vulcanismo1" class="ancho centrar" onchange="calcularF_Geologia();calcularExPxF_Geologia();calcularPxP_Geologia();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="pendientes1" name="pendientes1" class="ancho centrar" onchange="calcularF_Geologia();calcularExPxF_Geologia();calcularPxP_Geologia();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="calidadSuelo1" name="calidadSuelo1" class="ancho centrar" onchange="calcularF_Geologia();calcularExPxF_Geologia();calcularPxP_Geologia();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td class="centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="fpGeologia3" name="fpGeologia3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfGeologia3" name="expxfGeologia3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfGeologia3" name="pxfBGeologia3" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="sismicidad2" name="sismicidad2" class="ancho centrar" onchange="calcularF_Geologia2();calcularExPxF_Geologia2();calcularPxP_Geologia2();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="erosion2" name="erosion2" class="ancho centrar" onchange="calcularF_Geologia2();calcularExPxF_Geologia2();calcularPxP_Geologi2a();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="derrumbes2" name="derrumbes2" class="ancho centrar" onchange="calcularF_Geologia2();calcularExPxF_Geologia2();calcularPxP_Geologia2();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="vulcanismo2" name="vulcanismo2" class="ancho centrar" onchange="calcularF_Geologia2();calcularExPxF_Geologia2();calcularPxP_Geologia2();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="pendientes2" name="pendientes2" class="ancho centrar" onchange="calcularF_Geologia2();calcularExPxF_Geologia2();calcularPxP_Geologia2();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="calidadSuelo2" name="calidadSuelo2" class="ancho centrar" onchange="calcularF_Geologia2();calcularExPxF_Geologia2();calcularPxP_Geologia2();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td class="centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="fpGeologia2" name="fpGeologia2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfGeologia2" name="expxfGeologia2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfGeologia2" name="pxfGeologia2" class="ancho80 centrar" readonly></td>  
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="sismicidad3" name="sismicidad3" class="ancho centrar" onchange="calcularF_Geologia3();calcularExPxF_Geologia3();calcularPxP_Geologia3();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="erosion3" name="erosion3" class="ancho centrar" onchange="calcularF_Geologia3();calcularExPxF_Geologia3();calcularPxP_Geologia3();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="derrumbes3" name="derrumbes3" class="ancho centrar" onchange="calcularF_Geologia3();calcularExPxF_Geologia3();calcularPxP_Geologia3();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="vulcanismo3" name="vulcanismo3" class="ancho centrar" onchange="calcularF_Geologia3();calcularExPxF_Geologia3();calcularPxP_Geologia3();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="pendientes3" name="pendientes3" class="ancho centrar" onchange="calcularF_Geologia3();calcularExPxF_Geologia3();calcularPxP_Geologia3();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td><input type="text" id="calidadSuelo3" name="calidadSuelo3" class="ancho centrar" onchange="calcularF_Geologia3();calcularExPxF_Geologia3();calcularPxP_Geologia3();sumatoria_Geologia_expx();sumatoria_Geologia_pxf();totalGeologia();calculoFinal()"></td>
                            <td class="centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="fpGeologia1" name="fpGeologia1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfGeologia1" name="expxfGeologia1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfGeologia1" name="pxfGeologia1" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo4"><b>Σ</b></td>
                            <td class="ancho2"><input type="text" id="sumatoriaGeologiaExPxF" name="sumatoriaGeologiaExpxF" class="ancho80 centrar" readonly></td>
                            <td class="ancho2"><input type="text" id="sumatoriaGeologiaPxF" name="sumatoriaGeologiaPxF" class="ancho80 centrar" readonly></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo6" ></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo4"><b>VALOR TOTAL</b></td>
                            <td colspan="2" class="ancho2"><input type="text" id="totalGeologia" name="totalGeologia" class="estilo8" readonly></td>
                        </tr>

                    </tr>
                </tbody>                            
            </table>

            <br><br><br>

            <!--F2-3. COMPONENTE ECOSISTEMA-->
            <table id="example" class="table table-striped table-bordered ancho">
                <thead>
                    <tr>
                        <th class="estilo7"><h5><b>F2-3. COMPONENTE ECOSISTEMA</b></h5></th>
                    </tr>
                </thead>
            </table>
            <table id="example" class="table table-striped table-bordered ancho">
                <tbody>
                    <tr>
                        <tr>
                            <td colspan="11" class="estilo3"><h7><b>E</b></h7></td>
                            <td class="estilo1">SUELOS AGRÍCOLAS</td>
                            <td class="estilo1">HIDROLOGÍA SUPERFICIAL</td>
                            <td class="estilo1">HIDROLOGÍA SUBTERRANEA</td>
                            <td class="estilo1">LAGOS/RÍOS<br>MAR</td>
                            <td class="estilo1">ÁREAS FRÁGILES</td>
                            <td class="estilo1">SEDIMENTACIÓN</td>
                            <td class="estilo2"><h7><b>P</b></h7></td>
                            <td class="estilo2"><b>F</b></td>
                            <td class="estilo2"><b>ExPxF</b></td>
                            <td class="estilo2"><b>PxF</b></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="suelosAgricolas1" name="suelosAgricolas1" class="ancho2 centrar"  onchange="calcularF_Ecosistema();calcularExPxF_Ecosistema();calcularPxP_Ecosistema();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="hidrologiaSupercial1" name="hidrologiaSupercial1" class="ancho2 centrar" onchange="calcularF_Ecosistema();calcularExPxF_Ecosistema();calcularPxP_Ecosistema();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="hidrologiaSubterranea1" name="hidrologiaSubterranea1" class="ancho2 centrar" onchange="calcularF_Ecosistema();calcularExPxF_Ecosistema();calcularPxP_Ecosistema();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="lagos/rios/Mar1" name="lagos/rios/Mar1" class="ancho2 centrar" onchange="calcularF_Ecosistema();calcularExPxF_Ecosistema();calcularPxP_Ecosistema();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="areasFragiles1" name="areasFragiles1" class="ancho2 centrar" onchange="calcularF_Ecosistema();calcularExPxF_Ecosistema();calcularPxP_Ecosistema();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()" ></td>
                            <td><input type="text" id="sedimientos1" name="sedimientos1" class="ancho2 centrar" onchange="calcularF_Ecosistema();calcularExPxF_Ecosistema();calcularPxP_Ecosistema();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()" ></td>
                            <td class="centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="fpEcosistema3" name="fpEcosistema3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfEcosistema3" name="expxfEcosistema3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfEcosistema3" name="pxfEcosistema3" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="suelosAgricolas2" name="suelosAgricolas2" class="ancho2 centrar" onchange="calcularF_Ecosistema2();calcularExPxF_Ecosistema2();calcularPxP_Ecosistema2();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="hidrologiaSupercial2" name="hidrologiaSupercial2" class="ancho2 centrar" onchange="calcularF_Ecosistema2();calcularExPxF_Ecosistema2();calcularPxP_Ecosistema2();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="hidrologiaSubterranea2" name="hidrologiaSubterranea2" class="ancho2 centrar" onchange="calcularF_Ecosistema2();calcularExPxF_Ecosistema2();calcularPxP_Ecosistema2();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="lagos/rios/Mar2" name="lagos/rios/Mar2" class="ancho2 centrar" onchange="calcularF_Ecosistema2();calcularExPxF_Ecosistema2();calcularPxP_Ecosistema2();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="areasFragiles2" name="areasFragiles2" class="ancho2 centrar" onchange="calcularF_Ecosistema2();calcularExPxF_Ecosistema2();calcularPxP_Ecosistema2();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="sedimientos2" name="sedimientos2" class="ancho2 centrar" onchange="calcularF_Ecosistema2();calcularExPxF_Ecosistema2();calcularPxP_Ecosistema2();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td class="centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="fpEcosistema2" name="fpEcosistema2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfEcosistema2" name="expxfEcosistema2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfEcosistema2" name="pxfEcosistema2" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="suelosAgricolas3" name="suelosAgricolas3" class="ancho2 centrar" onchange="calcularF_Ecosistema3();calcularExPxF_Ecosistema3();calcularPxP_Ecosistema3();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="hidrologiaSupercial3" name="hidrologiaSupercial3" class="ancho2 centrar" onchange="calcularF_Ecosistema3();calcularExPxF_Ecosistema3();calcularPxP_Ecosistema3();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="hidrologiaSubterranea3" name="hidrologiaSubterranea3" class="ancho2 centrar" onchange="calcularF_Ecosistema3();calcularExPxF_Ecosistema3();calcularPxP_Ecosistema3();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="lagos/rios/Mar3" name="lagos/rios/Mar3" class="ancho2 centrar" onchange="calcularF_Ecosistema3();calcularExPxF_Ecosistema3();calcularPxP_Ecosistema3();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="areasFragiles3" name="areasFragiles3" class="ancho2 centrar" onchange="calcularF_Ecosistema3();calcularExPxF_Ecosistema3();calcularPxP_Ecosistema3();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()"></td>
                            <td><input type="text" id="sedimientos3" name="sedimientos3" class="ancho2 centrar" onchange="calcularF_Ecosistema3();calcularExPxF_Ecosistema3();calcularPxP_Ecosistema3();sumatoria_Ecosistema_expx();sumatoria_Ecosistema_pxf();totalEcosistema();calculoFinal()" ></td>
                            <td class="centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="fpEcosistema1" name="fpEcosistema1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfEcosistema1" name="expxfEcosistema1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfEcosistema1" name="pxfEcosistema1" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo4"><b>Σ</b></td>
                            <td class="ancho2"><input type="text" id="sumatoriaEcosistemaExPxF" name="sumatoriaEcosistemaExPxF" class="ancho80 centrar" readonly></td>
                            <td class="ancho2"><input type="text" id="sumatoriaEcosistemaPxF" name="sumatoriaEcosistemaPxF" class="ancho80 centrar" readonly></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo6" ></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo4"><b>VALOR TOTAL</b></td>
                            <td colspan="2" class="ancho2"><input type="text" id="totalEcosistema" name="totalEcosistema" class="estilo8" readonly></td>
                        </tr>
                    </tr>
                </tbody>                            
            </table>


            <br><br><br>


            <!--F2-4. COMPONENTE MEDIO CONSTRUÍDO-->
            <table id="example" class="table table-striped table-bordered ancho">
                <thead>
                    <tr>
                        <th class="estilo7"><h5><b>F2-4. COMPONENTE MEDIO CONSTRUÍDO</b></h5></th>
                    </tr>
                </thead>
            </table>
            <table id="example" class="table table-striped table-bordered ancho">
                <tbody>
                    <tr>
                        <tr>
                            <td colspan="11" class="estilo3"><h7><b>E</b></h7></td>
                            <td class="estilo1">USO DEL SUELO</td>
                            <td class="estilo1">ACCESIBILIDAD</td>
                            <td class="estilo1">ACCESO A LOS SERVICIOS<br>(no aplica en zonas rurales)</td>
                            <td class="estilo1">ÁREAS COMUNALES</td>
                            <td class="estilo1">EXPOSICIÓN A<br>CARRETERAS <br>PRINCIPALES</td>
                            <td rowspan="4"></td>
                            <td class="estilo2"><h7><b>P</b></h7></td>
                            <td class="estilo2"><b>F</b></td>
                            <td class="estilo2"><b>ExPxF</b></td>
                            <td class="estilo2"><b>PxF</b></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="usoSuelo1" name="usoSuelo1" class="ancho2 centrar" onchange="calcularF_Construido();calcularExPxF_Construido();calcularPxP_Construido();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()" ></td>
                            <td><input type="text" id="accesibilidad1" name="accesibilidad1" class="ancho2 centrar" onchange="calcularF_Construido();calcularExPxF_Construido();calcularPxP_Construido();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()" ></td>
                            <td><input type="text" id="accesoServicios1" name="accesoServicios1" class="ancho2 centrar" onchange="calcularF_Construido();calcularExPxF_Construido();calcularPxP_Construido();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()"  ></td>
                            <td><input type="text" id="areasComunes1" name="areasComunes1" class="ancho2 centrar" onchange="calcularF_Construido();calcularExPxF_Construido();calcularPxP_Construido();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()"  ></td>
                            <td><input type="text" id="exposicionCarreteras1" name="exposicionCarreteras1" class="ancho2 centrar" onchange="calcularF_Construido();calcularExPxF_Construido();calcularPxP_Construido();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()"  ></td>
                            <td class="centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="fpConstruido3" name="fpConstruido3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfConstruido3" name="expxfConstruido3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfConstruido3" name="pxfConstruido3" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="usoSuelo2" name="usoSuelo2" class="ancho2 centrar" onchange="calcularF_Construido2();calcularExPxF_Construido2();calcularPxP_Construido2();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()"  ></td>
                            <td><input type="text" id="accesibilidad2" name="accesibilidad2" class="ancho2 centrar" onchange="calcularF_Construido2();calcularExPxF_Construido2();calcularPxP_Construido2();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()"  ></td>
                            <td><input type="text" id="accesoServicios2" name="accesoServicios2" class="ancho2 centrar" onchange="calcularF_Construido2();calcularExPxF_Construido2();calcularPxP_Construido2();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()"  ></td>
                            <td><input type="text" id="areasComunes2" name="areasComunes2" class="ancho2 centrar" onchange="calcularF_Construido2();calcularExPxF_Construido2();calcularPxP_Construido2();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()"  ></td>
                            <td><input type="text" id="exposicionCarreteras2" name="exposicionCarreteras2" class="ancho2 centrar" onchange="calcularF_Construido2();calcularExPxF_Construido2();calcularPxP_Construido2();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()"  ></td>
                            <td class="centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="fpConstruido2" name="fpConstruido2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfConstruido2" name="expxfConstruido2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfConstruido2" name="pxfConstruido2" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="usoSuelo3" name="usoSuelo3" class="ancho2 centrar" onchange="calcularF_Construido3();calcularExPxF_Construido3();calcularPxP_Construido3();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()" ></td>
                            <td><input type="text" id="accesibilidad3" name="accesibilidad3" class="ancho2 centrar" onchange="calcularF_Construido3();calcularExPxF_Construido3();calcularPxP_Construido3();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()" ></td>
                            <td><input type="text" id="accesoServicios3" name="accesoServicios3" class="ancho2 centrar" onchange="calcularF_Construido3();calcularExPxF_Construido3();calcularPxP_Construido3();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()" ></td>
                            <td><input type="text" id="areasComunes3" name="areasComunes3" class="ancho2 centrar" onchange="calcularF_Construido3();calcularExPxF_Construido3();calcularPxP_Construido3();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()" ></td>
                            <td><input type="text" id="exposicionCarreteras3" name="exposicionCarreteras3" class="ancho2 centrar" onchange="calcularF_Construido3();calcularExPxF_Construido3();calcularPxP_Construido3();sumatoria_Construido_expx();sumatoria_Construido_pxf();totalConstruido();calculoFinal()" ></td>
                            <td class="centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="fpConstruido1" name="fpConstruido1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfConstruido1" name="expxfConstruido1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfConstruido1" name="pxfConstruido1" class="ancho80 centrar" readonly></td>  
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo4"><b>Σ</b></td>
                            <td class="ancho2"><input type="text" id="sumatoriaConstruidoExPxF" name="sumatoriaConstruidoExPxF" class="ancho80 centrar" readonly></td>
                            <td class="ancho2"><input type="text" id="sumatoriaConstruidoPxF" name="sumatoriaConstruidoPxF" class="ancho80 centrar" readonly></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo6" ></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo4"><b>VALOR TOTAL</b></td>
                            <td colspan="2" class="ancho2"><input type="text" id="TotalConstruido" name="TotalConstruido" class="estilo8" readonly></td>
                        </tr>
                    </tr>
                </tbody>                            
            </table>

            <br><br><br>


            <!--F2-5. COMPONENTE DE INTERACCIÓN (CONTAMINACIÓN)-->
            
            <table id="example" class="table table-striped table-bordered ancho">
                <thead>
                    <tr>
                        <th class="estilo7"><h5><b>F2-5. COMPONENTE DE INTERACCIÓN (CONTAMINACIÓN)</b></h5></th>
                    </tr>
                </thead>
            </table>
            <table id="example" class="table table-striped table-bordered ancho">
                <tbody>
                    <tr>
                        <tr>
                            <td colspan="11" class="estilo3"><h7><b>E</b></h7></td>
                            <td class="estilo1">DESECHOS SÓLIDOS Y LÍQUIDOS</td>
                            <td class="estilo1">INDUSTRIAS CONTAMINANTES</td>
                            <td class="estilo1">LÍNEAS DE ALTA TENSIÓN </td>
                            <td class="estilo1">PELIGROS EXPLOSIÓN E INCENDIOS</td>
                            <td class="estilo1">SERVICIOS DE RECOLECCIÓN DE DESECHOS</td>
                            <td rowspan="4"></td>
                            <td class="estilo2"><h7><b>P</b></h7></td>
                            <td class="estilo2"><b>F</b></td>
                            <td class="estilo2"><b>ExPxF</b></td>
                            <td class="estilo2"><b>PxF</b></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="desechosSolidos1" name="desechosSolidos1" class="ancho2 centrar" onchange="calcularF_Interaccion();calcularExPxF_Interaccion();calcularPxP_Interaccion();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="IndustriasContaminantes1" name="IndustriasContaminantes1" class="ancho2 centrar" onchange="calcularF_Interaccion();calcularExPxF_Interaccion();calcularPxP_Interaccion();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="altaTension1" name="altaTension1" class="ancho2 centrar" onchange="calcularF_Interaccion();calcularExPxF_Interaccion();calcularPxP_Interaccion();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="peligroExplosion1" name="peligroExplosion1" class="ancho2 centrar" onchange="calcularF_Interaccion();calcularExPxF_Interaccion();calcularPxP_Interaccion();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="recoleccionDesechos1" name="recoleccionDesechos1" class="ancho2 centrar" onchange="calcularF_Interaccion();calcularExPxF_Interaccion();calcularPxP_Interaccion();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td class="centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="fpInteraccion3" name="fpInteraccion3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfInteraccion3" name="expxfInteraccion3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfInteraccion3" name="pxfInteraccion3" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="desechosSolidos2" name="desechosSolidos2" class="ancho2 centrar" onchange="calcularF_Interaccion2();calcularExPxF_Interaccion2();calcularPxP_Interaccion2();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()"></td>
                            <td><input type="text" id="IndustriasContaminantes2" name="IndustriasContaminantes2" class="ancho2 centrar" onchange="calcularF_Interaccion2();calcularExPxF_Interaccion2();calcularPxP_Interaccion2();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="altaTension2" name="altaTension2" class="ancho2 centrar" onchange="calcularF_Interaccion2();calcularExPxF_Interaccion2();calcularPxP_Interaccion2();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="peligroExplosion2" name="peligroExplosion2" class="ancho2 centrar" onchange="calcularF_Interaccion2();calcularExPxF_Interaccion2();calcularPxP_Interaccion2();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="recoleccionDesechos2" name="recoleccionDesechos2" class="ancho2 centrar" onchange="calcularF_Interaccion2();calcularExPxF_Interaccion2();calcularPxP_Interaccion2();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td class="centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="fpInteraccion2" name="fpInteraccion2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfInteraccion2" name="expxfInteraccion2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfInteraccion2" name="pxfInteraccion2" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="desechosSolidos3" name="desechosSolidos3" class="ancho2 centrar" onchange="calcularF_Interaccion3();calcularExPxF_Interaccion3();calcularPxP_Interaccion3();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()"></td>
                            <td><input type="text" id="IndustriasContaminantes3" name="IndustriasContaminantes3" class="ancho2 centrar" onchange="calcularF_Interaccion3();calcularExPxF_Interaccion3();calcularPxP_Interaccion3();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="altaTension3" name="altaTension3" class="ancho2 centrar" onchange="calcularF_Interaccion3();calcularExPxF_Interaccion3();calcularPxP_Interaccion3();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="peligroExplosion3" name="peligroExplosion3" class="ancho2 centrar" onchange="calcularF_Interaccion3();calcularExPxF_Interaccion3();calcularPxP_Interaccion3();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td><input type="text" id="recoleccionDesechos3" name="recoleccionDesechos3" class="ancho2 centrar" onchange="calcularF_Interaccion3();calcularExPxF_Interaccion3();calcularPxP_Interaccion3();sumatoria_Interaccion_expx();sumatoria_Interaccion_pxf();totalInteraccion();calculoFinal()" ></td>
                            <td class="centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="fpInteraccion1" name="fpInteraccion1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfInteraccion1" name="expxfInteraccion1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfInteraccion1" name="pxfInteraccion1" class="ancho80 centrar" readonly></td>  
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo4"><b>Σ</b></td>
                            <td class="ancho2"><input type="text" id="sumatoriaInteraccionExPxF" name="sumatoriaInteraccionExPxF" class="ancho80 centrar" readonly></td>
                            <td class="ancho2"><input type="text" id="sumatoriaInteraccionPxF" name="sumatoriaInteraccionPxF" class="ancho80 centrar" readonly></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo6" ></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo4"><b>VALOR TOTAL</b></td>
                            <td colspan="2" class="ancho2"><input type="text" id="TotalInteraccion" name="TotalInteraccion" class="estilo8" readonly></td>
                        </tr>
                    </tr>
                </tbody>                            
            </table>


            <br><br><br>

            <!--F2-6. COMPONENTE INSTITUCIONAL SOCIAL -->
            <table id="example" class="table table-striped table-bordered ancho">
                <thead>
                    <tr>
                        <th class="estilo7"><h5><b>F2-6. COMPONENTE INSTITUCIONAL SOCIAL</b></h5></th>
                    </tr>
                </thead>
            </table>
            <table id="example" class="table table-striped table-bordered ancho">
                <tbody>
                    <tr>
                        <tr>
                            <td colspan="11" class="estilo3"><h7><b>E</b></h7></td>
                            <td class="estilo1">CONFLICTOS TERRITORIALES</td>
                            <td class="estilo1">SEGURIDAD CIUDADANA</td>
                            <td class="estilo1">MARCO LEGAL</td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo2"><h7><b>P</b></h7></td>
                            <td class="estilo2"><b>F</b></td>
                            <td class="estilo2"><b>ExPxF</b></td>
                            <td class="estilo2"><b>PxF</b></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="conflictosTerritoriales1" name="conflictosTerritoriales1" class="ancho2 centrar" onchange="calcularF_Institucional();calcularExPxF_Institucional();calcularPxP_Institucional();sumatoria_Institucional_expx();sumatoria_Institucional_pxf();totalInstitucional();calculoFinal()"></td>
                            <td><input type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" class="ancho2 centrar" onchange="calcularF_Institucional();calcularExPxF_Institucional();calcularPxP_Institucional();sumatoria_Institucional_expx();sumatoria_Institucional_pxf();totalInstitucional();calculoFinal()" ></td>
                            <td><input type="text" id="marcoLegal1" name="marcoLegal1" class="ancho2 centrar" onchange="calcularF_Institucional();calcularExPxF_Institucional();calcularPxP_Institucional();sumatoria_Institucional_expx();sumatoria_Institucional_pxf();totalInstitucional();calculoFinal()"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="fpInstitucional3" name="fpInstitucional3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfInstitucional3" name="expxfInstitucional3" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfInstitucional3" name="pxfInstitucional3" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="conflictosTerritoriales2" name="conflictosTerritoriales2" class="ancho2 centrar" onchange="calcularF_Institucional2();calcularExPxF_Institucional2();calcularPxP_Institucional2();sumatoria_Institucional_expx();sumatoria_Institucional_pxf();totalInstitucional();calculoFinal()" ></td>
                            <td><input type="text" id="seguridadCiudadana2" name="seguridadCiudadana2" class="ancho2 centrar" onchange="calcularF_Institucional2();calcularExPxF_Institucional2();calcularPxP_Institucional2();sumatoria_Institucional_expx();sumatoria_Institucional_pxf();totalInstitucional();calculoFinal()" ></td>
                            <td><input type="text" id="marcoLegal2" name="marcoLegal2" class="ancho2 centrar" onchange="calcularF_Institucional2();calcularExPxF_Institucional2();calcularPxP_Institucional2();sumatoria_Institucional_expx();sumatoria_Institucional_pxf();totalInstitucional();calculoFinal()" ></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="centrar"><h7><b>2</b></h7></td>
                            <td><input type="text" id="fpInstitucional2" name="fpInstitucional2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfInstitucional2" name="expxfInstitucional2" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfInstitucional2" name="pxfInstitucional2" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="ancho200 centrar"><h7><b>3</b></h7></td>
                            <td><input type="text" id="conflictosTerritoriales3" name="conflictosTerritoriales3" class="ancho2 centrar" onchange="calcularF_Institucional3();calcularExPxF_Institucional3();calcularPxP_Institucional3();sumatoria_Institucional_expx();sumatoria_Institucional_pxf();totalInstitucional();calculoFinal()"></td>
                            <td><input type="text" id="seguridadCiudadana3" name="seguridadCiudadana3" class="ancho2 centrar" onchange="calcularF_Institucional3();calcularExPxF_Institucional3();calcularPxP_Institucional3();sumatoria_Institucional_expx();sumatoria_Institucional_pxf();totalInstitucional();calculoFinal()" ></td>
                            <td><input type="text" id="marcoLegal3" name="marcoLegal3" class="ancho2 centrar" onchange="calcularF_Institucional3();calcularExPxF_Institucional3();calcularPxP_Institucional3();sumatoria_Institucional_expx();sumatoria_Institucional_pxf();totalInstitucional();calculoFinal()" ></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="centrar"><h7><b>1</b></h7></td>
                            <td><input type="text" id="fpInstitucional1" name="fpInstitucional1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="expxfInstitucional1" name="expxfInstitucional1" class="ancho80 centrar" readonly></td>
                            <td><input type="text" id="pxfInstitucional1" name="pxfInstitucional1" class="ancho80 centrar" readonly></td> 
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo5"></td>
                            <td class="estilo4"><b>Σ</b></td>
                            <td class="ancho2"><input type="text" id="sumatoriaInstitucionalExPxF" name="sumatoriaInstitucionalExPxF" class="ancho80 centrar" readonly></td>
                            <td class="ancho2"><input type="text" id="sumatoriaInstitucionalPxF" name="sumatoriaInstitucionalPxF" class="ancho80 centrar" readonly></td>
                        </tr>
                        <tr>
                            <td colspan="11" class="estilo6" ></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo6"></td>
                            <td class="estilo4"><b>VALOR TOTAL</b></td>
                            <td colspan="2" class="ancho2"><input type="text" id="totalInstitucional" name="totalInstitucional" class="estilo8" readonly></td>
                        </tr>

                    </tr>
                </tbody>                            
            </table>

            <br><br><br>

            <form method="POST" action="{{route('formII')}}" id="formFormularioII" name="fornmFormularioII">    

                {{ csrf_field() }}  

                <!--F2-7.  RESUMEN DE LA EVALUACIÓN  -->
                <table id="example" class="table table-striped table-bordered ancho">
                    <thead>
                        <tr>
                            <th class="estilo7"><h5><b>F2-7.  RESUMEN DE LA EVALUACIÓN </b></h5></th>
                        </tr>
                    </thead>
                </table>
                <table id="example" class="table table-striped table-bordered ancho">
                    <tbody>
                        <tr>
                            <tr>
                                <td colspan="2" class="estilo1"><h7><b>COMPONENTES</b></h7></td>
                                <td colspan="2" class="estilo1">EVALUACIÓN</td>
                                <td colspan="" style="text-align: center; width: 130px; background-color: #B2BEC6  ; color: black">PROMEDIO</td>
                                <td colspan="" class="estilo1">CALIFICACIÓN</td>
                                <td colspan="" class="estilo1">DESCRIPCIÓN</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="estilo1"><b>BIOCLIMÁTICO</b></td>
                                <td colspan="2"><input type="text" id="evaluacionBioclimatico" name="evaluacionBioclimatico" class="estilo9" readonly></td>
                                <td rowspan="6"><input type="text" id="resumenPromedio" name="resumenPromedio" class="estilo10" readonly></td>
                                <td rowspan="6"><input type="text" id="resumenCalificacion" name="resumenCalificacion" class="estilo10" readonly></td>
                                <td rowspan="6"><input type="text" id="resumenDescripcion" name="resumenDescripcion" class="estilo10" readonly></td>   
                            </tr>

                            <tr>
                                <td colspan="2" class="estilo1"><b>GEOLOGÍA</b></td>
                                <td colspan="2"><input type="text" id="evaluacionGeologia" name="evaluacionGeologia" class="estilo9"  readonly></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="estilo1"><b>ECOSISTEMA</b></td>
                                <td colspan="2"><input type="text" id="evaluacionEcosistema" name="evaluacionEcosistema" class="estilo9" readonly></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="estilo1"><b>MEDIO CONSTRUIDO</b></td>
                                <td colspan="2"><input type="text" id="evaluacionMedioConstruido" name="evaluacionMedioConstruido" class="estilo9" readonly></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="estilo1"><b>BIOINTERACCIÓN<br>(CONTAMINACIÓN)CLIMÁTICO</b></td>
                                <td colspan="2"><input type="text" id="evaluacionBiointeraccion" name="evaluacionBiointeraccion" class="estilo9" readonly></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="estilo1"><b>INSTITUCIONAL<br>SOCIAL</b></td>
                                <td colspan="2"><input type="text" id="evaluacionInstitucional" name="evaluacionInstitucional" class="estilo9" readonly></td>
                            </tr>   
                        </tr>
                    </tbody>                            
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td><h7><b>OBSERVACIONES</b><input type="text" id="observaciones" name="observaciones" style="width: 340%; height: 70px;"></h7></td>
                        </tr>
                    </tbody>
                </table>

                <br>

                <table id="example" class="table table-striped table-bordered ancho">
                    <tbody>
                        <tr>
                            <tr>
                                <td colspan="2" class="estilo1"><h7><b>RESULTADO</b></h7></td>
                                <td colspan="2" class="estilo1">RIESGO</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="estilo1"><b>1,00 - 1,50</b></td>
                                <td colspan="2"><input type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 100%; text-align: center; background-color: #DF0100; color: black" readonly value="MUY ALTO"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="estilo1"><b>1,60 - 2,00</b></td>
                                <td colspan="2"><input type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 100%; text-align: center; background-color: #C2B705; color: black" readonly value="ALTO"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="estilo1"><b>2,10 - 2,50</b></td>
                                <td colspan="2"><input type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 100%; text-align: center;background-color: #FFBF00; color: black" readonly value="MEDIO"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="estilo1"><b>> 2,60</b></td>
                                <td colspan="2"><input type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 100%; text-align: center; background-color: #08672D; color: black" readonly value="BAJO"></td>
                            </tr>
                            
                        </tr>
                    </tbody>                            
                </table>

                <br><br><br>

                <div class="form-group">
                    <div >
                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                            {{ __('CONTINUAR CON FORMULARIO III') }}
                        </button>
                    </div>
                </div>

            </form>
            


        </div>

        <br><br><br><br>



        <br><br><br>

    

    @endsection