function calculo1(){



    var elementoB= document.getElementsByName('alto');
    var elementoM= document.getElementsByName('medio');
    var contadorB=0;
    var contadorM=0;
 for(i=0; i<elementoB.length;i++){
     if(elementoB[i].value==1){
         contadorB+=1;
     }
 
 }
 for(i=0; i<elementoM.length;i++){
     if(elementoM[i].value==1){
         contadorM+=1;
     }
 
 }
 var total=(contadorB*5.555555556)+(contadorM*2.777777778);
 document.getElementById('res1').value=total.toFixed(2);
 }
 function calculo2(){



    var elementoB= document.getElementsByName('alto1');
    var elementoM= document.getElementsByName('medio1');
    var contadorB=0;
    var contadorM=0;
 for(i=0; i<elementoB.length;i++){
     if(elementoB[i].value==1){
         contadorB+=1;
     }
 
 }
 for(i=0; i<elementoM.length;i++){
     if(elementoM[i].value==1){
         contadorM+=1;
     }
 
 }
 var total=(contadorB*1.351351351)+(contadorM*0.675675676);
 document.getElementById('res2').value=total.toFixed(2);
 }
 function calculo3(){



    var elementoB= document.getElementsByName('alto2');
    var elementoM= document.getElementsByName('medio2');
    var contadorB=0;
    var contadorM=0;
 for(i=0; i<elementoB.length;i++){
     if(elementoB[i].value==1){
         contadorB+=1;
     }
 
 }
 for(i=0; i<elementoM.length;i++){
     if(elementoM[i].value==1){
         contadorM+=1;
     }
 
 }
 var total=(contadorB*2.631578947)+(contadorM*1.315789474);
 document.getElementById('res3').value=total.toFixed(2);
 }