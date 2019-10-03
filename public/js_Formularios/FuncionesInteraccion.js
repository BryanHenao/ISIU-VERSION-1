/**CALCULOS Interaccion 1 */
function calcularF_Interaccion(){

    var total=0;

    if(document.getElementById('desechosSolidos1').value=="" && document.getElementById('IndustriasContaminantes1').value=="" && document.getElementById('altaTension1').value=="" && document.getElementById('peligroExplosion1').value=="" && document.getElementById('recoleccionDesechos1').value==""){
        document.getElementById('fpInteraccion3').value="";
    }else{
        if(eval(document.getElementById('recoleccionDesechos1').value)==1){
            total=total+1;
        }else{
            document.getElementById('recoleccionDesechos2').disabled=false;
        }
        if(eval(document.getElementById('peligroExplosion1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('altaTension1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('IndustriasContaminantes1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('desechosSolidos1').value)==1){
            total=total+1;
        }

        document.getElementById('fpInteraccion3').value=eval(total);
    }

}   

function calcularExPxF_Interaccion(){
    var total=0;
    if(document.getElementById('fpInteraccion3').value!==""){
        total= (document.getElementById('fpInteraccion3').value)*1*3;
        document.getElementById('expxfInteraccion3').value=eval(total);
    }else{
        document.getElementById('expxfInteraccion3').value="";
    }

}

function calcularPxP_Interaccion(){
    var total=0;
    if(document.getElementById('fpInteraccion3').value!==""){
        total= (document.getElementById('fpInteraccion3').value)*3;
        document.getElementById('pxfInteraccion3').value=eval(total);
    }else{
        document.getElementById('pxfInteraccion3').value="";
    }
}

/**CALCULOS Interaccion 2 */
function calcularF_Interaccion2(){

    var total=0;

    if(document.getElementById('desechosSolidos2').value=="" && document.getElementById('IndustriasContaminantes2').value=="" && document.getElementById('altaTension2').value=="" && document.getElementById('peligroExplosion2').value=="" && document.getElementById('recoleccionDesechos2').value==""){
        document.getElementById('fpInteraccion2').value="";
    }else{

        if(eval(document.getElementById('recoleccionDesechos2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('peligroExplosion2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('altaTension2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('IndustriasContaminantes2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('desechosSolidos2').value)==1){
            total=total+1;
        }

        document.getElementById('fpInteraccion2').value=eval(total);
    }

}

function calcularExPxF_Interaccion2(){
    var total=0;
    if(document.getElementById('fpInteraccion2').value!==""){
        total= (document.getElementById('fpInteraccion2').value)*2*2;
        document.getElementById('expxfInteraccion2').value=eval(total);
    }else{
        document.getElementById('expxfInteraccion2').value="";
    }

}

function calcularPxP_Interaccion2(){
    var total=0;
    if(document.getElementById('fpInteraccion2').value!==""){
        total= (document.getElementById('fpInteraccion2').value)*2;
        document.getElementById('pxfInteraccion2').value=eval(total);
    }else{
        document.getElementById('pxfInteraccion2').value="";
    }
}

/**CALCULOS Interaccion 3 */
function calcularF_Interaccion3(){

    var total=0;

    if(document.getElementById('desechosSolidos3').value=="" && document.getElementById('IndustriasContaminantes3').value=="" && document.getElementById('altaTension3').value=="" && document.getElementById('peligroExplosion3').value=="" && document.getElementById('recoleccionDesechos3').value==""){
        document.getElementById('fpInteraccion1').value="";
    }else{

        if(eval(document.getElementById('recoleccionDesechos3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('peligroExplosion3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('altaTension3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('IndustriasContaminantes3').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('desechosSolidos3').value)==1){
            total=total+1;
        }

        document.getElementById('fpInteraccion1').value=eval(total);
    }

}

function calcularExPxF_Interaccion3(){
    var total=0;
    if(document.getElementById('fpInteraccion1').value!==""){
        total= (document.getElementById('fpInteraccion1').value)*1*3;
        document.getElementById('expxfInteraccion1').value=eval(total);
    }else{
        document.getElementById('expxfInteraccion1').value="";
    }

}

function calcularPxP_Interaccion3(){
    var total=0;
    if(document.getElementById('fpInteraccion1').value!==""){
        total= (document.getElementById('fpInteraccion1').value)*1;
        document.getElementById('pxfInteraccion1').value=eval(total);
    }else{
        document.getElementById('pxfInteraccion1').value="";
    }
}

/**Sumatoria Interaccion */
function sumatoria_Interaccion_expx(){

    if(((document.getElementById('expxfInteraccion3').value))==null || ((document.getElementById('expxfInteraccion3').value))==""){
        (document.getElementById('expxfInteraccion3').value)=0;
    }
    if(((document.getElementById('expxfInteraccion2').value))==null || ((document.getElementById('expxfInteraccion2').value))==""){
        (document.getElementById('expxfInteraccion2').value)=0;
    }
    if(((document.getElementById('expxfInteraccion1').value))==null || ((document.getElementById('expxfInteraccion1').value))==""){
        (document.getElementById('expxfInteraccion1').value)=0;
    }

    document.getElementById('sumatoriaInteraccionExPxF').value=(parseFloat(document.getElementById('expxfInteraccion3').value))
    +(parseFloat(document.getElementById('expxfInteraccion2').value))
    +(parseFloat(document.getElementById('expxfInteraccion1').value));
    
}

function sumatoria_Interaccion_pxf(){

    if(((document.getElementById('pxfInteraccion3').value))==null || ((document.getElementById('pxfInteraccion3').value))==""){
        (document.getElementById('pxfInteraccion3').value)=0;
    }
    if(((document.getElementById('pxfInteraccion2').value))==null || ((document.getElementById('pxfInteraccion2').value))==""){
        (document.getElementById('pxfInteraccion2').value)=0;
    }
    if(((document.getElementById('pxfInteraccion1').value))==null || ((document.getElementById('pxfInteraccion1').value))==""){
        (document.getElementById('pxfInteraccion1').value)=0;
    }

    document.getElementById('sumatoriaInteraccionPxF').value=(parseFloat(document.getElementById('pxfInteraccion1').value))
    +(parseFloat(document.getElementById('pxfInteraccion2').value))
    +(parseFloat(document.getElementById('pxfInteraccion3').value));
    
}

function totalInteraccion(){
    document.getElementById('TotalInteraccion').value=((parseFloat(document.getElementById('sumatoriaInteraccionExPxF').value))
    /(parseFloat(document.getElementById('sumatoriaInteraccionPxF').value))).toFixed(2);

    document.getElementById('evaluacionBiointeraccion').value=eval( document.getElementById('TotalInteraccion').value).toFixed(2);
}