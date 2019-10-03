/**CALCULOS Institucional 1 */
function calcularF_Institucional(){

    var total=0;

    if(document.getElementById('conflictosTerritoriales1').value=="" && document.getElementById('seguridadCiudadana1').value=="" && document.getElementById('marcoLegal1').value==""){
        document.getElementById('fpInstitucional3').value="";
    }else{
        if(eval(document.getElementById('conflictosTerritoriales1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('seguridadCiudadana1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('marcoLegal1').value)==1){
            total=total+1;
        }
       

        document.getElementById('fpInstitucional3').value=eval(total);
    }

}   

function calcularExPxF_Institucional(){
    var total=0;
    if(document.getElementById('fpInstitucional3').value!==""){
        total= (document.getElementById('fpInstitucional3').value)*1*3;
        document.getElementById('expxfInstitucional3').value=eval(total);
    }else{
        document.getElementById('expxfInstitucional3').value="";
    }

}

function calcularPxP_Institucional(){
    var total=0;
    if(document.getElementById('fpInstitucional3').value!==""){
        total= (document.getElementById('fpInstitucional3').value)*3;
        document.getElementById('pxfInstitucional3').value=eval(total);
    }else{
        document.getElementById('pxfInstitucional3').value="";
    }
}

/**CALCULOS Institucional 2 */
function calcularF_Institucional2(){

    var total=0;

    if(document.getElementById('conflictosTerritoriales2').value=="" && document.getElementById('seguridadCiudadana2').value=="" && document.getElementById('marcoLegal2').value==""){
        document.getElementById('fpInstitucional2').value="";
    }else{

        if(eval(document.getElementById('conflictosTerritoriales2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('seguridadCiudadana2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('marcoLegal2').value)==1){
            total=total+1;
        }
       

        document.getElementById('fpInstitucional2').value=eval(total);
    }

}

function calcularExPxF_Institucional2(){
    var total=0;
    if(document.getElementById('fpInstitucional2').value!==""){
        total= (document.getElementById('fpInstitucional2').value)*2*2;
        document.getElementById('expxfInstitucional2').value=eval(total);
    }else{
        document.getElementById('expxfInstitucional2').value="";
    }

}

function calcularPxP_Institucional2(){
    var total=0;
    if(document.getElementById('fpInstitucional2').value!==""){
        total= (document.getElementById('fpInstitucional2').value)*2;
        document.getElementById('pxfInstitucional2').value=eval(total);
    }else{
        document.getElementById('pxfInstitucional2').value="";
    }
}

/**CALCULOS Institucional 3 */
function calcularF_Institucional3(){

    var total=0;

    if(document.getElementById('conflictosTerritoriales3').value=="" && document.getElementById('seguridadCiudadana3').value=="" && document.getElementById('marcoLegal3').value==""){
        document.getElementById('fpInstitucional1').value="";
    }else{

        if(eval(document.getElementById('conflictosTerritoriales3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('seguridadCiudadana3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('marcoLegal3').value)==1){
            total=total+1;
        }
       

        document.getElementById('fpInstitucional1').value=eval(total);
    }

}

function calcularExPxF_Institucional3(){
    var total=0;
    if(document.getElementById('fpInstitucional1').value!==""){
        total= (document.getElementById('fpInstitucional1').value)*1*3;
        document.getElementById('expxfInstitucional1').value=eval(total);
    }else{
        document.getElementById('expxfInstitucional1').value="";
    }

}

function calcularPxP_Institucional3(){
    var total=0;
    if(document.getElementById('fpInstitucional1').value!==""){
        total= (document.getElementById('fpInstitucional1').value)*1;
        document.getElementById('pxfInstitucional1').value=eval(total);
    }else{
        document.getElementById('pxfInstitucional1').value="";
    }
}

/**Sumatoria Institucional */
function sumatoria_Institucional_expx(){

    if(((document.getElementById('expxfInstitucional3').value))==null || ((document.getElementById('expxfInstitucional3').value))==""){
        (document.getElementById('expxfInstitucional3').value)=0;
    }
    if(((document.getElementById('expxfInstitucional2').value))==null || ((document.getElementById('expxfInstitucional2').value))==""){
        (document.getElementById('expxfInstitucional2').value)=0;
    }
    if(((document.getElementById('expxfInstitucional1').value))==null || ((document.getElementById('expxfInstitucional1').value))==""){
        (document.getElementById('expxfInstitucional1').value)=0;
    }

    document.getElementById('sumatoriaInstitucionalExPxF').value=(parseFloat(document.getElementById('expxfInstitucional3').value))
    +(parseFloat(document.getElementById('expxfInstitucional2').value))
    +(parseFloat(document.getElementById('expxfInstitucional1').value));
    
}

function sumatoria_Institucional_pxf(){

    if(((document.getElementById('pxfInstitucional3').value))==null || ((document.getElementById('pxfInstitucional3').value))==""){
        (document.getElementById('pxfInstitucional3').value)=0;
    }
    if(((document.getElementById('pxfInstitucional2').value))==null || ((document.getElementById('pxfInstitucional2').value))==""){
        (document.getElementById('pxfInstitucional2').value)=0;
    }
    if(((document.getElementById('pxfInstitucional1').value))==null || ((document.getElementById('pxfInstitucional1').value))==""){
        (document.getElementById('pxfInstitucional1').value)=0;
    }

    document.getElementById('sumatoriaInstitucionalPxF').value=(parseFloat(document.getElementById('pxfInstitucional1').value))
    +(parseFloat(document.getElementById('pxfInstitucional2').value))
    +(parseFloat(document.getElementById('pxfInstitucional3').value));
    
}

function totalInstitucional(){
    document.getElementById('totalInstitucional').value=((parseFloat(document.getElementById('sumatoriaInstitucionalExPxF').value))
    /(parseFloat(document.getElementById('sumatoriaInstitucionalPxF').value))).toFixed(2);
    document.getElementById('evaluacionInstitucional').value=eval( document.getElementById('totalInstitucional').value).toFixed(2);
}