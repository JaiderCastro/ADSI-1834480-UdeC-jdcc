<?php

   $ine= null;
   if (isset($_GET['ine'])) {
     $ine = $_GET['ine'];
   }

?>


<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> UDC- Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary"> 
 <br></br>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido :)</h1>
                  </div> 
                  
                  <form class="user needs-validation " method="POST" action="validalog.php">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="validationCustom02" required aria-describedby="emailHelp" placeholder="Correo Electronico" name="correo">
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                      <div class="invalid-feedback">
                     Por favor rellene este campo.
                      </div>
                    </div>
                    <div class="form-group needs-validation">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Ingrese su numero de indentificacion" name="identificacion" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>

                      <div class="invalid-feedback">
                     por favor rellenes este campo.
                      </div>
                    </div> 

                    
                    
                    <div class="form-group">
                        <input checked type="radio" id="Estudiante" name="type" value="1">
                        <label for="Estudiante">Estudiante</label>  <br>
                        <input type="radio" id="Administrador" name="type" value="2">
                        <label for="Administrador">Administrador</label><br>


                      </div>
                      <?php
                        if ($ine!=null ) { ?> 
                          <div class="alert alert-danger" role="alert">
                           Datos Inexistentes
                      </div><?php 
                  
                  
                      }
                  
                      ?> 

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                      
                    <button class="btn btn btn-primary btn-user btn-block" type="submit">Entrar</button>
                    <hr>
                    
                        
                  <hr>
                  <div class="text-center">
                    <//a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <//a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html> 
