
/**CALCULOS BIOCLIMATICO 1 */
function calcularF_Bioclimatico(){

    var total=0;

    if(document.getElementById('calidadAire1').value=="" && document.getElementById('ruidos1').value=="" && document.getElementById('precipitacion1').value=="" && document.getElementById('vht1').value=="" && document.getElementById('cHidrogenico1').value==""){
        document.getElementById('fpBioclimatico3').value="";
    }else{
        if(eval(document.getElementById('cHidrogenico1').value)==1){
            total=total+1;
        }else{
            document.getElementById('cHidrogenico2').disabled=false;
        }
        if(eval(document.getElementById('vht1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('precipitacion1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('ruidos1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('calidadAire1').value)==1){
            total=total+1;
        }

        document.getElementById('fpBioclimatico3').value=eval(total);
    }

}   

function calcularExPxF_Bioclimatico(){
    var total=0;
    if(document.getElementById('fpBioclimatico3').value!==""){
        total= (document.getElementById('fpBioclimatico3').value)*1*3;
        document.getElementById('expxfBioclimatico3').value=eval(total);
    }else{
        document.getElementById('expxfBioclimatico3').value="";
    }

}

function calcularPxP_Bioclimatico(){
    var total=0;
    if(document.getElementById('fpBioclimatico3').value!==""){
        total= (document.getElementById('fpBioclimatico3').value)*3;
        document.getElementById('pxfBioclimatico3').value=eval(total);
    }else{
        document.getElementById('pxfBioclimatico3').value="";
    }
}

/**CALCULOS BIOCLIMATICO 2 */
function calcularF_Bioclimatico2(){

    var total=0;

    if(document.getElementById('calidadAire2').value=="" && document.getElementById('ruidos2').value=="" && document.getElementById('precipitacion2').value=="" && document.getElementById('vht2').value=="" && document.getElementById('cHidrogenico2').value==""){
        document.getElementById('fpBioclimatico2').value="";
    }else{

        if(eval(document.getElementById('cHidrogenico2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('vht2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('precipitacion2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('ruidos2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('calidadAire2').value)==1){
            total=total+1;
        }

        document.getElementById('fpBioclimatico2').value=eval(total);
    }

}

function calcularExPxF_Bioclimatico2(){
    var total=0;
    if(document.getElementById('fpBioclimatico2').value!==""){
        total= (document.getElementById('fpBioclimatico2').value)*2*2;
        document.getElementById('expxfBioclimatico2').value=eval(total);
    }else{
        document.getElementById('expxfBioclimatico2').value="";
    }

}

function calcularPxP_Bioclimatico2(){
    var total=0;
    if(document.getElementById('fpBioclimatico2').value!==""){
        total= (document.getElementById('fpBioclimatico2').value)*2;
        document.getElementById('pxfBioclimatico2').value=eval(total);
    }else{
        document.getElementById('pxfBioclimatico2').value="";
    }
}

/**CALCULOS BIOCLIMATICO 3 */
function calcularF_Bioclimatico3(){

    var total=0;

    if(document.getElementById('calidadAire3').value=="" && document.getElementById('ruidos3').value=="" && document.getElementById('precipitacion3').value=="" && document.getElementById('vht3').value=="" && document.getElementById('cHidrogenico3').value==""){
        document.getElementById('fpBioclimatico1').value="";
    }else{

        if(eval(document.getElementById('cHidrogenico3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('vht3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('precipitacion3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('ruidos3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('calidadAire3').value)==1){
            total=total+1;
        }

        document.getElementById('fpBioclimatico1').value=eval(total);
    }

}

function calcularExPxF_Bioclimatico3(){
    var total=0;
    if(document.getElementById('fpBioclimatico1').value!==""){
        total= (document.getElementById('fpBioclimatico1').value)*1*3;
        document.getElementById('expxfBioclimatico1').value=eval(total);
    }else{
        document.getElementById('expxfBioclimatico1').value="";
    }

}

function calcularPxP_Bioclimatico3(){
    var total=0;
    if(document.getElementById('fpBioclimatico1').value!==""){
        total= (document.getElementById('fpBioclimatico1').value)*1;
        document.getElementById('pxfBioclimatico1').value=eval(total);
    }else{
        document.getElementById('pxfBioclimatico1').value="";
    }
}

/**Sumatoria Bioclimatico */
function sumatoria_Bioclimatico_expx(){

    if(((document.getElementById('expxfBioclimatico3').value))==null || ((document.getElementById('expxfBioclimatico3').value))==""){
        (document.getElementById('expxfBioclimatico3').value)=0;
    }
    if(((document.getElementById('expxfBioclimatico2').value))==null || ((document.getElementById('expxfBioclimatico2').value))==""){
        (document.getElementById('expxfBioclimatico2').value)=0;
    }
    if(((document.getElementById('expxfBioclimatico1').value))==null || ((document.getElementById('expxfBioclimatico1').value))==""){
        (document.getElementById('expxfBioclimatico1').value)=0;
    }

    document.getElementById('sumatoriaBioclimaticoExPxF').value=(parseFloat(document.getElementById('expxfBioclimatico3').value))
    +(parseFloat(document.getElementById('expxfBioclimatico2').value))
    +(parseFloat(document.getElementById('expxfBioclimatico1').value));
    
}

function sumatoria_Bioclimatico_pxf(){

    if(((document.getElementById('pxfBioclimatico3').value))==null || ((document.getElementById('pxfBioclimatico3').value))==""){
        (document.getElementById('pxfBioclimatico3').value)=0;
    }
    if(((document.getElementById('pxfBioclimatico2').value))==null || ((document.getElementById('pxfBioclimatico2').value))==""){
        (document.getElementById('pxfBioclimatico2').value)=0;
    }
    if(((document.getElementById('pxfBioclimatico1').value))==null || ((document.getElementById('pxfBioclimatico1').value))==""){
        (document.getElementById('pxfBioclimatico1').value)=0;
    }

    document.getElementById('sumatoriaBioclimaticoPxF').value=(parseFloat(document.getElementById('pxfBioclimatico1').value))
    +(parseFloat(document.getElementById('pxfBioclimatico2').value))
    +(parseFloat(document.getElementById('pxfBioclimatico3').value));
    
}

function total(){
    document.getElementById('TotalBioclimatico').value=((parseFloat(document.getElementById('sumatoriaBioclimaticoExPxF').value))
    /(parseFloat(document.getElementById('sumatoriaBioclimaticoPxF').value))).toFixed(2);

    document.getElementById('evaluacionBioclimatico').value=eval( document.getElementById('TotalBioclimatico').value).toFixed(2);
}