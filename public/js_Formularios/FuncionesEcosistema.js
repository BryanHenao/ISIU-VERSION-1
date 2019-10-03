
/**CALCULOS Ecosistema 1 */
function calcularF_Ecosistema(){

    var total=0;

    if(document.getElementById('suelosAgricolas1').value=="" && document.getElementById('hidrologiaSupercial1').value=="" && document.getElementById('hidrologiaSubterranea1').value=="" && document.getElementById('lagos/rios/Mar1').value=="" && document.getElementById('areasFragiles1').value==""
      && document.getElementById('sedimientos1').value==""){
        document.getElementById('fpEcosistema3').value="";
       
    }else{
        if(eval(document.getElementById('suelosAgricolas1').value)==1){
            total=total+1;
        }else{
            document.getElementById('suelosAgricolas2').disabled=false;
        }
        if(eval(document.getElementById('lagos/rios/Mar1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('hidrologiaSubterranea1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('areasFragiles1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('hidrologiaSupercial1').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('sedimientos1').value)==1){
            total=total+1;
        }

        document.getElementById('fpEcosistema3').value=eval(total);
    }

}   

function calcularExPxF_Ecosistema(){
    var total=0;
    if(document.getElementById('fpEcosistema3').value!==""){
        total= (document.getElementById('fpEcosistema3').value)*1*3;
        document.getElementById('expxfEcosistema3').value=eval(total);
    }else{
        document.getElementById('expxfEcosistema3').value="";
    }

}

function calcularPxP_Ecosistema(){
    var total=0;
    if(document.getElementById('fpEcosistema3').value!==""){
        total= (document.getElementById('fpEcosistema3').value)*3;
        document.getElementById('pxfEcosistema3').value=eval(total);
    }else{
        document.getElementById('pxfEcosistema3').value="";
    }
}

/**CALCULOS BIOCLIMATICO 2 */
function calcularF_Ecosistema2(){

    var total=0;

    if(document.getElementById('suelosAgricolas2').value=="" && document.getElementById('hidrologiaSupercial2').value=="" && document.getElementById('hidrologiaSubterranea2').value=="" && document.getElementById('lagos/rios/Mar2').value=="" && document.getElementById('areasFragiles2').value==""
      && document.getElementById('sedimientos2').value==""){
        document.getElementById('fpEcosistema2').value="";
       
    }else{
        if(eval(document.getElementById('suelosAgricolas2').value)==1){
            total=total+1;
        }else{
            document.getElementById('suelosAgricolas2').disabled=false;
        }
        if(eval(document.getElementById('lagos/rios/Mar2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('hidrologiaSubterranea2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('areasFragiles2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('hidrologiaSupercial2').value)==1){
            total=total+1;
        }
        if(eval(document.getElementById('sedimientos2').value)==1){
            total=total+1;
        }

        document.getElementById('fpEcosistema2').value=eval(total);
    }

}

function calcularExPxF_Ecosistema2(){
    var total=0;
    if(document.getElementById('fpEcosistema2').value!==""){
        total= (document.getElementById('fpEcosistema2').value)*2*2;
        document.getElementById('expxfEcosistema2').value=eval(total);
    }else{
        document.getElementById('expxfEcosistema2').value="";
    }

}

function calcularPxP_Ecosistema2(){
    var total=0;
    if(document.getElementById('fpEcosistema2').value!==""){
        total= (document.getElementById('fpEcosistema2').value)*2;
        document.getElementById('pxfEcosistema2').value=eval(total);
    }else{
        document.getElementById('pxfEcosistema2').value="";
    }
}

/**CALCULOS BIOCLIMATICO 3 */
function calcularF_Ecosistema3(){

    var total=0;

    if(document.getElementById('suelosAgricolas3').value=="" && document.getElementById('hidrologiaSupercial3').value=="" && document.getElementById('hidrologiaSubterranea3').value=="" && document.getElementById('lagos/rios/Mar3').value=="" && document.getElementById('areasFragiles3').value==""
    && document.getElementById('sedimientos3').value==""){
      document.getElementById('fpEcosistema1').value="";
     
  }else{
      if(eval(document.getElementById('suelosAgricolas3').value)==1){
          total=total+1;
      }else{
          document.getElementById('suelosAgricolas3').disabled=false;
      }
      if(eval(document.getElementById('lagos/rios/Mar3').value)==1){
          total=total+1;
      }
      if(eval(document.getElementById('hidrologiaSubterranea3').value)==1){
          total=total+1;
      }
      if(eval(document.getElementById('areasFragiles3').value)==1){
          total=total+1;
      }
      if(eval(document.getElementById('hidrologiaSupercial3').value)==1){
          total=total+1;
      }
      if(eval(document.getElementById('sedimientos3').value)==1){
          total=total+1;
      }

      document.getElementById('fpEcosistema1').value=eval(total);
  }

}

function calcularExPxF_Ecosistema3(){
    var total=0;
    if(document.getElementById('fpEcosistema1').value!==""){
        total= (document.getElementById('fpEcosistema1').value)*1*3;
        document.getElementById('expxfEcosistema1').value=eval(total);
    }else{
        document.getElementById('expxfEcosistema1').value="";
    }

}

function calcularPxP_Ecosistema3(){
    var total=0;
    if(document.getElementById('fpEcosistema1').value!==""){
        total= (document.getElementById('fpEcosistema1').value)*1;
        document.getElementById('pxfEcosistema1').value=eval(total);
    }else{
        document.getElementById('pxfEcosistema1').value="";
    }
}

/**Sumatoria Bioclimatico */
function sumatoria_Ecosistema_expx(){

    if(((document.getElementById('expxfEcosistema3').value))==null || ((document.getElementById('expxfEcosistema3').value))==""){
        (document.getElementById('expxfEcosistema3').value)=0;
    }
    if(((document.getElementById('expxfEcosistema2').value))==null || ((document.getElementById('expxfEcosistema2').value))==""){
        (document.getElementById('expxfEcosistema2').value)=0;
    }
    if(((document.getElementById('expxfEcosistema1').value))==null || ((document.getElementById('expxfEcosistema1').value))==""){
        (document.getElementById('expxfEcosistema1').value)=0;
    }

    document.getElementById('sumatoriaEcosistemaExPxF').value=(parseFloat(document.getElementById('expxfEcosistema3').value))
    +(parseFloat(document.getElementById('expxfEcosistema2').value))
    +(parseFloat(document.getElementById('expxfEcosistema1').value));
    
}

function sumatoria_Ecosistema_pxf(){

    if(((document.getElementById('pxfEcosistema3').value))==null || ((document.getElementById('pxfEcosistema3').value))==""){
        (document.getElementById('pxfEcosistema3').value)=0;
    }
    if(((document.getElementById('pxfEcosistema2').value))==null || ((document.getElementById('pxfEcosistema2').value))==""){
        (document.getElementById('pxfEcosistema2').value)=0;
    }
    if(((document.getElementById('pxfEcosistema1').value))==null || ((document.getElementById('pxfEcosistema1').value))==""){
        (document.getElementById('pxfEcosistema1').value)=0;
    }

    document.getElementById('sumatoriaEcosistemaPxF').value=(parseFloat(document.getElementById('pxfEcosistema1').value))
    +(parseFloat(document.getElementById('pxfEcosistema2').value))
    +(parseFloat(document.getElementById('pxfEcosistema3').value));
    
}

function totalEcosistema(){
    document.getElementById('totalEcosistema').value=((parseFloat(document.getElementById('sumatoriaEcosistemaExPxF').value))
    /(parseFloat(document.getElementById('sumatoriaEcosistemaPxF').value))).toFixed(2);
    document.getElementById('evaluacionEcosistema').value=eval( document.getElementById('totalEcosistema').value).toFixed(2);
}