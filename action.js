var slika=2;
$(document).ready(function funkcija() {
    
    $('#banLevo').click(function (){
         slika--;
         if(slika<1)slika=4;
         var link="URL(slike/slika"+slika+".jpg)";
         
          $('#banner').css({'background-image':link});
          });
         
     $('#banDesno').click(function (){
         slika++;
         if(slika>4)slika=1;
         var link="URL(slike/slika"+slika+".jpg)";
         $('#banner').css({'background-image':link});
       
        
    });
    
    
    
   
  
    


});
function tajmBanner(){
    slika++;
    if(slika==5)slika=1;
    var link="URL(slike/slika"+slika+".jpg)";
         
          $('#banner').css({'background-image':link});
         
    
}
window.setInterval(tajmBanner,3000);