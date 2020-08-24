<?php

 session_start();

 $identificacion = $_REQUEST['identificacion'];
 $correo         = $_REQUEST['correo'];
 
 $host     = "localhost";
 $user     = "root";
 $password = ""; 
 $dbname   = "encuesta_udc"; 

 try { $conn= new PDO ("mysql:host=$host; dbname=$dbname",$user,$password);
   

     $sen = $conn->prepare("UPDATE  students SET correo = ? WHERE identificacion = ?"); 

     $sen->execute(array($correo,$_SESSION['identificacion']));

        if ($sen) {
            $msg = '¡Correo Actualizado Con Exito!';
          header("location:index.php?err=$msg");

        }
    

    } catch (PDOException $th) {
        echo $th->getMessage();
    } 

?>