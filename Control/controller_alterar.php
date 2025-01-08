<?php  
      
if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   

  $id_paciente= $_POST['id'];
  $paciente= $_POST["paciente"];
  $telefone = $_POST["telefone"];
  $genero = $_POST['genero'];
  $data = $_POST['data'];
  $horario = $_POST['horario'];
  $psicologo = $_POST['psicologo'];
  $crp = $_POST['FK_CRP'];


$alterar = new crud();

$alterar->alterar_Pacientes($id_paciente,$paciente,$telefone,$genero,$data,$horario,$psicologo,$crp);
}      
   
   