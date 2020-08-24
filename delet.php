
<?php
 //session_start();
 
    $identificacion= $_REQUEST['identificacion'];

    $hostt = "localhost";
    $user = "root";
    $password = ""; 
    $dbname   = "encuesta_udc";

    try {
        $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$password);
        
        $sen = $conn->prepare("DELETE FROM students WHERE identificacion = ? ");
             
        $sen->execute(array($identificacion)); 
        
        

        if ($sen) {
            
            $del = '¡Estudiante Eliminado!';
            header("location:liststudents.php?del=$del");
         }
        

        

        
    } catch (PDOException $th) {
        echo $th->getMessage(); 
    }












?>