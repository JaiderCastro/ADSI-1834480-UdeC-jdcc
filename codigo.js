$("#404").click(function(){
   
  Swal.fire({
    title: 'Registro Borrado',
    showConfirmButton: false,
    timer: 15500

  }).then((result) =>{
        if(result.value){
          window.location.href = "delet.php";
      }
    })
});