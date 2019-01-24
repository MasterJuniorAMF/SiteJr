
    function valida_email(email){
        
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        
        if(email.value.match(mailformat)){

            document.form1.email.focus();

            return true;

        }else{
        
            alert("Favor inserir um email válido!");

            document.form1.email.focus();

            return false;

        }
    }   
