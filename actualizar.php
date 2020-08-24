<?php
  session_start();
 
    
       
      ?>  

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>

        <link href="estilo.css" rel="stylesheet">

        </head>
        <body>
        <div class="login">
                <div class="login-screen">
                    <div class="app-title">
                        <h1>Actualizar Correo</h1>
                    </div>
                        <form action="valiact.php" method="POST">
                            <div class="login-form">
                                <div class="control-group">
                                <input type="text" class="login-field" value="" placeholder="Ingrese Su Identificacion" id="login-name"  name="identificacion">
                                <label class="login-field-icon fui-user" for="login-name"></label>
                                </div>

                                <div class="control-group">
                                <input type="email" class="login-field" value="" placeholder="Nuevo Correo" id="login-pass" name="correo">
                                <label class="login-field-icon fui-lock" for="login-pass"></label>
                            </div> <br>

                            <button type="submit" class="btn btn-primary">Actualizar</button>

                        </form>        
                                
                </div>
                
            </div>
        </body>
        </html>
    <?php
   