<?php

//if (isset($_REQUEST['nombre']) and $_REQUEST['nombre'] != '' and $_REQUEST['nombre'] != null and 
//(isset($_REQUEST)['correo']) and $_REQUEST['correo'] != '' and $_REQUEST['correo'] != null
//(isset($_REQUEST)['contrasenna']) and $_REQUEST['contrasenna'] != '' and $_REQUEST['contrasenna'] != null
 //{

    $nombre      = $_REQUEST['nombre'];
    $correo      = $_REQUEST['correo'];
    $contrasenna = $_REQUEST['contrasenna'];

    $hostt = "localhost";
    $user = "root";
    $password = ""; 
    $dbname   = "prac_jdcc";

    try {
        $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$password);
        
        $sen = $conn->prepare("INSERT INTO usuarios (nombre,correo,contrasenna) VALUES (?,?,?)");
 
             
        $sen->execute(array($nombre,$correo,$contrasenna)); 
        header("location: index.html");

        

        
    } catch (PDOException $th) {
        echo $th->getMessage(); 
    }








//} else {
    //header("location: index.html");
//}





?>