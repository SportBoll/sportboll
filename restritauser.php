<?php
    /* Arquivo areaRestrita.php salvo na pasta
        /arearestrita
    */ 
    //incluir o arquivo em todas as areas que deseja que so acesse
    //mediante login
    include "validar.php";
   
    $login = $_SESSION['login'];
    $login = $_SESSION['login'];
 
   
    echo "Olá $login seu nome é $login!";
?>