<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULARIO</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head> 




<body>
  
    <div class="container-md"> 
      <header>
        <h1>Encuesta UdC</h1>
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
            <input name="fechadenacimiento" type="date" class="form-control">


          </div>

          <div class="col">
            <label for=""><h5>Ciudad</h5></label>
            <input list="estado" name="ciudad" class="form-control">
            <datalist id="estado">
              <option value="Cartagena"></option>
              <option value="Barranquilla"></option>
              <option value="Santamarta"></option>
              <option value="Guajira"></option>
            </datalist> 


          </div>



        </div>

        
        <div class="row">

          <div class="col-6">
            <label for="inputState"><h5>Estado Civil</h5></label>
            <input list="estado" name="estadocivil" class="form-control">
              <datalist id="estado">
                <option value="Soltero(a)"></option>
                <option value="Casado(a)"></option>
                <option value="Divorciado(a)"></option>
                <option value="Viudo(a)"></option>
              </datalist> 
            </div>

            <div class="col-6">
              <label for="inputState"><h5>Genero</h5></label>
              <input list="genero" name="genero" class="form-control">
              <datalist id="genero">
                <option value="Masculino"></option>
                <option value="Femenino"></option>
                
              </datalist> 
              </div>

          
        </div> <br>
 
        

        <div class="row">

          <div class="col-6">
              <label for="inputAddress2"><h5>Edad</h5></label>
               <input type="number" class="form-control" placeholder="" name="edad">
           </div>
           

           
             

                <div class="col-6">
                    <label for=""><h5>Correo Electronico</h5></label>
                    <input list="" name="correo" class="form-control" placeholder="Escriba Su Correo" value= "<?=$row->correo?> " readonly > 
              
                </div> 

                
            
        
        </div> <br>

        <div class="row">

          <div class="col-6"> 
              <label for="inputAddress2"><h5>Direccion</h5></label>
               <input type="text" class="form-control" placeholder="Escriba Su Direccion" name="direccion">
           </div>
           

           
             

                <div class="col-6">
                    <label for=""><h5>Zona De Vivienda</h5></label>
                    <input list="zona" name="zona" class="form-control" placeholder="Zona En Que Reside">
              <datalist id="zona">
                <option value="Rural"></option>
                <option value="Urbana"></option>
                
              </datalist> 
                </div> 

                
            
        
        </div> <br> 



        <div class="row"> 



          <div class="col">
              <label for=""><h5>Institucion A La Que Procceda</h5></label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Institucion..." name="institutucion_de_procedencia">
               

             </div> 



          <div class="col">
              <label for=""><h5>¿Hace Cuanto Se Graduo De Bachiller?</h5></label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Hace...." name="hace_cuantos_se_graduo">
          </div>



        </div><br>

           
        <div class="row">

          <div class="col">
              <label for=""><h5>Nivel Educativo De Sus Padres</h5></label>
              <input list="nvedp" name="nivel_educativo_de_los_padres" class="form-control" >
              <datalist id="nvedp">
                <option >Preescolar</option>
                <option >Primaria</option>
                <option >Bachiller</option> 
              </datalist>
                    
          </div>

          <div class="col">
              <label for=""><h5>Actividad Educativa De Su Padre</h5></label>
            <input list="country"  name="actividad_educativa_de_su_padre" class="form-control"> 
            


             

          </div> 

          <div class="col">
            <label for=""><h5>Actividad Educativa De Su Madre</h5></label> 
          <input list="country"  name="actividad_educativa_de_su_madre" class="form-control">
          


           

        </div> 


            
          


        </div> 
        <br>


        <div class="row">
          <div class="col">
            <label for="inputCity"><h5>Tipo De Vivienda</h5></label>
            <input list="tipdev" name="tipo_de_vivienda" class="form-control" >
              <datalist id="tipdev">
                <option >Alquilada</option> 
                <option >Propia</option>
                <option >Familiar</option>
                
              </datalist>
                    
          </div>
          
          <div class="col">
            <label for="inputZip"><h5>Nivel De Ingreso Del Hogar</h5></label>
            <input list="tipdev" name="nivel_de_ingreso_del_hogar" class="form-control" >
            <datalist id="tipdev">
              <option >Baja</option>
              <option >Media-Baja</option>
              <option >Alta</option>
              
            </datalist>
                  
                  
          </div>

        </div> <br>
        <div class="row">
          <div class="col">
            <label for="inputState"><h5>Como Califica El Nivel De La Educación Del Programa Matriculado</h5></label>
            <input list="tipdev" name="calificacion_del_programa" class="form-control" >
              <datalist id="tipdev">
                <option >Buena</option>
                <option >Mala</option>
                
              </datalist>
                    
            
          </div>
          <div class="col">
            <label for="inputZip"><h5>¿Cuantas Asignaturas Tiene Matriculada?</h5> </label> <br></br>
            <input type="number" class="form-control" id="inputZip" placeholder="" name="cuantas_asignaturas_tiene"> 
          </div>

          
        </div>

        <br><br>
        <input type="submit" class="btn btn-danger" value="Sign In">

        </div>
      
      </form>
      </div> 

      




</body>

<html>  