
    function valida_email(){
        
        var email;
        var arroba;
        var ponto;

        email = document.getElementById("txt_email").value
        
        arroba = email.search("@");

        ponto = email.search(".");
        alert(ponto);
        

   
        
       /* if(arroba < 3){

            
            alert('E-mail inválido');

        }else if(ponto < ( arroba + 7 )){

            alert(ponto);
            alert('E-mail inválido');
            

        }else{

            alert('caraio');

        }*/

    }
