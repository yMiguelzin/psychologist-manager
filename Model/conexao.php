<?php

    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'psicologia');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
    }
    

    


}


// faz a conexão com o banco de dados.
// e valida se a conexão está sendo feita.