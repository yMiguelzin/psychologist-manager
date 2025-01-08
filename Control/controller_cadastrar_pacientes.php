<?php

if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   
 
  $paciente= $_POST["paciente"];
  $telefone = $_POST["telefone"];
  $genero = $_POST['genero'];
  $id = $_POST['id'];
  $data = $_POST['data'];
  $horario = $_POST['horario'];
  $psicologo = $_POST['psicologo'];
  $FK_CRP = $_POST['FK_CRP'];

$inserir = new crud();

$inserir->inserir_Pacientes($paciente,$telefone,$genero,$id,$data,$horario,$psicologo,$FK_CRP); 
 
}