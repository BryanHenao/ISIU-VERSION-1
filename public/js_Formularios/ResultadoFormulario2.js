function calculoFinal(){
var total=0;


document.getElementById('resumenPromedio').value=((parseFloat( document.getElementById('TotalInteraccion').value)+parseFloat( document.getElementById('TotalBioclimatico').value)+
parseFloat( document.getElementById('totalInstitucional').value)+parseFloat( document.getElementById('totalGeologia').value)+parseFloat( document.getElementById('totalEcosistema').value)
+parseFloat( document.getElementById('TotalConstruido').value))/6).toFixed(2);
total=parseFloat(document.getElementById('resumenPromedio').value);

if(total>2.60){
    document.getElementById('resumenCalificacion').value="Bajo";
    document.getElementById('resumenDescripcion').value="Riesgo Bajo";

}else if(total>=2.10 && total<=2.55){

    document.getElementById('resumenCalificacion').value="Medio";
    document.getElementById('resumenDescripcion').value="Riesgo Medio";

}else if(total>=1.60 && total<=2){

    document.getElementById('resumenCalificacion').value="Alto";
    document.getElementById('resumenDescripcion').value="Riesgo Alto";

}else if(total<=1.50){

    document.getElementById('resumenCalificacion').value="Muy alto";
    document.getElementById('resumenDescripcion').value="Riesgo Muy alto";

}

}