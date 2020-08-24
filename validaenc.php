<?php

  session_start();
  // print_r ($_REQUEST);
  //die;

        $identificacion                              = $_REQUEST['identificacion'];
        $fechadenacimiento                           =$_REQUEST['fechadenacimiento'];
        $ciudad                                      = $_REQUEST['ciudad'];
        $estadocivil                                 = $_REQUEST['estadocivil'];
        $genero                                      = $_REQUEST['genero'];
        $edad                                        = $_REQUEST['edad'];
        $direccion                                   = $_REQUEST['direccion'];
        $zona                                        = $_REQUEST['zona'];
        $institutucion_de_procedencia                = $_REQUEST['institutucion_de_procedencia'];
        $hace_cuantos_se_graduo                      = $_REQUEST['hace_cuantos_se_graduo'];
        $nivel_educativo_de_los_padres               = $_REQUEST['nivel_educativo_de_los_padres'];
        $actividad_educativa_de_su_padre             = $_REQUEST['actividad_educativa_de_su_padre'];$actividad_educativa_de_su_madre             = $_REQUEST['actividad_educativa_de_su_madre'];
        $tipo_de_vivienda                            = $_REQUEST['tipo_de_vivienda'];
        $nivel_de_ingreso_del_hogar                  = $_REQUEST['nivel_de_ingreso_del_hogar'];
        $calificacion_del_programa                   = $_REQUEST['calificacion_del_programa'];
        $cuantas_asignaturas_tiene                   = $_REQUEST['cuantas_asignaturas_tiene'];
        

        $host     = "localhost";
        $user     = "root";
        $password = ""; 
        $dbname   = "encuesta_udc"; 

        try { $conn= new PDO ("mysql:host=$host; dbname=$dbname",$user,$password);
          

            $sen = $conn->prepare("UPDATE  students SET
                fechadenacimiento            = ?,
                ciudad                       = ?,
                estadocivil                  = ?,
                genero                       = ?,
                edad                         = ?,
                direccion                    = ?,
                zona                         = ?,
                institutucion_de_procedencia = ?,
                hace_cuantos_se_graduo       = ?,
                nivel_educativo_de_los_padres= ?,
                actividad_educativa_de_su_padre = ?,
                actividad_educativa_de_su_madre = ?,
                tipo_de_vivienda                = ?,
                nivel_de_ingreso_del_hogar      = ?,
                calificacion_del_programa       = ?,
                cuantas_asignaturas_tiene       = ?

                 WHERE identificacion=?"); 


                $sen->execute(array($fechadenacimiento,$ciudad,$estadocivil,$genero,$edad,$direccion,$zona,$institutucion_de_procedencia,$hace_cuantos_se_graduo,$nivel_educativo_de_los_padres,$actividad_educativa_de_su_padre, $actividad_educativa_de_su_madre, $tipo_de_vivienda,$nivel_de_ingreso_del_hogar, $calificacion_del_programa,$cuantas_asignaturas_tiene,$_SESSION['identificacion']));   
                // header("index.html"); 

            if ($sen) {
                
                $enc = '¡ Encuesta Enviada!';
               header("location:index.php?enc=$enc");
                
            }
            
            




        } catch (PDOException $th) {
            echo $th->getMessage();
        }


   



?>