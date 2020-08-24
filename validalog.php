<?php
  session_start();
   //if (isset($_POST['correo']) and $_POST['correo'] != '' and $_POST['correo'] != null and (isset($_POST)['contrasenna'])and    $_POST['contrasenna'] != '' and $_POST['contrasenna'] != null {

    $correo           = $_POST['correo'];
    $identificacion   = $_POST['identificacion'];
    $type             = $_POST['type'];
   

    $hostt = "localhost";
    $user = "root";
    $password = ""; 
    $dbname   = "encuesta_udc"; 
    
   try { $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);   


      if ($type == 1) {
        $sen = $conn->prepare("SELECT * FROM   students     WHERE correo = ? AND   identificacion = ? " ); 
        } else {
                 
        $sen = $conn->prepare("SELECT * FROM administrador  WHERE correo = ?  AND  identificacion = ?  ");
          }  
            
             
        $sen->execute(array($correo,$identificacion)); 

          if ($sen->rowCount() > 0) {
            $row =$sen->fetch(PDO::FETCH_OBJ);               
            $_SESSION['nombre']                = $row->primernombre;
            $_SESSION['identificacion']        = $row->identificacion;
            $_SESSION['type']                  = $type;   

            header("location: index.php"); 
          } else {
            header("location: index.php");
          }; 

          if ($sen) {
            $bien = '¡ Bienvenido(a) !';
          header("location:index.php?bien=$bien");

        } elseif ($sen != true) {
          $ine = '¡ Datos Errados O Inexistentes !';
          header("location:login.php?ine=$ine");
        }

          
       
         
                  
                 

                

                
          



        


        
     } catch (PDOException $th) {
        echo $th->getMessage();
    }

    //} else {
      //  header("location: index.php"); 
    

    


   
    








?>
