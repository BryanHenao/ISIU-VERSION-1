@extends('Layouts.Base')
    @section('content')

        <br><br><br><br>

        <div class="container">
            <!-- FORMULARIO 3-->

<!-- FORMULARIO 3-->
<div class="tab-pane" id="facilities">

<br><br>
<!--F3-1. EVALUACIÓN DE LA SEGURIDAD (ESTRUCTURAL)-->
<table id="exampl   e" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h5><b>F3-1. EVALUACIÓN DE LA SEGURIDAD (ESTRUCTURAL)</b></h5></th>
            <td rowspan="2" style="text-align: center; width: 110px; background-color: #B2BEC6  ; color: black"><h7><b>NO APLICABLE O NO DISPONIBLE</b></h7></td>
            <td colspan="3" style="text-align: center; width: 280px; background-color: #B2BEC6  ; color: black"><h7><b><br>GRADO DE SEGURIDAD</b></h7></td>
        </tr>
        <tr>
            <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-1.1 SEGURIDAD SEGÚN ANTECEDENTES DE LAS INSTALACIONES</b></h6></th>
            <th style="text-align: center; width: 100px; color:black; background-color:  #FD4E48"><b>BAJO</b></th>
            <th style="text-align: center; width: 100px; color:black; background-color: #FDD854"><b>MEDIO</b</th>
            <th style="text-align: center; width: 100px; color:black; background-color: #03DC67"><b>ALTO</b></th>
        </tr>

    </thead>
</table>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <tbody>

        <!--F3-1.1 SEGURIDAD SEGÚN ANTECEDENTES DE LAS INSTALACIONES-->
        <tr>|
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>1. El edificio ha sufrido daños estructurales debido a fenónemos naturales: (verificar si existe dictamen estructural)</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="1_noAplica" name="1_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2" style="width: 28px"><input type="text" id="1_bajo" name="1_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2" style="width: 28px"><input type="text" id="1_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2" style="width: 28px"><input type="text" id="alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B=Daños mayores;  M=Daños moderados;    A= Daños menores</td>
            </tr>

        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>2. El edificio ha sido reparado o construido utilizando estándares/normas razonablemente comparables con los actuales.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="2_noAplica" name="2_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="2_bajo" name="2_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="2_bajo" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="2_bajo" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly value>Verificar normativa utilizada y fecha de intervención o construcción.B= No se aplicaron estándares;  M= Estándares parcialmente aplicados;   A=Estándares aplicados completamente</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>3. El edificio ha sido remodelado o adaptado afectando el comportamiento de la estructura.)</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="3_noAplica" name="3_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="3_bajo" name="3_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="3_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="3_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar fecha de remodelación y normativa aplicada.   B= Remodelaciones sin aplicación de normas oficiales;      M= Remodelaciones con aplicación parcial de normas oficiales;  A= Remodelaciones con aplicación total de normas oficiales</td>
            </tr>
        </tr>

        <!--F3-1.2 SEGURIDAD RELACIONADA CON EL SISTEMA ESTRUCTURAL Y EL TIPO DE MATERIAL UTILIZADO EN LA EDIFICACIÓN.-->
        <tr>
            <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-1.2 SEGURIDAD RELACIONADA CON EL SISTEMA ESTRUCTURAL Y EL TIPO DE MATERIAL UTILIZADO EN LA EDIFICACIÓN.</b></h6></th>
            <td  style="text-align: center; width: 110px; background-color: rgb(255, 255, 255)  ; color: black"></td>
            <th ><input type="text" style="text-align: center; width: 81px; height: 35px; color:black; background-color:  #FD4E48" readonly></th>
            <th ><input type="text" style="text-align: center; width: 81px; height: 35px; color:black; background-color: #FDD854" readonly></th>
            <th ><input type="text" style="text-align: center; width: 81px; height: 35px; color:black; background-color: #03DC67" readonly></th>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>4. Estado de la edificación.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="4_noAplica" name="4_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="4_bajo" name="4_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="4_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="4_alto" name="alto=" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B= Deterioro causado por desgaste (Severa oxidación del acero, desprendimiento de hormigón, madera podrida); grietas en el primer nivel, desplome; M= moderado deterioro por meteorización o falta de mantenimiento;  A=Remodelaciones con aplicación total de normas oficiales.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>5. Materiales de construcción de la estructura.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="5_noAplica" name="5_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="5_bajo" name="5_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="5_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="5_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Oxidada con escamas o grietas mayores de 3mm (hormigón, mampostería), excesivas deformaciones (acero y madera);       M = Grietas entre 1 y 3 mm (hormigón,mamposteria), moderadas y visibles deformaciones (acero y madera) u óxido en forma de polvo; A = Grietas menores a 1mm (hormigón), sin deformaciones visibles; no hay óxido.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>6. interacción de los elementos no estructurales con la estructura.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="6_noAplica" name="6_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="6_bajo" name="6_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="6_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="6_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se observa dos o más de lo siguiente: columnas cortas, paredes divisorias unidas a la estructura, mezzanine, fachadas que interactúa con la estructura, si afectan elementos estructurales; M = Se observa sólo uno de problemas antes mencionados, si las afectaciones no ponen en riesgo la estructura; A = Los elementos no estructurales no afectan la estructura.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>7. Proximidad de los edificios (martilleo), si no es zona sísmica, marcar no  aplicable.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="7_noAplica" name="7_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="7_bajo" name="7_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="7_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="7_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Separación menor al 0.5% de la altura del edificio de menor altura; M = Separación entre 0.5 – 1.4% de la altura del edificio de menor altura; A = Separación mayor al 1.4% del edificio de menor altura.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>8. Proximidad de los edificios (Túnel de viento e incendios).</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="8_noAplica" name="8_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="8_bajo" name="8_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="8_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="8_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B= separación menor a 5m; M = separación entre 5 y 15 m; A = Separación mayor a 15 m.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>9. Redundancia estructural.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="9_noAplica" name="9_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="9_bajo" name="9_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="9_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="9_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Menos de tres ejes de resistencia en cada dirección; M = 3 ejes de resistencia en cada dirección o líneas con orientación no ortogonal; A = Más de 3 ejes de resistencia en cada dirección ortogonal del edificio.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>10. Años de construcción.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="10_noAplica" name="10_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="10_bajo" name="10_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="10_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="10_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Edificio diseñado y construido con  el Código Colombiano de Construcciones Sismo Resistentes (CCCSR- 84) ; M = Edificio construido y/o diseñado con base en la NSR-98; A = Edificio diseñado y construido con base en la NSR-10.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>11. Seguridad de fundaciones o cimientos.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="11_noAplica" name="11_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="11_bajo" name="11_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 125px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="11_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 125px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="11_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 125px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No cuenta con planos y estudios de suelos y/o tiene evidencias de daño; M = Hay planos y estudios de suelo que permiten valorar la cimentación tanto desde el punto de vista estructural como el geotécnico a la fundación de la edificación pero hay evidencia de daños moderados; A = Hay planos y estudio de suelos que permiten valorar la cimentación tanto desde el punto de vista estructural como el geotécnico a la fundación y no hay evidencia de daños.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>12. Irregularidades en planta (rigidez, masa y resistencia).</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="12_noAplica" name="12_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="12_bajo" name="12_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="12_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="12_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Formas globales no regulares y estructura no uniforme; M = Formas no regulares pero con estructura uniforme;  A = Formas regulares, estructura uniforme en planta y ausencia de elementos que podrían causar significativa torsión.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>13. Relación longitud/ancho.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="13_noAplica" name="13_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="13_bajo" name="13_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="13_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="13_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = El largo es 4 veces mayor que el ancho; M = El largo es 2.5 veces o menor a 4 veces más largo en relación a su ancho; A = La relación longitud/ancho es menor que 2.5 o si es mayor cuenta con juntas de dilatación/construcción</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>14. Pisos superiores salientes/cambios de volumen en elevación.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="14_noAplica" name="14_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="14_bajo" name="14_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="14_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="14_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Tiene pisos superiores salientes (voladizos) o cambios
                        de volumen en elevación; A = No tiene pisos superiores salientes, ni cambios de volumen en elevación.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>15. Viga fuerte/columna débil.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="15_noAplica" name="15_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="15_bajo" name="15_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="15_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="15_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se evidencia la presencia de elementos horizontales mucho más fuertes que los elementos verticales; A = Se asegura que los elementos horizontales no son más fuertes que los elementos verticales.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>16. Columnas alineadas/no alineadas (trayectoria de fuerzas verticales).</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="16_noAplica" name="16_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="16_bajo" name="16_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="16_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="16_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = La trayectoria de fuerzas se ve interrumpida verticalmente; A = La trayectoria de fuerzas es continua y directa hasta el suelo.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>17. Concentraciones de masa en piso superior.</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="17_noAplica" name="17_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="17_bajo" name="17_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="17_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="17_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar la presencia de tanques o masas concentradas en el nivel superior. B =Tiene concentraciones de masa en el nivel superior; A = No tiene concentraciones de masa en el nivel superior.</td>
            </tr>
        </tr>

        <tr>
            <tr>
                <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>18. Adecuación estructural a fenómenos. (meteorológicos, geológicos, entre otros)</b></h7></td>
                <th rowspan="2" style="width: 28px"><input type="text" id="18_noAplica" name="18_noAplica" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                <th rowspan="2"><input type="text" id="18_bajo" name="18_bajo" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                <th rowspan="2"><input type="text" id="18_medio" name="medio" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                <th rowspan="2"><input type="text" id="18_alto" name="alto" onchange="calculo1()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
            </tr>
            <tr>
                <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Valorar el comportamiento estructural global y la resiliencia del edificio ante todas las amenazas que lo pueden afectar. B = baja resiliencia a las amenazas naturales presentes en la zona donde está ubicado la instalación Universitaria; M = Moderada resiliencia; A = excelente resiliencia.</td>
            </tr>
        </tr>
        <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>ÍNDICE DE SEGURIDAD (ESTRUCTURAL)</b></h6></th>
                                                <td colspan="4"><input type="text" id="res1" name="res1" style="width: 100%; height: 50px; color: #DF0100" readonly></td>
        
                                            </tr>
        
                                        </tbody>                            
                                    </table>
        
                                    <br><br><br>
                                    
                                    <!--F3-2. EVALUACIÓN DE LA SEGURIDAD (NO ESTRUCTURAL)-->
                                    <table id="exampl   e" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h5><b>F3-2. EVALUACIÓN DE LA SEGURIDAD (NO ESTRUCTURAL)</b></h5></th>
                                                <td rowspan="2" style="text-align: center; width: 110px; background-color: #B2BEC6  ; color: black"><h7><b>NO APLICABLE O NO DISPONIBLE</b></h7></td>
                                                <td colspan="3" style="text-align: center; width: 280px; background-color: #B2BEC6  ; color: black"><h7><b><br>GRADO DE SEGURIDAD</b></h7></td>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.1 LÍNEAS VITALES-INSTALACIONES.</b></h6></th>
                                                <th style="text-align: center; width: 100px; color:black; background-color:  #FD4E48"><b>BAJO</b></th>
                                                <th style="text-align: center; width: 100px; color:black; background-color: #FDD854"><b>MEDIO</b</th>
                                                <th style="text-align: center; width: 100px; color:black; background-color: #03DC67"><b>ALTO</b></th>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.1.1 SISTEMA ELÉCTRICO</b></h6></th>
                                                <td colspan="4"><input style="width: 100%; height: 50px; color: #DF0100" readonly></td>
                                                
                                            </tr>
           
        
                                        </thead>
                                    </table>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <tbody>
        
                                            
                                            <tr>|
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>19. Generador eléctrico adecuado para el 100% de la demanda.</b></h7></td>
                                                    <th rowspan="2" style="width: 28px"><input type="text" id="19_noAplica" name="19_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2" style="width: 28px"><input type="text" id="19_bajo" name="19_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2" style="width: 28px"><input type="text" id="19_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2" style="width: 28px"><input type="text" id="19_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>El evaluador verifica que el generador entre en función segundos después de la caída de tensión, cubriendo la demanda de laboratorios, sistemas de información con ambiente controlado, centrales de seguridad, etc. B = Sólo se enciende manualmente o cubre del 0 – 30% de la demanda; M = Se enciende automáticamente en más de 10 segundos o cubre 31 – 70 % de la demanda; A = Se enciende utomáticamente en menos de 10 segundos y cubre del 71 – 100% de la demanda.</td>
                                                </tr>
              
                                            </tr>
        
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>20. Regularidad de las pruebas de funcionamiento en las áreas críticas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="20_noAplica" name="20_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="20_bajo" name="20_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="20_bajo" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="20_bajo" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly value>El evaluador verifica la frecuencia en que el generador es puesto a prueba con resultados satisfactorios. B = > 3 meses; M = 1 a 3 meses; A =< 1 mes.</td>
                                                </tr>
                                            </tr>
        
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>21. Seguridad de las instalaciones, ductos y cables eléctricos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="21_noAplica" name="21_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="21_bajo" name="21_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="21_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="21_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No, la red eléctrica no se encuentra asegurada, anclada correctamente, ni protegida contra vientos e inundaciones, presenta deterioro; M = Parcialmente se observa uno de los problemas mencionados en el inciso anterior; A = Sí, están asegurados, anclados y protegidos contra vientos e inundaciones.</td>
                                                </tr>
                                            </tr>

                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>22. Sistema con tablero de control e interruptor de sobrecarga y cableado debidamente protegido.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="22_noAplica" name="22_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="22_bajo" name="22_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="22_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="22_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar la accesibilidad así como el buen estado y funcionamiento del tablero de control general de electricidad. B = Poca accesibilidad, mala instalación y funcionamiento, capacidad inadecuada; M = Parcialmente, hay que corregir algunos puntos del tablero que amenazan la edificación; A = Accesibilidad, instalación, funcionamiento, capacidad y conexión de los tableros adecuado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>23. Sistema de iluminación interna y externa de los sitios clave de la edificación.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="23_noAplica" name="23_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="23_bajo" name="23_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="23_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="23_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Realizar recorrido por pasillos internos y externos verificando el grado de iluminación y funcionalidad de lámparas. B = Las instalaciones, anclajes o  funcionalidad de las lámparas no es el adecuado o se encuentran deteriorados en más del 50% de las luminarias; M = arcialmente hay que corregir algunos puntos de la iluminación y anclaje, no encienden más de la mitad de las luminarias; A = Las instalaciones, anclaje y funcionalidad de lámparas es seguro y las luminarias encienden en un 90% o más.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>24. Sistemas eléctricos externos e internos, instalados dentro del perímetro de la edificación.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="24_noAplica" name="24_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="24_bajo" name="24_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="24_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="24_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar si existen subestaciones eléctricas o transformadores que proveen electricidad a la edificación. B = No existen subestaciones eléctricas instaladas en la edificación; M = Existen subestaciones, pero no proveen suficiente energía a la edificación; A = Subestación eléctrica instalada y provee suficiente energía a la edificación.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>25. Señalización de flipones/ breaker/ disyuntores/ interruptores/ dados térmicos en tableros eléctricos (por áreas).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="25_noAplica" name="25_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="25_bajo" name="25_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="25_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="25_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No se han señalado; M = están señalizados, pero no corresponden o no se entiende; A = están señalizados correctamente</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>26. Seguridad y funcionamiento del Sistema de tomacorrientes.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="26_noAplica" name="26_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="26_bajo" name="26_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="26_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="26_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Mala instalación y funcionamiento (polaridad invertida), accesorios dañados, no pasa energía en más del 50%; M = Parcialmente, hay que reparar accesorios y cableado y no hay energía en más del 10%; A = Los tomacorrientes están bien instalados y funcionan adecuadamente.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>27. Normativa eléctrica que rige al país referente a las instalaciones eléctricas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="27_noAplica" name="27_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="27_bajo" name="27_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="27_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="27_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existen bitácoras ni planos que corroboren que la instalaciones eléctricas cumplen con el código eléctrico; M = Se han hecho  ampliaciones/remodelaciones, las cuales no cuentan con registro eléctrico; A = Existe documentación que demuestra que si se cumple con el código  eléctrico que rige al país.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.1.2. SISTEMA DE TELECOMUNICACIONES</b></h6></th>
                                                <td colspan="4"><input style="width: 100%; height: 50px; color: #DF0100" readonly></td>
        
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>28. Estado técnico de las antenas y soportes de las mismas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="28_noAplica" name="28_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="28_bajo" name="28_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="28_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="28_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que las antenas y pararrayos cuenten con soportes que eleven el nivel de seguridad del edificio. B = Mal estado o no existen soportes; M = Regular estado, los soportes están dañados; A = Buen estado, se le brinda mantenimiento a los soportes.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>29. Estado técnico de sistemas de baja corriente (conexiones/ Internet).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="29_noAplica" name="29_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="29_bajo" name="29_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="29_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="29_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar en áreas estratégicas que los cables estén conectados evitando la sobrecarga. B = Mal estado o no existen; M = Regular; A = Bueno.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>30. Estado técnico y seguridad de los sistemas de comunicación alterna.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="30_noAplica" name="30_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="30_bajo" name="30_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="30_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="30_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar el estado de otros sistemas: radiocomunicación, teléfono satelital, altavoces, intercomunicadores, internet, etc. B = Mal estado, no cuenta con baterías, no funciona o no existe; M = Regular, presenta un problema de los mencionados en el inciso anterior; A = En buen estado, funcionando.</td>
                                                </tr>
                                            </tr>
                                
                                            
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.1.3. SISTEMA DE APROVISIONAMIENTO Y SANEAMIENTO DE AGUA</b></h6></th>
                                                <td colspan="4"><input style="width: 100%; height: 50px; color: #DF0100" readonly></td>
        
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>31. Tanque de agua con reserva permanente suficiente para proveer un mínimo de 25 litros por persona por jornada por día durante 72 horas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="31_noAplica" name="31_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="31_bajo" name="31_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="31_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="31_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que el depósito de agua cuente con una capacidad suficiente para satisfacer la demanda del edificio por 3 días. B = Cubre la demanda de 24 horas o menos; M = Cubre la demanda de más de 24 horas pero menos de 72 horas; A = Garantizado para cubrir la demanda por 72 horas o más.</td>
                                                </tr>
                                            </tr>

                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>32. Los depósitos (cisternas) se encuentran en lugar seguro y protegido.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="32_noAplica" name="32_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="32_bajo" name="32_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="32_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="32_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Visitar sitio de cisterna y corroborar el área donde está instalada y su grado de seguridad. B = Si el espacio es susceptible de falla estructural o no estructural, riesgo de contaminación, sin tapas, posibilidad de deslizamiento del terreno, grietas o ubicado en losa de edificios; M = se presenta al menos uno de los problemas del inciso anterior; A = Cuando tiene poca posibilidad de dejar de funcionar, sin riesgo de contaminación, sin posibilidad de deslizamiento del terreno, sin grietas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>33. Sistema alterno de abastecimiento de agua adicional a la red de distribución principal.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="33_noAplica" name="33_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="33_bajo" name="33_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="33_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="33_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Identificar organismos o mecanismos para abastecer o reaprovisionar de agua al edificio en caso de falla del sistema público. B = Si da menos de 30% de la demanda o no existe; M = Si suple valores de 30 a 80% de la demanda; A = Si suple más del 80% de la dotación diaria</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>34. Seguridad del sistema de distribución. Verificar el buen estado y funcionamiento del sistema de distribución, incluyendo la cisterna, válvula, tuberías y uniones.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="34_noAplica" name="34_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="34_bajo" name="34_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="34_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="34_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Si menos del 60% se encuentra en buenas condiciones de operación; M = Entre 60 y 80 %; A = más del 80 % funciona adecuadamente.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>35. Sistema de bombeo alterno. Identificar la existencia y el estado operativo del sistema alterno de bombeo, en caso de falla en el suministro.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="35_noAplica" name="35_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="35_bajo" name="35_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="35_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="35_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No hay bomba de reserva y las operativas no suplen toda la demanda diaria; M = Están todas las bombas en regular estado de operación; A = Todas las bombas y las de reserva están operativas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>36. Sistema de rociadores e hidrantes. Identificar la existencia y el estado del tanque para rociadores e hidrantes y el estado de los mismos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="36_noAplica" name="36_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="36_bajo" name="36_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="36_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="36_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No hay rociadores ni hidrantes o no están funcionando; M = Si existen rociadores ni hidrantes pero no funcionan; A = El sistema de rociadores e hidrantes funciona adecuadamente y si existe almacenamiento de agua para emergencia.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>37. Instalación de artefactos (pilas, piletas, inodoros, mingitorios, orinales y lavamanos).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="37_noAplica" name="37_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="37_bajo" name="37_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="37_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="37_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar la instalación de artefactos,el buen estado, funcionamiento y que no cuente con fugas. B = Menos del 60% funciona adecuadamente y sus condiciones no son óptimas; M = Entre 60 y 80% funciona adecuadamente; A = Más del 80% funciona adecuadamente y sus condiciones son optimas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>38. Servicios sanitarios para personas con discapacidad.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="38_noAplica" name="38_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="38_bajo" name="38_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="38_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="38_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existen o existen pero no cumplen con las dimensiones requeridas para ancho o alto, no están señalizados y se encuentran en mal estado; M = Solamente tiene una de las características mencionadas en el inciso anterior; A = SI cumplen con los requisitos mínimos, está en buen estado y se aplica para todos los artefactos sanitarios.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>39. Condición y funcionamiento de drenajes</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="39_noAplica" name="39_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="39_bajo" name="39_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="39_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="39_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar el buen estado y funcionamiento del sistema de drenajes. B = Menos del 60% funciona adecuadamente y sus condiciones no son óptimas; M = Entre 60 y 80% funciona adecuadamente; A = Más del 80% funciona adecuadamente y sus condiciones son óptimas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>40. Condición y funcionamiento de sistema de drenaje pluvial/canaletas/canoas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="40_noAplica" name="40_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="40_bajo" name="40_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="40_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="40_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar el buen estado, condición y funcionamiento del sistema de drenaje pluvial/canaletas/canoas y sus instalaciones. B = Menos del 60% funciona adecuadamente y sus condiciones no son óptimas; M = Entre 60 y 80% funciona adecuadamente; A = Más del 80% funciona adecuadamente y sus condiciones son óptimas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>41. Condición, capacidad y funcionamiento de fosa séptica o instalación al drenaje municipal.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="41_noAplica" name="41_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="41_bajo" name="41_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="41_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="41_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Las condiciones, capacidad y funcionamiento de la fosa séptica o la instalación al drenaje municipal están perjudicando a la edificación; M = Presenta alguno de los tres problemas descritos en el inciso B; A= Las condiciones de la fosa séptica o la instalación al drenaje municipal funcionan  perfectamente y su capacidad es la adecuada.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>42. Ubicación de fosa séptica.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="42_noAplica" name="42_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="42_bajo" name="42_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="42_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="42_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar la ubicación de la fosa séptica, que no perjudique las demás instalaciones ni la infraestructura. B = La fosa séptica ocasiona daños a la infraestructura del centro educativo, o su ubicación es inadecuada provocando contaminación; M = La fosa séptica está ubicada en mal lugar, pero no hace daño a la infraestructura o viceversa; A = La ubicación es óptima y no perjudica la infraestructura.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>43. Condición, capacidad y funcionamiento de planta de tratamiento.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="43_noAplica" name="43_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="43_bajo" name="43_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="43_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="43_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Las condiciones, capacidad y funcionamiento de la planta de tratamiento están perjudicando al edificio; M = Presenta alguno de los tres problemas descritos en el inciso B; A = Las condiciones de la planta de tratamiento funcionan perfectamente y su capacidad es la adecuada.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.1.4. DEPÓSITOS DE COMBUSTIBLE PARA PLANTAS ELÉCTRICAS DE EMERGENCIA</b></h6></th>
                                                
        
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>44. Tanques para combustible con capacidad suficiente para un mínimo de 1 días.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="44_noAplica" name="44_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="44_bajo" name="44_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="44_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="44_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que el edificio cuente con depósito amplio y seguro para almacenaje de combustible. B = Cuando es inseguro su almacenamiento o tiene área de almacenamiento; M = Almacenamiento con cierta seguridad y con 0.5 días de abastecimiento de combustible; A = Se tienen 1 o más días de combustible y es seguro su depósito.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>45. Anclaje, ubicación y protección de tanques y cilindros de combustibles.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="45_noAplica" name="45_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="45_bajo" name="45_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="45_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="45_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No hay anclajes y el recinto no es seguro; M = Se aprecian anclajes insuficientes; A = Existen anclajes en buenas condiciones y el recinto o espacio es apropiado</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>46. Seguridad del sistema de distribución (válvulas; tuberías y uniones</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="46_noAplica" name="46_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="46_bajo" name="46_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="46_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="46_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Si menos del 60% se encuentra en buenas condiciones de operación; M = entre 60 y 80 %; A = Más del 80 %.</td>
                                                </tr>
                                            </tr>
                                            
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.1.5. DEPÓSITOS DE GASES Y SUSTANCIAS PELIGROSAS PARA EL LABORATORIO O GASES INDUSTRIALES.</b></h6></th>
                                               
                                                </tr>
                                                
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>47. Ubicación y anclaje de tanques, cilindros y equipos complementarios.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="47_noAplica" name="47_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="47_bajo" name="47_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="47_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="47_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existen anclajes, se encuentran dañados, son insuficientes y están mal ubicados; M = Presenta uno de los problemas del inciso anterior; A = Los anclajes son de buen calibre, están en buen estado, hay suficiente para suplir la demanda y están ubicados en un lugar seguro.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>48. Fuentes alternas disponibles de gases.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="48_noAplica" name="48_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="48_bajo" name="48_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="48_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="48_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existen ó existen pero no funcionan adecuadamente; A = Existen y están en buen estado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>49. Seguridad del sistema de distribución (válvulas, tuberías y uniones).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="49_noAplica" name="49_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="49_bajo" name="49_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="49_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="49_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Si menos del 60% se encuentra en buenas condiciones de operación; M = Entre 60 y 80 %; A = Más del 80 % se encuentra en buenas condiciones, ancladas correctamente y bien ubicadas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>50. Protección de tanques y/o cilindros y equipos adicionales.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="50_noAplica" name="50_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="50_bajo" name="50_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="50_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="50_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existen áreas exclusivas para tanques y equipos adicionales; M = Áreas exclusivas para protección de tanques y equipos, pero el personal no está entrenado; A = Áreas exclusivas para este equipamiento y el personal está entrenado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>51. Seguridad apropiada de los espacios para el depósito de gases.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="51_noAplica" name="51_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="51_bajo" name="51_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="51_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="51_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existen áreas reservadas para almacén de gases; M = Áreas reservadas para almacenar gases, pero sin medidas de seguridad apropiadas; A= Se cuenta con áreas de almacenamiento adecuados y no tienen riesgos.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.1.6 SISTEMAS DE CALEFACCIÓN, VENTILACIÓN Y AIRE ACONDICIONADO EN ÁREAS CRÍTICAS (LABORATORIOS, SISTEMAS DE INFORMACION CON AMBIENTES CONTROLADOS, AUDITORIOS, ANFITEATROS, ALMACENES, ARCHIVOS, CENTRALES DE SEGURIDAD, SERVIDORES, ENTRE OTROS.)</b></h6></th>
                                               
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>52. Soportes adecuados para los ductos y revisión del movimiento de los ductos y tuberías que atraviesan juntas de dilatación.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="52_noAplica" name="52_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="52_bajo" name="52_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="52_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="52_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existen soportes y tienen juntas rígidas; M = Existen soportes o juntas pero no son flexibles; A = Existen soportes y las juntas son flexibles.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>53. Condición de tuberías, uniones, anclajes, llaves y válvulas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="53_noAplica" name="53_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="53_bajo" name="53_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="53_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="53_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = En mal estado, presentan grietas; M = Regular estado, se puede solucionar con un mantenimiento correctivo; A = Bueno estado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>54. Ubicación y seguridad apropiada de los recintos-cuartos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="54_noAplica" name="54_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="54_bajo" name="54_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="54_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="54_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Mala ubicación; M = Regular; A = Bueno.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>55. Condiciones de los anclajes de los equipos de aire acondicionado.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="55_noAplica" name="55_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="55_bajo" name="55_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="55_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="55_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = En mal estado, oxidados, desprendidos o quebrados; M = Regular estado; A = Buen estado..</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>56. Funcionamiento de los equipos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="56_noAplica" name="56_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="56_bajo" name="56_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="56_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="56_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Ej. Caldera, sistemas de aire acondicionado y extractores de olores, entre otros). B = No funciona; M = Funciona por períodos pero no cumple a cabalidad su propósito; A = Bueno.</td>
                                                </tr>
                                            </tr>
                                          <!--F2.2 Mobilidad y equipo -->
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h5><b>SECTOR EDUCATIVO, ADMINISTRATIVO Y DE APOYO</b></h5></th>
                                                
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.2 MOBILIARIO Y EQUIPO</b></h6></th>
                                                
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.2.1 MOBILIARIO Y EQUIPOS DE AULAS, AUDITORIOS, SALONES DE USOS MÚLTIPLES Y ALMACENES. (INCLUYE COMPUTADORES, IMPRESORAS, PROYECTORES, OTROS MATERIALES Y EQUIPOS DIDÁCTICOS ALMACENADOS, ENTRE OTROS.)</b></h6></th>
                                                
                                                
                                            </tr>
           
        
                                       
        
                                            
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>57. Ubicación de escritorios, pupitres, mesas de trabajo, cátedras y cátedras al podio..</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="57_noAplica" name="57_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="57_bajo" name="57_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="57_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="57_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = El mobiliario no está ubicado en un lugar adecuado; A = El mobiliario está ubicado adecuadamente y no provoca riesgos.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>58. Seguridad de contenidos y Anclajes de estantería y pizarrones..</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="58_noAplica" name="58_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="58_bajo" name="58_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="58_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="58_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = La estantería no está fijada a las paredes, ni su contenido asegurado; M = La estantería está fijada, pero el contenido no está asegurado; A = La estantería está fijada y el contenido asegurado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>59. Anclaje de computadoras, impresoras, fotocopiadoras, etc.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="59_noAplica" name="59_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="59_bajo" name="59_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="59_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="59_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que las mesas para el equipo estén aseguradas y con frenos de ruedas aplicados y anclajes para el equipo. B = No cuenta con anclajes ni frenos;      M = Cuenta sólo con frenos o sólo con anclajes y no están en buen estado; A = Bueno o no necesita anclaje.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>60. Ubicación y condición del mobiliario (archivos, libreras, bancos, sillas, equipo audiovisual, pizarrones, etc).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="60_noAplica" name="60_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="60_bajo" name="60_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="60_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="60_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando están dañados o afectan la evacuación y el funcionamiento de otros componentes o sistemas; A = Cuando no se daña o mueven y su daño es menor y no impide su funcionamiento o el de otros componentes o sistemas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>61. Condición y disposición de sillas fijas en auditorios.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="61_noAplica" name="61_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="61_bajo" name="61_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="61_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="61_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando están dañadas y no cumplen con las medidas de ancho y circulación; M = Cuando presentan un problema de los del inciso b; A = Cuando no están dañadas y su espacio de circulación cumple con la normativa de seguridad.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.2.2 EQUIPO ESPECIAL DE LABOTATORIO, SUMINISTROS UTILIZADOS PARA LOS LABORATORIOS, TALLERES Y MAQUINARIA ESPECIAL PARA TALLERES.</b></h6></th>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>62. Condición y seguridad del equipo de laboratorio.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="62_noAplica" name="62_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="62_bajo" name="62_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="62_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="62_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el equipo está en malas condiciones o no está seguro; M = Cuando el equipo está en regulares condiciones o poco seguro; A = El equipo está en buenas condiciones y está seguro.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>63. Condiciones de seguridad del equipo de seguridad personal (batas, guantes, arnés, casco, botas, lentes de protección).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="63_noAplica" name="63_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="63_bajo" name="63_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="63_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="63_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el equipo está en malas condiciones o no está seguro; M = Cuando el equipo está en regulares condiciones o poco seguro; A= El equipo está en buenas condiciones y está seguro.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>64. Anclajes de la estantería y seguridad de contenidos en laboratorios, talleres y sus almacenes.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="64_noAplica" name="64_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="64_bajo" name="64_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="64_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="64_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = 20% o menos se encuentran seguros contra el vuelco de la estantería o el vaciamiento de contenidos; M = 20 a 80 % se encuentra seguros contra el vuelco; A = Más del 80 % se encuentra con protección a la estabilidad de la estantería y la seguridad del contenido o porque no requiere anclaje.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>65. Condiciones de seguridad del equipo contra incendios (extintores).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="65_noAplica" name="65_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="65_bajo" name="65_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="65_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="65_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el equipo está en malas condiciones, no está seguro, ya se cumplió la fecha de vencimiento y no es el adecuado para el material y equipo que se encuentran en el lugar; M = Cuando su fecha de vencimiento es en menos de un mes o no es de la clase adecuada según el material y equipo del lugar; A = El equipo está en buenas condiciones, está seguro, su fecha de vencimiento no es antes de 3 meses y es de la clase que corresponde de acuerdo al material y equipo que se encuentra en el lugar.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>66. Anclajes de la maquinaria y equipo especial en talleres, laboratorios y sus almacenes.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="66_noAplica" name="66_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="66_bajo" name="66_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="66_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="66_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = 20% o menos se encuentran seguros contra el vuelco de la estantería o el vaciamiento de contenidos; M = 20 a 80 % se encuentra seguros contra el vuelco; A = Más del 80 % se encuentra con protección a la estabilidad de la estantería y la seguridad del contenido, o porque no requiere anclaje.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>67. Duchas y lavaojos especiales para laboratorios.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="67_noAplica" name="67_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="67_bajo" name="67_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="67_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="67_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existen o si existen tiene partes dañadas y por ende no cumplen con su función; A = Si cumplen con los requisitos mínimos y cumplen con su función</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.2.3 MOBILIARIO Y EQUIPO DE CAFETERÍAS, TIENDAS, COCINAS, LIBRERIAS Y SERVICIOS SANITARIOS</b></h6></th>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>68. Condición y seguridad del mobiliario y equipo en cafeterías, tiendas y cocina.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="68_noAplica" name="68_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="68_bajo" name="68_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="68_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="68_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el equipo está en malas condiciones o no está ubicado en un lugar seguro; M = Cuando el equipo está en regulares condiciones o poco seguro; A = El equipo está en buenas condiciones y está seguro.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>69. Condición y seguridad del mobiliario de almacenes de cafeterías y cocinas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="69_noAplica" name="69_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="69_bajo" name="69_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="69_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="69_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el mobiliario está en malas condiciones o no está seguro; M = Cuando el mobiliario está en regulares condiciones o poco seguro; A = El mobiliario está en buenas condiciones y está seguro.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>70. Condiciones de seguridad del equipo contra incendios (extintores especiales) en cafeterías y cocinas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="70_noAplica" name="70_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="70_bajo" name="70_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="70_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="70_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el equipo está en malas condiciones, no está seguro ó ya se cumplió la fecha de vencimiento; M = Cuando el equipo está en regulares condiciones, poco seguro y su fecha de vencimiento es en menos de un mes; A = El equipo está en buenas condiciones, está seguro y su fecha de vencimiento no es antes de 3 meses.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>71. Anclajes de la estantería y seguridad de contenidos en cafeterías y cocinas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="71_noAplica" name="71_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="71_bajo" name="71_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="71_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="71_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = 20% o menos se encuentran seguros contra el vuelco de la estantería o el vaciamiento de contenidos; M = 20 a 80 % se encuentra seguros contra el vuelco; A = Más del 80 % se encuentra con protección a la estabilidad de la estantería y la seguridad del contenido, o porque no requiere anclaje.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>72. Condición y seguridad del mobiliario, equipo e insumos de bibliotecas y librerías..</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="72_noAplica" name="72_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="72_bajo" name="72_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="72_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="72_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el equipo está en malas condiciones o no está ubicado en un lugar seguro; M = Cuando el equipo está en regulares condiciones o poco seguro;  A= El equipo está en buenas condiciones y está seguro.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>73. Condición y seguridad del mobiliario de almacenes de bibliotecas y librerías.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="73_noAplica" name="73_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="73_bajo" name="73_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="73_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="73_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el mobiliario está en malas condiciones o no está seguro; M = Cuando el mobiliario está en regulares condiciones o poco seguro; A = El mobiliario está en buenas condiciones y está seguro.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>74. Condiciones de seguridad del equipo contra incendios (extintores especiales) en biblioteca y librerías.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="74_noAplica" name="74_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="74_bajo" name="74_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="74_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="74_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el equipo está en malas condiciones, no está seguro, no es de la clase adecuada de acuerdo al equipo o material ó ya se cumplió la fecha de vencimiento; M = Cuando el equipo está en regulares condiciones, poco seguro, no es de la clase adecuada y su fecha de vencimiento es en menos de un mes; A = El equipo está en buenas condiciones, está seguro , su clase corresponde al equipo y material del área y su fecha de vencimiento no es antes de 3 meses.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>75. Anclajes de la estantería y seguridad de contenidos de librerías y bibliotecas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="75_noAplica" name="75_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="75_bajo" name="75_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="75_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="75_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = 20% o menos se encuentran seguros contra el vuelco de la estantería o el vaciamiento de contenidos; M = 20 a 80 % se encuentra seguros contra el vuelco; A = Más del 80 % se encuentra con protección a la estabilidad de la estantería y la seguridad del contenido, o porque no requiere anclaje.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>76. Condición y seguridad del mobiliario en servicios sanitarios y vestidores.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="76_noAplica" name="76_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="76_bajo" name="76_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="76_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="76_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando está en malas condiciones o no está ubicado en un lugar seguro; M = Cuando está en regulares condiciones o poco seguro; A = Está en buenas condiciones y está seguro.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>77. Normativa que rige al país</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="77_noAplica" name="77_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="77_bajo" name="77_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="77_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="77_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No se cumple con la normativa respecto a las características, tamaño, cantidad y ubicación de los extintores; M = No cumple con alguno de los elementos mencionados en el inciso anterior; A = Cumple con la normativa de país referente a característica, tamaño, cantidad y ubicación de los extintores.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.3 ELEMENTOS ARQUITECTÓNICOS</b></h6></th>
                                                
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.3.1 PUERTAS</b></h6></th>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>78. De acuerdo a la normativa del país: Ancho y abatimiento de puertas de aulas, laboratorios, auditorios, anfiteatros, servicio sanitarios, bodegas, vestidores, cafetería, gimnasios y otros ambientes (albergan más de 25 usuarios Aprox.). NSR 10. Titulo K Tabla 3.3.1; Tabla 3.3-2</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="78_noAplica" name="78_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="78_bajo" name="78_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="78_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="78_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el ancho es menor de acuerdo a la carga ocupacional y se abate hacia adentro; M = No tiene el ancho adecuado, pero se abate hacia afuera o viceversa; A = Cuando tiene el ancho correcto y se abate hacia afuera.</td>
                                                </tr>
                                            </tr>
                                                <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>79. Ancho de puertas de sector administrativo y otros ambientes que son utilizados por menos de 25 usuarios. NSR 10. Titulo K Tabla 3.3.1; Tabla 3.3-2</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="79_noAplica" name="79_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="79_bajo" name="79_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="79_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="79_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando el ancho es menor de acuerdo a la carga ocupacional; M = No tiene el ancho adecuado, pero se abate hacia afuera; A = Tiene el ancho adecuado y se abate hacia afuera..</td>
                                                </tr>
                                            </tr>
                                                <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>80. Condición y seguridad de puertas o entradas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="80_noAplica" name="80_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="80_bajo" name="80_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="80_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="80_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañadas y no es funcional; M = Se encuentran dañadas pero es funcional; A = No se encuentran dañadas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.3.2 VENTANAS</b></h6></th>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>81. Condición y seguridad de ventanales.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="81_noAplica" name="81_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="81_bajo" name="81_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="81_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="81_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no funcionan; M = Se encuentran dañadas pero funcionan; A = No se encuentran dañados</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.3.3 ACABADOS</b></h6></th>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>82. Condición y seguridad de otros elementos de cierre (muros externos, fachada, tabiques, etc.).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="82_noAplica" name="82_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="82_bajo" name="82_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="82_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="82_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no es funcional; M = Se encuentran dañadas pero es funcional; A = No se encuentran dañados.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>83. Condición y seguridad de particiones o divisiones internas</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="83_noAplica" name="83_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="83_bajo" name="83_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="83_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="83_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no es funcional; M = Se encuentran dañadas o no son funcionales; A = No se encuentran dañados.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>84. Condición y seguridad de techos y cubiertas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="84_noAplica" name="84_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="84_bajo" name="84_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="84_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="84_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no es funcional; M = Se encuentran dañadas pero es funcional; A = No se encuentran dañados.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>85. Condición y seguridad de cielos falsos o rasos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="85_noAplica" name="85_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="85_bajo" name="85_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="85_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="85_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no es funcional; M = Se encuentran dañadas pero es funcional; A = No se encuentran dañados.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>86. Condición y seguridad de acabados de pisos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="86_noAplica" name="86_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="86_bajo" name="86_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="86_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="86_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no es funcional; M = Se encuentran dañadas pero es funcional; A = No se encuentran dañados.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>87. Seguridad de acabados de pisos, escaleras y rampas para usuarios.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="87_noAplica" name="87_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="87_bajo" name="87_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="87_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="87_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No hay pisos o elementos antideslizantes; M = Los elementos antideslizantes en las áreas de circulación, rampas, gradas y en donde se maneja líquidos se encuentran dañados; A = Si hay piso o elementos antideslizantes en las áreas de circulación, escaleras, rampas y en las áreas en donde se maneja líquido.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>88. Condición y seguridad de otros elementos y cornisas</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="88_noAplica" name="88_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="88_bajo" name="88_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="88_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="88_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no es funcional; M = Se encuentran dañadas pero es funcional; A = No se encuentran dañados.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>89. Condición y seguridad del sistema de protección contra incendios.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="89_noAplica" name="89_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="89_bajo" name="89_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="89_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="89_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no es funcional; M = Se encuentran dañadas pero es funcional; A = No se encuentran dañados.</td>
                                                </tr>
                                            </tr>

                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.3.3 OBRAS COMPLEMENTARIAS</b></h6></th>
                                         </tr>
                                         <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>90. Otros elementos arquitectónicos incluyendo señales de seguridad..</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="90_noAplica" name="90_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="90_bajo" name="90_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="90_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="90_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no son funcionales; M = Se encuentran dañados o no son funcionales; A = No se encuentran dañados y si son funcionales.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>91. Condición y seguridad del sistema de extracción de olores.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="91_noAplica" name="91_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="91_bajo" name="91_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="91_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="91_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentra dañado, anclajes inadecuados o dañados, no se le ha dado mantenimiento en más de 1 año; M = Cuando presenta al menos un problema del inciso anterior; A = No está dañado o su daño es leve, se le da mantenimiento (respaldado por bitácora).</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>92. Condición y seguridad de elementos ornamentales.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="92_noAplica" name="92_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="92_bajo" name="92_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="92_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="92_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Con daño y no es funcional; M = Con daño o no es funcional; A = Cuando no está dañado o su daño es menor y no impide su funcionamiento</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>93. Juegos infantiles.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="93_noAplica" name="93_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="93_bajo" name="93_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="93_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="93_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B=con daño y no son funcionales; A = Cuando no está dañado o su daño es menor y no impide su funcionamiento</td>
                                                </tr>
                                            </tr>
                                                   <!--F3-2.4. ELEMENTOS ARQUITECTÓNICOS DE CIRCULACIÓN PEATONAL, CIRCULACIÓN VEHICULAR. -->
                                            
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>SECTOR CIRCULACIÓN </b></h6></th>
                                                
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.4. ELEMENTOS ARQUITECTÓNICOS DE CIRCULACIÓN PEATONAL, CIRCULACIÓN VEHICULAR</b></h6></th>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>94. Normativa de Reducción de Riesgos a Desastres que rige al país para barandas. NTC 4145 - 4140 y 4201</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="94_noAplica" name="94_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="94_bajo" name="94_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="94_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="94_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No se cumple con la normativa respecto a las características, altura, continuidad, espacio entre pasamanos, barras intermedias y/o se encuentran dañadas; M = No cumple con alguno de los elementos mencionados en el inciso anterior; A = Si cumple con la normativa respecto a características, altura, continuidad, espacio entre pasamanos, barras intermedias y no se encuentran dañadas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>95. Condición y seguridad de áreas de circulación peatonal externa.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="95_noAplica" name="95_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="95_bajo" name="95_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="95_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="95_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Los daños al área de circulación impiden el libre tránsito o ponen en riesgo a los peatones; M = Los daños al área de circulación no impiden el tránsito, pero ponen en riesgo a los peatones; A = No existen daños ni se pone en riesgo el libre tránsito de los peatones.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>96. Condición y seguridad de áreas de circulación para bicicletas (ciclo vías).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="96_noAplica" name="96_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="96_bajo" name="96_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="96_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="96_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Los daños a la vía o los pasadizos impide el acceso al edificio, ponen en riesgo a los peatones y ciclistas y no está señalizado; M = Los daños a la vía o los pasadizos no impiden el acceso al edificio a los peatones; A = No existen daños o su daño es menor y no impide el acceso de peatones ni de bicicletas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>97. Condición y seguridad de áreas de acceso y circulación vehicular.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="97_noAplica" name="97_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="97_bajo" name="97_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="97_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="97_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Los daños a la vía y los parqueos impide el acceso al edificio, ponen en riesgo a los peatones, no tienen el ancho adecuado y no están señalizados; M = Los daños a la vía o los parqueos no impiden el acceso al edificio a los peatones, pero sí el acceso vehicular; A = No existen daños o su daño es menor y no impide el acceso de peatones ni de vehículos.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>98. En ambientes como aulas, parqueos, entre otro, existe un espacio destinado para personas con discapacidadidentificados..</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="98_noAplica" name="98_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="98_bajo" name="98_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="98_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="98_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No hay espacio, existe el espacio pero no está identificado o es un área menor; M = Existe el espacio pero no está señalizado adecuadamente; A = Existe el espacio y está identificado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>99. Condición y seguridad de áreas de circulación peatonal interna (pasillos, pasadizos, salidas, etc.).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="99_noAplica" name="99_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="99_bajo" name="99_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="99_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="99_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Los daños a las rutas de circulación interna impiden la circulación dentro del edificio o ponen en riesgo a las personas; M = Los daños a la vía o los pasadizos no impiden la circulación de las personas, pero sí el acceso de camillas de emergencia y otros; A = No existen daños o su daño es menor y no impide la circulación de personas ni de equipos rodantes.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>100. Ancho de corredores/pasillos (de acuerdo al piso de ubicación). NSR 10. Titulo K Tabla 3.3.1; Tabla 3.3-2</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="100_noAplica" name="100_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="100_bajo" name="100_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="100_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="100_alto" name="1alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No se cumple con la normativa de ancho de corredores/pasillos requerido de acuerdo a la cantidad de usuarios; M = Se cumple con la normativa de corredores/pasillos referente al ancho requerido pero no en todos los niveles; A = Se cumple con el ancho requerido en todos los niveles.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>101. Condición y seguridad de áreas de gradas y rampas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="101_noAplica" name="101_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="101_bajo" name="101_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="101_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="101_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Los daños a las rampas y gradas impiden la circulación dentro del edificio, representan riesgo a usuarios; M = Los daños a las gradas y rampas no impiden la circulación de las personas, pero sí el acceso de camillas de emergencia y otros; A = No existen daños o su daño es menor y no impide la circulación de personas ni de equipos rodantes.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>102. Condición y seguridad de ascensores.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="102_noAplica" name="102_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="102_bajo" name="102_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="102_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="102_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando se daña e impide el funcionamiento de otros componentes o sistemas; M = Cuando se daña pero permite el funcionamiento; A = Cuando no se daña o su daño es menor y no impide su funcionamiento o el de otros componentes o sistemas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>103. Condición y seguridad de rampas para personas con discapacidad. (NTC 4143)</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="103_noAplica" name="103_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="103_bajo" name="103_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="103_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="103_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Pendiente mayor a 6%, sin descansos a cada 6 mts. máximo de longitud y es menor a un metro de ancho, entre otros y están dañadas; M = Muestra uno de los anteriores enunciados; A = Cuando la rampa cuenta con una inclinación de menos del 6% , tiene descansos, es mayor a un metro de ancho y se encuentra en buen estado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>104. Ubicación y capacidad de módulos de gradas y rampas de acuerdo a necesidad.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="104_noAplica" name="104_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="104_bajo" name="104_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="104_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="104_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = El (los) módulos de gradas no es suficiente y no está ubicado en un área adecuada; M = El (los) módulo de gradas es suficiente pero no está ubicado en un área adecuada para evacuación o viceversa; A = La ubicación y capacidad son suficientes.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>105. Ancho y dimensionamiento de gradas. NSR 10. Titulo K Tabla 3.3.1; Tabla 3.3-2</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="105_noAplica" name="105_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="105_bajo" name="105_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="105_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="105_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No se cumple con la normativa de ancho de gradas requerido de acuerdo a la cantidad de usuarios; M = Se cumple con la normativa de ancho de gradas referente al ancho requerido pero no en todos los niveles; A= Se cumple con el ancho requerido en todos los niveles.</td>
                                                </tr>
                                            </tr>
                                            <!-- F3-2.5. ELEMENTOS ARQUITECTÓNICOS DE PATIOS, CANCHAS DEPORTIVAS, PISCINA, ANFITEATROS, INSTALACIONES PARA PRÁCTICAS AGROPECUARIAS Y OTRAS.-->
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>SECTOR AL AIRE LIBRE </b></h6></th>
                                                
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-2.5. ELEMENTOS ARQUITECTÓNICOS DE PATIOS, CANCHAS DEPORTIVAS, PISCINA, ANFITEATROS, INSTALACIONES PARA PRÁCTICAS AGROPECUARIAS Y OTRAS.</b></h6></th>
                                                
                                                
                                            </tr>

                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>106. Condiciones de seguridad de barandas especialmente si protegen gradas o pasarelas o que están alrededor de canchas deportivas, piscinas, patio, instalaciones para prácticas agropecuarias.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="106_noAplica" name="106_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="106_bajo" name="106_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="106_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="106_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando se encuentran dañadas e impiden el funcionamiento de otros componentes, sistemas o funciones; M = Cuando se encuentran dañadas pero permiten el funcionamiento de otros componentes; A = Cuando no se encuentran dañados o su daño es menor y no impide su funcionamiento o el de otros componentes o sistemas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>107. Condiciones de seguridad de cercos y muros perimetrales.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="107_noAplica" name="107_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="107_bajo" name="107_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="107_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="107_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando se encuentran dañados e impiden el funcionamiento de otros componentes, sistemas o funciones; M = Cuando se encuentran dañados pero permiten el funcionamiento de otros componentes; A= Cuando no se encuentran dañados o su daño es menor y no impide su funcionamiento o el de otros componentes o sistemas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>108. Condición de seguridad de elementos ornamentales exteriores (Jardineras, estatuas, relieves, etc.)</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="108_noAplica" name="108_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="108_bajo" name="108_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="108_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="108_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando se encuentran dañados e impiden el funcionamiento de otros componentes, sistemas o funciones; M = Cuando se encuentran dañados pero permiten el funcionamiento de otros componentes; A = Cuando no se encuentran dañados o su daño es menor y no impide su funcionamiento o el de otros componentes o sistemas.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>109. Condición y seguridad de otros elementos arquitectónicos (espacios recreativos), rótulos de señalización de seguridad, personas con discapacidad, puntos de reunión, rutas de evacuación, entre otros..</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="109_noAplica" name="109_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="109_bajo" name="109_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="109_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="109_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Con daño y no cumplen su propósito; M = Con daño, pero permite el funcionamiento; A = Cuando no está dañado o su daño es menor y no impide su funcionamiento.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>110. Condición y seguridad de acabados o cubierta de pisos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="110_noAplica" name="110_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="110_bajo" name="110_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="110_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="110_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Se encuentran dañados y no funcionan; M = Se encuentran dañados pero funcionan; A = No se encuentran dañados.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>111. Condición y seguridad de portones de ingreso y egreso.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="111_noAplica" name="111_noAplica" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="111_bajo" name="111_bajo" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="111_medio" name="medio1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="111_alto" name="alto1" onchange="calculo2()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando se encuentran y ya no cumplen su función; M = Cuando se encuentran dañados pero todavía cumplen su función; A = Cuando no se encuentran dañados o su daño es menor.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>INDICE DE SEGURIDAD (NO ESTRUCTURAL)</b></h6></th>
                                                <td colspan="4"><input type="text" id="res2" name="res2" style="width: 100%; height: 50px; color: #DF0100" readonly></td>
        
                                            </tr>
                                        </tbody>                 
                                        <br><br><br>
                                    
                                    <!--F3-3. EVALUACIÓN DE LA SEGURIDAD (FUNCIONAL)-->
                                    <table id="exampl   e" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h5><b>F3-3. EVALUACIÓN DE LA SEGURIDAD (FUNCIONAL)</b></h5></th>
                                                <td rowspan="2" style="text-align: center; width: 110px; background-color: #B2BEC6  ; color: black"><h7><b>NO APLICABLE O NO DISPONIBLE</b></h7></td>
                                                <td colspan="3" style="text-align: center; width: 280px; background-color: #B2BEC6  ; color: black"><h7><b><br>GRADO DE SEGURIDAD</b></h7></td>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-3.1 ORGANIZACIÓN DEL COMITÉ DE EMERGENCIAS.</b></h6></th>
                                                <th style="text-align: center; width: 100px; color:black; background-color:  #FD4E48"><b>BAJO</b></th>
                                                <th style="text-align: center; width: 100px; color:black; background-color: #FDD854"><b>MEDIO</b</th>
                                                <th style="text-align: center; width: 100px; color:black; background-color: #03DC67"><b>ALTO</b></th>
                                            </tr>
                                   
           
        
                                        </thead>
                                    </table>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <tbody>
        
                                            
                                            <tr>|
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>112. Comité formalmente establecido para responder a las emergencias o desastres. Solicitar el acta constitutiva del Comité y verificar que los cargos y firmas correspondan al personal en función</b></h7></td>
                                                    <th rowspan="2" style="width: 28px"><input type="text" id="112_noAplica" name="112_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2" style="width: 28px"><input type="text" id="112_bajo" name="112_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2" style="width: 28px"><input type="text" id="112_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2" style="width: 28px"><input type="text" id="112_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existe comité; M = Existe el comité pero no es operativo; A = Existe y es operativo. Protocolo de áreas críticas del edificio.</td>
                                                </tr>
              
                                            </tr>

                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>113. El Comité está conformado por personal multidisciplinario.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="113_noAplica" name="113_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="113_bajo" name="113_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="113_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="113_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que los cargos dentro del comité sean ejercidos por personal de diversas categorías del equipo multidisciplinario: decano o director, secretario adjunto, directores de carreras, mantenimiento, jefe de personal, jefe de laboratorio y servicios auxiliares, docentes, estudiantes, entre otros. B = 0 - 3; M = 4 - 5; A = 6 o más.</td>
                                                </tr>
                                            </tr>
                                           
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>114. Cada miembro tiene conocimiento de sus responsabilidades específicas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="114_noAplica" name="114_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="114_bajo" name="114_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="114_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="114_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que cuenten con sus tarjetas de actividades, protocolos o procedimientos por escrito dependiendo de su función específica. B = No asignadas; M = Asignadas oficialmente; A = Todos los miembros conocen y cumplen su responsabilidad.</td>
                                                </tr>
                                            </tr>
                                           
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>115. Está asignado un espacio físico para el centro de operaciones de emergencia (COE) de la Institución de Educación Superior.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="115_noAplica" name="115_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="115_bajo" name="115_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="115_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="115_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que la sala cuente con todos los medios de comunicación (teléfono, fax, Internet, entre otros). B = No existe; M = Asignada oficialmente; A = Existe y es funcional.</td>
                                                </tr>
                                            </tr>
                                           
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>116. El COE está ubicado en un área protegida y segura.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="116_noAplica" name="116_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="116_bajo" name="116_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="116_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="116_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = La sala del COE no está en un área segura y/o accesible; M = EL COE está en un área segura pero poco accesible; A = El COE está en un área segura, protegida y accesible..</td>
                                                </tr>
                                            </tr>
                                           
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>117. El COE cuenta con sistema informático y computadoras.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="117_noAplica" name="117_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="117_bajo" name="117_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="117_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="117_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar si cuenta con intranet e internet. B = No; M = Parcialmente; A = Cuenta con todos los requerimientos.</td>
                                                </tr>
                                            </tr>
                                           
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>118. El sistema de comunicación interna y externa del COE funciona adecuadamente.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="118_noAplica" name="118_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="118_bajo" name="118_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="118_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="118_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar si el conmutador (central de redistribución de llamadas) cuenta con sistema de perifoneo y si los operadores conocen el código de alerta y su funcionamiento. B = No funciona/ no existe; M = Parcialmente; A = Completo y funciona.</td>
                                                </tr>
                                            </tr>
                                           
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>119. El COE cuenta con sistema de comunicación alterna.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="119_noAplica" name="119_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="119_bajo" name="119_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="119_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="119_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar si además de conmutador existe comunicación alterna como celular satelital, radio, entre otros; B = No cuenta; M = Parcialmente; A = Si cuenta.</td>
                                                </tr>
                                            </tr>
                                           
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>120. El COE cuenta con mobiliario y equipo apropiado.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="120_noAplica" name="120_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="120_bajo" name="120_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="120_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="120_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar escritorios, sillas, tomas de corriente, iluminación, agua y drenaje. B = No cuenta; M = Parcialmente; A = Si cuenta.</td>
                                                </tr>
                                            </tr>
                                           
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>121. El COE cuenta con directorio telefónico actualizado y disponible.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="121_noAplica" name="121_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="121_bajo" name="121_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="121_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="121_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que el directorio incluya todos los servicios de apoyo necesarios ante una emergencia (corroborar teléfonos en forma aleatoria). B = No cuenta con directorio telefónico; M = Existe pero no está actualizado; A = Si cuenta y está actualizado (revisar números telefónicos en forma aleatoria).</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-3.2. PLANES DE RESPUESTA</b></h6></th>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>122. Procedimientos para la activación y desactivación del plan de respuesta.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="122_noAplica" name="122_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="122_bajo" name="122_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="122_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="122_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Se especifica cómo, cuándo y quién es el responsable de activar y desactivar el plan. B = No existe o existe únicamente el documento; M = Existe el Plan y el personal capacitado; A = Existe el plan, personal capacitado y cuenta con recursos para implementar el plan.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>123. Mecanismos administrativos especiales para respuesta a desastres.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="123_noAplica" name="123_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="123_bajo" name="123_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="123_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="123_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que el plan considere contratación de personal y adquisiciones en caso de desastrea través de mecanismos administrativos viables etc. B = No existen los mecanismos administrativos; M = Existen mecanismos administrativos; A = Existen mecanismos administrativos, personal capacitado y cuenta con recursos para implementarlas.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>124. Recursos financieros para emergencias presupuestados y garantizados.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="124_noAplica" name="124_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="124_bajo" name="124_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="124_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="124_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>La IES cuenta con presupuesto específico para aplicarse en caso de desastre. B = No presupuestado; M = Cubre parcialmente durante un desastre; A = Garantiza la recuperación después del desastre.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>125. Procedimientos para habilitación de espacios (áreas de expansión) para atender al personal, estudiantes o visitantes que puedan resultar lesionados.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="125_noAplica" name="125_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="125_bajo" name="125_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="125_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="125_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Incluye personal de otras universidades cercanas y albergue. Aplica para las edificaciones que brindan algún tipo de atención a salud como carreras de medicina, servicios de salud, etc. De lo contrario marque no aplica. B = No se encuentran identificadas las áreas de expansión; M = Se han identificado las áreas de expansión y el personal capacitado para implementarlos; A = Existe el procedimiento, personal capacitado y cuenta con recursos para implementar los procedimientos.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>126. Procedimientos para protección de expedientes administrativos físicos y digitales, estudiantiles y del personal.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="126_noAplica" name="126_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="126_bajo" name="126_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="126_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="126_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>El plan indica la forma en que deben ser tratados los expedientes; B = No existe el procedimiento; M = Existe el procedimiento y el personal entrenado; A = Existe el procedimiento, personal capacitado y cuenta con recursos para implementarlo.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>127. Inspección regular de seguridad por la autoridad competente.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="127_noAplica" name="127_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="127_bajo" name="127_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="127_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="127_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>En recorrido por el edificio verificar la fecha de caducidad y/o llenado de extintores y funcionamiento de hidrantes. Y si existe referencia del llenado de los mismos así como bitácora de visitas por el personal de protección civil o del cuerpo de bomberos. B = No existe; M = Inspección parcial o sin vigencia; A = Completa y actualizada.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>128. Transporte y soporte logístico.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="128_noAplica" name="128_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="128_bajo" name="128_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="128_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="128_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>La institución cuenta con ambulancias o vehículos. B = No cuenta con ambulancias y otros vehículos para soporte logístico; M = Cuenta con vehículos insuficientes; A= Cuenta con vehículos adecuados y en cantidad suficiente.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>129. El plan del edificio o Unidad Académico-Administrativa está integrado al plan de emergencias institucional, municipal y al Plan Nacional. Existe antecedente por escrito de la vinculación del plan a otras instancias de la institución y comunidad.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="129_noAplica" name="129_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="129_bajo" name="129_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="129_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="129_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No vinculado; M = Vinculado no operativo; A = Vinculado y operativo.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>130. Mecanismos para elaborar el registro de personal, de estudiantes y visitantes, formularios para registro del destino de personas referidas a centros de atención.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="130_noAplica" name="130_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="130_bajo" name="130_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="130_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="130_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>El plan cuenta con formatos específicos que faciliten el registro de personas afectadas ante las emergencias. B = No Existe el mecanismo; M = Existe el mecanismo pero no se conoce; A= Existe el mecanismo y el personal capacitado.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>131. Procedimientos para evacuación de la edificación.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="131_noAplica" name="131_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="131_bajo" name="131_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="131_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="131_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar si existe plan o procedimientos para evacuación de personal, estudiantes y visitantes. B = No existe el procedimiento; M = Existe el procedimiento pero el personal no está capacitado; A = Existe el procedimiento y el personal capacitado.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>132. Las rutas de emergencia y salida son accesibles.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="132_noAplica" name="132_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="132_bajo" name="132_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="132_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="132_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que las rutas de salida están claramente marcadas y libres de obstrucción. B = Las rutas de salida no están claramente señalizadas y varias están bloqueadas; M = Algunas rutas de salida están marcadas y la mayoría están libres de obstrucciones; A = Todas las rutas están claramente marcadas y libres de obstrucciones.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>133. Señalización de equipos contra incendios.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="133_noAplica" name="133_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="133_bajo" name="133_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="133_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="133_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Se debe verificar que exista la señalización contra incendios en la edificación, la cual debe indicar la ubicación de extinguidores, mangueras, gabinetes contra incendio o algún otro sistema para combatir el incendio. B = Existe pero no cumple con su función o está deteriorada; M = Existe la señalización pero presenta uno de los dos problemas anteriores; A = El equipo está señalizado correctamente.</td>
                                                </tr>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>134. Ejercicios de simulación o simulacros en todas las jornadas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="134_noAplica" name="134_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="134_bajo" name="134_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="134_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="134_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que los planes sean puestos a prueba regularmente mediante simulacros o simulaciones, evaluados y modificados como corresponda. B = Los planes no son puestos a prueba; M = Los planes son puestos a prueba con una frecuencia mayor a un año; A = Los planes son puestos a prueba al menos una vez al año y son actualizados de acuerdo a los resultados de los ejercicios.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-3.3. PROTOCOLOS DE EMERGENCIAS</b></h6></th>
                                                 </tr>

                                                 <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>135. “Protocolos por actividad” disponibles para todo el personal.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="135_noAplica" name="135_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="135_bajo" name="135_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="135_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="135_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que los protocolos por actividad indiquen las funciones que realiza cada persona del edificio o unidad académico-administrativa, especificando su participación en caso de desastre interno y/o externo. B = No existen protocolos o existen únicamente en el documento; M = Existen Protocolos y el personal está capacitado; A = Existen protocolos, personal capacitado y cuenta con recursos para implementarlos.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>136. Protocolos de áreas críticas del edificio.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="136_noAplica" name="136_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="136_bajo" name="136_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="136_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="136_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>El documento especifica las actividades que se deben realizar antes, durante y después de un desastre en los servicios claves del edificio (servicio de laboratorios, unidades de manejo de materiales peligrosos, etc.); B = No existe protocolo o existe únicamente el documento; M = Existe el protocolo y el personal capacitado; A = Existe el protocolo, personal capacitado y cuenta con recursos para implementarlo.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>137. Procedimientos de información al público, la prensa y familiares.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="137_noAplica" name="137_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="137_bajo" name="137_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="137_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="137_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>El plan institucional para caso de desastre especifica quien es la persona responsable para dar información a público y prensa en caso de desastre. (SCI: la persona de mayor jerarquía en el momento del desastre): B = No existe el procedimiento; M = Existe el procedimiento y el personal capacitado; A = Existe el procedimiento, el personal capacitado y se cuenta con recursos para implementarlo.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-3.4. PROTOCOLOS DE MANTENIMIENTO</b></h6></th>
                                                 </tr>
                                                 <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>138. Protocolo de mantenimiento continuo, preventivo y correctivo para líneas vitales (electricidad, red de agua y drenajes).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_138_noAplica" name="f3_3_4_1_138_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_138_bajo" name="f3_3_4_1_138_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_138_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_138_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existe protocolo; M = Existe protocolo pero el personal no está capacitado; A = Existe el protocolo y el personal está capacitado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>139. Protocolo de manejo de sustancias peligrosas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_139_noAplica" name="f3_3_4_1_139_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_139_bajo" name="f3_3_4_1_139_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_139_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_139_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existe protocolo; M = Existe protocolo pero el personal no está capacitado; A = Existe el protocolo y el personal está capacitado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>140. Sistemas habituales y alternos de comunicación.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_140_noAplica" name="f3_3_4_1_140_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_140_bajo" name="f3_3_4_1_140_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_140_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_140_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existe protocolo; M = Existe protocolo pero el personal no está capacitado; A = Existe el protocolo y el personal está capacitado</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>141. Sistema de manejo de residuos sólidos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_141_noAplica" name="f3_3_4_1_141_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_141_bajo" name="f3_3_4_1_141_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_141_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_141_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existe protocolo para el manejo de residuos sólidos; M = Existe protocolo pero el personal no está capacitado; A = Existe el protocolo y el personal está capacitado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>142. Sistema de manejo de residuos sólidos tóxicos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_142_noAplica" name="f3_3_4_1_142_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_142_bajo" name="f3_3_4_1_142_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_142_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_142_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>El área de mantenimiento deberá presentar el manual de manejo de residuos sólidos tóxicos, así como bitácora de recolección y manejo posterior. B = No existe protocolo; M = Existe protocolo pero el personal no está capacitado; A = Existe el protocolo y el personal está capacitado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>143. Mantenimiento del sistema contra incendios.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_143_noAplica" name="f3_3_4_1_143_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_143_bajo" name="f3_3_4_1_143_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_143_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_4_1_143_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>El área de mantenimiento debe presentar el manual para el manejo de sistemas contra incendios, así como la bitácora de mantenimiento preventivo de extintores e hidrantes. B = No existe protocolo; M = Existe protocolo pero el personal no está capacitado; A = Existe el protocolo y el personal está capacitado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-3.5. DISPONIBILIDAD DE KIT O BOTIQUÍN DE PRIMEROS AUXILIOS POR FACULTAD Y ÁREA ADMINISTRATIVA PARA ATENDER EMERGENCIAS Y DESASTRES</b></h6></th>
                                                 </tr>
                                                 <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>144. Medicamentos disponibles para emergencias.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_144_noAplica" name="f3_3_5_1_144_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_144_bajo" name="f3_3_5_1_144_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_144_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_144_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existe; M = Cubre menos de 72 horas; A = Garantizado para 72 horas o más.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>145. Material de curación y otros insumos.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_145_noAplica" name="f3_3_5_1_145_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_145_bajo" name="f3_3_5_1_145_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_145_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_145_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>Verificar que exista un botiquín para cualquier emergencia. B = No existe; M = Existe pero no está equipado adecuadamente; A = Existe y está equipado. (Se toman como referencia la cantidad de personal, estudiantes y visitantes expuestos).</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>146. Equipos de protección personal para desastres (material desechable).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_146_noAplica" name="f3_3_5_1_146_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_146_bajo" name="f3_3_5_1_146_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_146_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_146_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>El edificio debe contar con equipos de  para el personal que labore en laboratorios o áreas específicas. B = No existe; M = Cubre menos de la mitad del personal que labora en áreas específicas o laboratorios; A = garantizado el equipo para todos los usuarios.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>147. Existencia de duchas para lavado de personas contaminadas o afectadas con substancias peligrosas.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_147_noAplica" name="f3_3_5_1_147_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_147_bajo" name="f3_3_5_1_147_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_147_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_5_1_147_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existe; M = Cubre menos de la cantidad de personal expuestos; A= garantizado para todos los expuestos.</td>
                                                </tr>
                                            </tr>

                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>F3-3.6. CAPACIDAD INSTALADA PARA LA SEGURIDAD FUNCIONAL Y DE GRUPOS CON DISCAPACIDAD</b></h6></th>
                                                 </tr>
                                                 <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>148. Capacidad de carga viva de las aulas de acuerdo a la normativa de cada país.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_148_noAplica" name="f3_3_6_1_148_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_148_bajo" name="f3_3_6_1_148_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_148_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_148_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = El área por estudiante en un aula es igual o menor a 1 m²; M = El área por estudiante es mayor a 1m2 y menor a lo estipulado en la normativa de país; A = El espacio por estudiante es igual o mayor a la normativa del país.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>149. Capacidad de los servicios sanitarios.</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_149_noAplica" name="f3_3_6_1_149_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_149_bajo" name="f3_3_6_1_149_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_149_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_149_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Existe menos de un inodoro por cada 20 mujeres y/o 30 hombres; M = Existe menos de un inodoro por cada 30 mujeres y/o 50 hombres; A = Existe un inodoro por cada 30 mujeres y/o 50 hombres.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>150. Rampas para personas con discapacidad (limitaciones de movilidad, embarazadas o adultos mayores).</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_150_noAplica" name="f3_3_6_1_150_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_150_bajo" name="f3_3_6_1_150_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_150_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_150_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Cuando la pendiente es mayor a 6%, no tiene descansos cada seis metros máximo de longitud, es menor a 1.30 metros de ancho, y se encuentran dañadas; M = Presenta una de las condiciones antes enunciadas; A = Cuando la rampa cuenta con una pendiente menor del 6%, tiene descansos cada seis metros máximo de longitud, tiene ancho de 1.30m mínimo, tiene pasamanos de 0.90 metros de altura y se encuentra en buen estado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>151. Normativa para espacios y parqueos para personas con discapacidad debidamente señalizados. DECRETO 321 DE 1992</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_151_noAplica" name="f3_3_6_1_151_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_151_bajo" name="f3_3_6_1_151_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_151_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_151_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = No existe el espacio o es un área menor de 5.0 mts x 3.30 mts en espacios abiertos y de 6-0 mts x 3.50 mts en marquesinas o garajes; M = Existe el espacio con las dimensiones adecuadas, pero no está señalizado; A = Existe el espacio con las dimensiones adecuadas y está señalizado.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: left; width: 100%;  background-color: #B2BEC6  ; color: black"><h7><b>152. Normativa para servicios sanitarios para personas con discapacidad. RESOLUCIÓN No 14 861 DEL 4 DE OCTUBRE DE 1985</b></h7></td>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_152_noAplica" name="f3_3_6_1_152_noAplica" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #B2BEC6"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_152_bajo" name="f3_3_6_1_152_bajo" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color:  #FD4E48"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_152_medio" name="medio2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #FDD854"></th>
                                                    <th rowspan="2"><input type="text" id="f3_3_6_1_152_alto" name="alto2" onchange="calculo3()" style="text-align: center; width: 81px; height: 100px; color:black; background-color: #03DC67"></th>
                                                </tr>
                                                <tr>
                                                    <td type="text" id="seguridadCiudadana1" name="seguridadCiudadana1" style="width: 613px; text-align: left;" readonly>B = Si existen pero no se aplica para todos los artefactos, no cumple con las dimensiones requeridas para ancho o alto o son insuficientes para atender la demanda; M = Muestra uno de los anteriores enunciados; A = Si cumple con los requisitos mínimos y se aplica para todos los artefactos sanitarios.</td>
                                                </tr>
                                            </tr>
                                            <tr>
                                                <th colspan="5" style="text-align: center; background-color:#C0D8E7"><h6><b>ÍNDICE DE SEGURIDAD (FUNCIONAL)</b></h6></th>
                                                <td colspan="4"><input type="text" id="res3" name="res3" style="width: 100%; height: 50px; color: #DF0100" readonly></td>
        
                                            </tr>
                                            </tbody>

        </div>

    @endSection