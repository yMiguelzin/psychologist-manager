<?php  
 $botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);    
 
if(isset($botao)){   
    
    
 include_once '../Model/crud.php' ;   
 
$nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$psicologo = new crud();
$psicologo->selecionar_Psicologo($nome,$senha);
        
}      
   
