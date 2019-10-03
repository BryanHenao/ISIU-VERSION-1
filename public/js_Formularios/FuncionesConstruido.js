/**CALCULOS Construido 1 */
function calcularF_Construido(){

    var total=0;

    if(document.getElementById('usoSuelo1').value=="" && document.getElementById('accesibilidad1').value=="" && document.getElementById('accesoServicios1').value=="" && document.getElementById('areasComunes1').value=="" && document.getElementById('exposicionCarreteras1').value==""){
        document.getElementById('fpConstruido3').value="";
    }else{
        if(eval(document.getElementById('exposicionCarreteras1').value)==1){
            total=total+1;
        }else{
            document.getElementById('exposicionCarreteras2').disabled=false;
        }
        if(eval(document.getElementById('areasComunes1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('accesoServicios1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('accesibilidad1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('usoSuelo1').value)==1){
            total=total+1;
        }

        document.getElementById('fpConstruido3').value=eval(total);
    }

}   

function calcularExPxF_Construido(){
    var total=0;
    if(document.getElementById('fpConstruido3').value!==""){
        total= (document.getElementById('fpConstruido3').value)*1*3;
        document.getElementById('expxfConstruido3').value=eval(total);
    }else{
        document.getElementById('expxfConstruido3').value="";
    }

}

function calcularPxP_Construido(){
    var total=0;
    if(document.getElementById('fpConstruido3').value!==""){
        total= (document.getElementById('fpConstruido3').value)*3;
        document.getElementById('pxfConstruido3').value=eval(total);
    }else{
        document.getElementById('pxfConstruido3').value="";
    }
}

/**CALCULOS Construido 2 */
function calcularF_Construido2(){

    var total=0;

    if(document.getElementById('usoSuelo2').value=="" && document.getElementById('accesibilidad2').value=="" && document.getElementById('accesoServicios2').value=="" && document.getElementById('areasComunes2').value=="" && document.getElementById('exposicionCarreteras2').value==""){
        document.getElementById('fpConstruido2').value="";
    }else{

        if(eval(document.getElementById('exposicionCarreteras2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('areasComunes2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('accesoServicios2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('accesibilidad2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('usoSuelo2').value)==1){
            total=total+1;
        }

        document.getElementById('fpConstruido2').value=eval(total);
    }

}

function calcularExPxF_Construido2(){
    var total=0;
    if(document.getElementById('fpConstruido2').value!==""){
        total= (document.getElementById('fpConstruido2').value)*2*2;
        document.getElementById('expxfConstruido2').value=eval(total);
    }else{
        document.getElementById('expxfConstruido2').value="";
    }

}

function calcularPxP_Construido2(){
    var total=0;
    if(document.getElementById('fpConstruido2').value!==""){
        total= (document.getElementById('fpConstruido2').value)*2;
        document.getElementById('pxfConstruido2').value=eval(total);
    }else{
        document.getElementById('pxfConstruido2').value="";
    }
}

/**CALCULOS Construido 3 */
function calcularF_Construido3(){

    var total=0;

    if(document.getElementById('usoSuelo3').value=="" && document.getElementById('accesibilidad3').value=="" && document.getElementById('accesoServicios3').value=="" && document.getElementById('areasComunes3').value=="" && document.getElementById('exposicionCarreteras3').value==""){
        document.getElementById('fpConstruido1').value="";
    }else{

        if(eval(document.getElementById('exposicionCarreteras3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('areasComunes3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('accesoServicios3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('accesibilidad3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('usoSuelo3').value)==1){
            total=total+1;
        }

        document.getElementById('fpConstruido1').value=eval(total);
    }

}

function calcularExPxF_Construido3(){
    var total=0;
    if(document.getElementById('fpConstruido1').value!==""){
        total= (document.getElementById('fpConstruido1').value)*1*3;
        document.getElementById('expxfConstruido1').value=eval(total);
    }else{
        document.getElementById('expxfConstruido1').value="";
    }

}

function calcularPxP_Construido3(){
    var total=0;
    if(document.getElementById('fpConstruido1').value!==""){
        total= (document.getElementById('fpConstruido1').value)*1;
        document.getElementById('pxfConstruido1').value=eval(total);
    }else{
        document.getElementById('pxfConstruido1').value="";
    }
}

/**Sumatoria Construido */
function sumatoria_Construido_expx(){

    if(((document.getElementById('expxfConstruido3').value))==null || ((document.getElementById('expxfConstruido3').value))==""){
        (document.getElementById('expxfConstruido3').value)=0;
    }
    if(((document.getElementById('expxfConstruido2').value))==null || ((document.getElementById('expxfConstruido2').value))==""){
        (document.getElementById('expxfConstruido2').value)=0;
    }
    if(((document.getElementById('expxfConstruido1').value))==null || ((document.getElementById('expxfConstruido1').value))==""){
        (document.getElementById('expxfConstruido1').value)=0;
    }

    document.getElementById('sumatoriaConstruidoExPxF').value=(parseFloat(document.getElementById('expxfConstruido3').value))
    +(parseFloat(document.getElementById('expxfConstruido2').value))
    +(parseFloat(document.getElementById('expxfConstruido1').value));
    
}

function sumatoria_Construido_pxf(){

    if(((document.getElementById('pxfConstruido3').value))==null || ((document.getElementById('pxfConstruido3').value))==""){
        (document.getElementById('pxfConstruido3').value)=0;
    }
    if(((document.getElementById('pxfConstruido2').value))==null || ((document.getElementById('pxfConstruido2').value))==""){
        (document.getElementById('pxfConstruido2').value)=0;
    }
    if(((document.getElementById('pxfConstruido1').value))==null || ((document.getElementById('pxfConstruido1').value))==""){
        (document.getElementById('pxfConstruido1').value)=0;
    }

    document.getElementById('sumatoriaConstruidoPxF').value=(parseFloat(document.getElementById('pxfConstruido1').value))
    +(parseFloat(document.getElementById('pxfConstruido2').value))
    +(parseFloat(document.getElementById('pxfConstruido3').value));
    
}

function totalConstruido(){
    document.getElementById('TotalConstruido').value=((parseFloat(document.getElementById('sumatoriaConstruidoExPxF').value))
    /(parseFloat(document.getElementById('sumatoriaConstruidoPxF').value))).toFixed(2);
    document.getElementById('evaluacionMedioConstruido').value=eval( document.getElementById('TotalConstruido').value).toFixed(2);
}