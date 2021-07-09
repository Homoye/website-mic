<?php

use phpDocumentor\Reflection\Location;

session_start()
     function verification_pwd_and_mail(){
         if(isset($_POST["usrname"],$_POST["psw"])){
             foreach ($_SESSION["admin"] as $admins) {
                if (($_POST["usrname"]=={{$admins->user}}) && ($_POST["psw"]=={{$admins->password}})) {
                             $_SESSION["name"]={{$admins->user}};
                             $_SESSION["pwd"]={{$admins->password}};
                             header(Location:projet-fin-etude/index);
                }
             }
         }
     }