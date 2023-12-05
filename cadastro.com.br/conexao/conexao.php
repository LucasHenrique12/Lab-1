<?php
    //SERVIDOR,USUARIO,Senha
    $con = mysqli_connect("localhost","root","");
    if(!$con){
        die('Banco não encontrado!'. mysqli_error());
    }
   

      //nome do banco e conexao bd-
        mysqli_select_db($con,"ifba");
    
        
    ?>