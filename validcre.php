<?php

$primernombre       =$_REQUEST['primernombre'];
$segundonombre      =$_REQUEST['segundonombre'];
$primerapellido     =$_REQUEST['primerapellido'];
$segundoapellido    =$_REQUEST['segundoapellido'];
$correo             =$_REQUEST['correo'];
$identificacion     =$_REQUEST['identificacion']; 

$host      ="localhost";
$user      ="root";
$password  ="";
$dbname    ="encuesta_udc";

    try {
    $conn= new PDO ("mysql:host=$host;dbname=$dbname",$user,$password);
       
       $sen = $conn->prepare("INSERT INTO students (primernombre,segundonombre,primerapellido,segundoapellido,correo,identificacion) VALUES (?,?,?,?,?,?)");
 
             
        $sen->execute(array($primernombre,$segundonombre,$primerapellido,$segundoapellido,$correo,$identificacion)); 
        header("location: liststudents.php");
             
        
        if ($sen) {
         $reg = '¡ Estudiante Creado Con Exito !';
         header("location:liststudents.php?reg=$reg");
        }
       
      





     } catch (PDOException $th) {
     echo $th->getMessage();
     } 


?> 