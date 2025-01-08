<?php  
      
if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   

$id = $_POST['id'];


$excluir = new crud();

$excluir->excluir_Pacientes($id);
}      
   