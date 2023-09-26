<?php

 $usuario = $_POST ["usuario"];
 $contrasenia = $_POST ["pass"];
 $ckusuario = "ferchu";
 $ckpass = 1980;
 if ($usuario==$ckusuario & $contrasenia == $ckpass) {
   header("location:https://www.facebook.com/pormismanitos");
   // code...
 } else {
   header ("location: https://dribbble.com/errorpage");
 }

 ?>
