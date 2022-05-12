<?php

   function quitar($mensaje)
{
    $nopermitidos = array("'",'\\','<','>',"\"","=");
    $mensaje = str_replace($nopermitidos, "", $mensaje);
    return $mensaje;
}


   ?>
