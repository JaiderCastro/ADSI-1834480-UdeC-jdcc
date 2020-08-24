<?php
  session_start();
 
 if (isset($_SESSION['identificacion'])) {
      
  
  
      
     ?>  
      <!DOCTYPE html>
      <html lang="es"> 

      <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">


      <title>SB Admin 2 - Dashboard</title>

      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">

      

      </head>

      <body id="page-top">
        

      <!-- Page Wrapper --> 
      <div id="wrapper">
       
    
      
      <?php
      if ($_SESSION ['type'] == 2) {?>

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">  
        
      
        <!-- Sidebar --> 
            
         
        
      
        
        <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-school"></i>
            </div>
            <div class="sidebar-brand-text mx-3"><sup>U</sup> D <sup>C</sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="liststudents.php">
              <i class="fas fa-users"></i> 
              <span>Estudiantes</span></a>
          </li> 

          

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Interface
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Components</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Utilities</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
              </div>
            </div>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Addons
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Charts -->
          <li class="nav-item">
            <a class="nav-link" href="charts.html">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Charts</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="tables.html">
              <i class="fas fa-fw fa-table"></i>
              <span>Tables</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

        </ul>
        
        <?php
      } 
      else
        {  

          $hostt = "localhost";
          $user = "root";
          $password = ""; 
          $dbname   = "encuesta_udc"; 
          
          try { $conn= new PDO ("mysql:host=$hostt;dbname=$dbname",$user,$password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);


                $sen = $conn->prepare("SELECT * FROM   students  WHERE identificacion= ? " ); 
                    
                $sen->execute(array($_SESSION['identificacion'])); 

              
              $row =$sen->fetch(PDO::FETCH_OBJ);               
                    
                  
                    
            
              }catch (PDOException $th){
                echo $th->getmessage();
              }    
                      
        }
        ?>
        <!-- End of Sidebar -->


        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>

              <!-- Topbar Search -->
              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  
                <a class="btn btn-primary" href="actualizar.php" id="" role="button" >
                <i class="fas fa-edit">Actualizar Correo</i>
                  </a>
                    
                  
                </div>
              </form>

              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                  </a>
                  <!-- Dropdown - Alerts -->
                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                      Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-primary">
                          <i class="fas fa-file-alt text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-success">
                          <i class="fas fa-donate text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                        <div class="icon-circle bg-warning">
                          <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                      </div>
                      <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                      </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                  </div>
                </li>

                <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                  <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">7</span>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                      Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                      </div>
                      <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                        <div class="status-indicator"></div>
                      </div>
                      <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                        <div class="small text-gray-500">Jae Chun · 1d</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                        <div class="status-indicator bg-warning"></div>
                      </div>
                      <div>
                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                      </div> 
                      <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                      </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                  </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['nombre']?></span>
                    <?php
                    if ($_SESSION['type'] == 1){
                    echo '<img class="img-profile rounded-circle" src="./img/avastu.jpg">';
                    } else {
                      echo  '<img class="img-profile rounded-circle" src="./img/avatadm.png">';
                        
                    } ?>
                    
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                      Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </div>
                </li>

              </ul>
      
            </nav>  
            <!-- End of Topbar -->
                    <?php
                      $msg = null;
                if (isset($_GET['err'])) {
              $msg = $_GET['err'];
            } ?>
               <?php
                        if ($msg !=null ) { ?> 
                         <div class="alert alert-primary" role="alert">
                      <strong>¡Correo Actualizado Con Exito!.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      <?php 
                  
                  
                      }
                  
                      ?> 

                    <?php
                      $enc = null;
                if (isset($_GET['enc'])) {
              $enc = $_GET['enc'];
            } ?>
               <?php
                        if ($enc !=null ) { ?> 
                         <div class="alert alert-primary" role="alert">
                      <strong>¡Encuesta Enviada!.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      <?php 
                  
                  
                      }
                  
                      ?> 


            <!-- Begin Page Content // COMIENZO DE LA ENCUESTA //--> 
            <div class="container">
            <?php
            if($_SESSION['type'] == 1){?>
              
              <div class="container-xm"> 
            <header>
              <h1> Formulario Encuesta UdC</h1>
            </header><br>
            <form name="formbot" id="formbot" method="POST" autocomplete="off" action="validaenc.php">  
            


            <div class="row">

            <div class="col">
                <label for="inputEmail4"><h5># de identificacion</h5></label>
                <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Escriba Su Identificacion"  value= "<?=$row->identificacion?> " readonly>
              </div>




              <div class="col">
                <label for="inputPassword4"><h5>Primer Nombre</h5></label> 
                <input type="text" class="form-control" name="primernombre" placeholder="Escriba Su Nombre" value= "<?=$row->primernombre?> " readonly>
              </div>

            
              
                <div class="col">
                  
                <label for="inputPassword4"><h5>Segundo Nombre</h5></label> 
                <input type="text" class="form-control" name="segundonombre" placeholder="Segundo Nombre" value= "<?=$row->segundonombre?> " readonly>
                </div>
            

              
              




              
            </div> <br>
            




            <div class="row">




              <div class="col">
                <label for="inputAddress"><h5>Primer Apellido</h5></label>
                <input type="text" name="primerapellido" class="form-control" id="inputAddress" placeholder="Escriba Su Apellido" value= "<?=$row->primerapellido?> " readonly>
              </div>


              <div class="col">
                <label for="inputPassword4"><h5>Segundo Apellido</h5></label>
                <input type="text" name="segundoapellido" class="form-control" id="inputAddress" placeholder="Segundo Apellido" value= "<?=$row->segundoapellido?> " readonly >
              </div>



            </div> <br>

            <div  class="row">
              <div class="col">
                <label for=""><h5>Fecha De Nacimiento</h5></label>
                <input name="fechadenacimiento" type="date" class="form-control" value= "<?=$row->fechadenacimiento?> "  required>


              </div>

              <div class="col">
                <label for=""><h5>Ciudad</h5></label>
                <input list="estado" name="ciudad" class="form-control" value= "<?=$row->ciudad?> " required>
                <datalist id="estado">
                  <option value="Cartagena"></option>
                  <option value="Barranquilla"></option>
                  <option value="Santamarta"></option>
                  <option value="Guajira"></option>
                </datalist> 


              </div>



            </div> <br>

            
            <div class="row">

              <div class="col-6">
                <label for="inputState"><h5>Estado Civil</h5></label>
                <input list="estado" name="estadocivil" class="form-control" value= "<?=$row->estadocivil?> " required>
                  <datalist id="estado">
                    <option value="Soltero(a)"></option>
                    <option value="Casado(a)"></option>
                    <option value="Divorciado(a)"></option>
                    <option value="Viudo(a)"></option>
                  </datalist> 
                </div>

                <div class="col-6">
                  <label for="inputState"><h5>Genero</h5></label>
                  <input list="genero" name="genero" class="form-control" value= "<?=$row->genero?> " required>
                  <datalist id="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    
                  </datalist> 
                  </div>

              
            </div> <br>

            

            <div class="row">

              <div class="col-6">
                  <label for="inputAddress2"><h5>Edad</h5></label>
                  <input type="number" class="form-control" placeholder="" name="edad" value= "<?=$row->edad?> "  required>
              </div>
              

              
                

                    <div class="col-6">
                        <label for=""><h5>Correo Electronico</h5></label>
                        <input list="" name="correo" class="form-control" placeholder="Escriba Su Correo" value= "<?=$row->correo?> " readonly > 
                  
                    </div> 

                    
                
            
            </div> <br>

            <div class="row">

              <div class="col-6"> 
                  <label for="inputAddress2"><h5>Direccion</h5></label>
                  <input type="text" class="form-control" placeholder="Escriba Su Direccion" name="direccion" value= "<?=$row->direccion?> " required>
              </div>
              

              
                

                    <div class="col-6">
                        <label for=""><h5>Zona De Vivienda</h5></label>
                        <input list="zona" name="zona" class="form-control" placeholder="Zona En Que Reside" value= "<?=$row->zona?> " required>
                  <datalist id="zona">
                    <option value="Rural"></option>
                    <option value="Urbana"></option>
                    
                  </datalist> 
                    </div> 

                    
                
            
            </div> <br> 



            <div class="row"> 



              <div class="col">
                  <label for=""><h5>Institucion A La Que Procceda</h5></label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Institucion..." name="institutucion_de_procedencia" value= "<?=$row->institutucion_de_procedencia?> " required>
                  

                </div> 



              <div class="col">
                  <label for=""><h5>¿Hace Cuanto Se Graduo De Bachiller?</h5></label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Hace...." name="hace_cuantos_se_graduo" value= "<?=$row->hace_cuantos_se_graduo?> " required>
              </div>



            </div><br>

              
            <div class="row">

              <div class="col">
                  <label for=""><h5>Nivel Educativo De Sus Padres</h5></label>
                  <input list="nvedp" name="nivel_educativo_de_los_padres" class="form-control" value= "<?=$row->nivel_educativo_de_los_padres?>" required>
                  <datalist id="nvedp">
                    <option >Preescolar</option>
                    <option >Primaria</option>
                    <option >Bachiller</option> 
                  </datalist>
                        
              </div>

              <div class="col">
                  <label for=""><h5>Actividad Educativa De Su Padre</h5></label>
                <input list="country"  name="actividad_educativa_de_su_padre" class="form-control" value= "<?=$row->actividad_educativa_de_su_padre?>" required> 
                


                

              </div> 

              <div class="col">
                <label for=""><h5>Actividad Educativa De Su Madre</h5></label> 
              <input list="country"  name="actividad_educativa_de_su_madre" class="form-control" value= "<?=$row->actividad_educativa_de_su_madre?>" required> 
              


              

            </div> 


                
              


            </div> 
            <br>


            <div class="row">
              <div class="col">
                <label for="inputCity"><h5>Tipo De Vivienda</h5></label>
                <input list="tipdev" name="tipo_de_vivienda" class="form-control" value= "<?=$row->tipo_de_vivienda?>"required>
                  <datalist id="tipdev">
                    <option >Alquilada</option> 
                    <option >Propia</option>
                    <option >Familiar</option>
                    
                  </datalist>
                        
              </div>
              
              <div class="col">
                <label for="inputZip"><h5>Nivel De Ingreso Del Hogar</h5></label>
                <input list="tipdev" name="nivel_de_ingreso_del_hogar" class="form-control" value= "<?=$row->nivel_de_ingreso_del_hogar?>" required>
                
                      
                      
              </div>

            </div> <br>
            <div class="row">
              <div class="col">
                <label for="inputState"><h5>Como Califica El Nivel De La Educación Del Programa Matriculado</h5></label>
                <input list="tipdev" name="calificacion_del_programa" class="form-control" value= "<?=$row->calificacion_del_programa?>" required>
                  <datalist id="tipdev">
                    <option values="">Buena</option>
                    <option values="">Mala</option>
                    
                  </datalist>
                        
                
              </div>
              <div class="col">
                <label for="inputZip"><h5>¿Cuantas Asignaturas Tiene Matriculada?</h5> </label> <br></br>
                <input type="number" class="form-control" id="inputZip" placeholder="" name="cuantas_asignaturas_tiene" value= "<?=$row->cuantas_asignaturas_tiene?>"required> 
              </div>

              
            </div>

            <br><br>
            <input type="hidden" name="identificacion" value="<?=$_SESSION['identificacion']?>">
            <input type="submit" class="btn btn-danger" value="enviar">

            </div>
          
          </form>
          </div> 

            </div> 
            <?php
            } ?> 
            

              <!-- Page Heading // FIN DE LA ENCUESTA// --> 
                
        </div> <br><br>
              
        <?php
        $bien = null;
           if (isset($_GET['bien'])) {
             $bien = $_GET['bien'];
            } ?>
               <?php
                   if ($bien !=null ) { ?> 
                   <div class="alert alert-primary" role="alert">
                   <trong>¡Bienvenido(a)!.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                    </div>
                 <?php 
                  
                  
              }
                  
             ?> 
          

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿Listo Para Salir?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Seleccione Salir Si Usted Quiere Abandonar La Sesion</div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
              <a class="btn btn-danger" href="logout.php">Salir</a> 
            </div>
          </div>
        </div>
      </div>

      
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
      <!--swwet alert 
      <script src="jquery/jquery-3.5.1.min.js"></script>
      <script src="popper/popper.min.js"></script>
      <script src="plugins/sweetalert/sweetalert2.all.min.js"></script> 
      <//script src="bootstrap/js/bootstrap.min.js"><//script>
        <//script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <//script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        
        -->
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="vendor/chart.js/Chart.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script>

      </body>

      </html>

<?php


             
   } else {
  
    header("location: login.php");
  
}?>

