<?php // o crud é onde ocorre a maior parte do back-end onde temos diversos inserts,updates,deletes,select onde podemos criar os campos para serem validados e confirmados e redirecionados.

require "conexao.php";

 session_start(); 

class crud {   
 
   function selecionar_Psicologo($psicologo,$senha){
       
   
        $conn= conectar();         
 
        $result_psicologo = "SELECT * FROM psicologo WHERE psicologo= '$psicologo' && senha = '$senha' LIMIT 1";
        
        $resultado_psicologo = mysqli_query($conn, $result_psicologo);
        
        $resultado = mysqli_fetch_assoc($resultado_psicologo);
        
       
        if(isset($resultado)){
		
            $_SESSION['psicologoNome'] = $resultado['psicologo'];            		
            $_SESSION['psicologoSenha'] = $resultado['senha'];  

            header("Location: ../View/frm_perfil_psicologo.php");           
   
        
        }else{            
       
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/frm_login.html';</script>";
         
    }
  } 
function inserir_Pacientes($paciente,$telefone,$genero,$id,$data,$horario,$psicologo,$FK_CRP){ 

    $conn = conectar();   
 
   $sql = "INSERT INTO pacientes(paciente,telefone,genero,id,data,horario, psicologo,FK_CRP) VALUES ('$paciente','$telefone','$genero','$id','$data','$horario', '$psicologo','$FK_CRP')";   

    mysqli_query($conn,$sql);

     echo"<script language='javascript' type='text/javascript'>alert('Consulta marcada com sucesso!');window.location.href='../View/frm_cadastro_pacientes.php';</script>";

     
 
   }

   public function excluir_Pacientes($id){

    $conn= conectar();   
    
    $conf_id= mysqli_query($conn, "SELECT * FROM pacientes WHERE id = '$id'");	
    
    if(mysqli_num_rows($conf_id) == 0){
              
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir');window.location.href='../View/frm_excluir.php';</script>";
    }
           else{	
    
                  $result_paciente = "DELETE FROM pacientes WHERE id = '$id'";
                  
                  mysqli_query($conn, $result_paciente);
      
      if(mysqli_affected_rows($conn) != 0){
          
        echo"<script language='javascript' type='text/javascript'>alert('Paciente excluído com sucesso!');window.location.href='../View/frm_excluir.php';</script>";
                     
					 
              }else{
                  
                  header("Location:../view/frm_excluir.php");
                   
                  
			}
    }    
}


   public function alterar_Pacientes($id_paciente,$paciente,$telefone,$genero,$data,$horario,$psicologo,$crp){

    $conn= conectar(); 
    
  	$pegaid = mysqli_query($conn, "SELECT * FROM pacientes WHERE id = '$id_paciente'");	

         if(mysqli_num_rows($pegaid) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este código do paciente não esta cadastrado em nossos registros');window.location.href='../View/frm_alterar.php'</script>";

	      }else{		

		
          $result_paciente = "UPDATE pacientes SET paciente = '$paciente', telefone = '$telefone', genero = '$genero', data = '$data', horario = '$horario', psicologo = '$psicologo', FK_CRP = '$crp 'WHERE id = '$id_paciente'";	

         mysqli_query($conn,$result_paciente);

             if(mysqli_affected_rows($conn) != 0){
            echo "

                 <script language='javascript' type='text/javascript'>alert('Paciente alterado com sucesso!');window.location.href='../View/frm_alterar.php'</script>";
                 
            
             }else{
                  echo " 
                   <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este paciente');window.location.href='../View/frm_alterar.php'</script>";
                     
                          
              }
        }
   }
}
  

  


