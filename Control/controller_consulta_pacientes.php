<?php
session_start();
            
            $_SESSION['psicologoNome'] ;           
            $_SESSION['psicologoSenha'];

if(!isset($_SESSION["psicologoNome"]) || !isset($_SESSION["psicologoSenha"])){
    
        header("Location: frm_login.html");
                
        exit;
		}else{
		
?>
<html lang="pt-br">
<!DOCTYPE html>
<head>
	<title>Consultar Pacientes</title>
	<br>
	<meta charset="UTF-8">
	<!--===============================================================================================-->	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../View/images/icons/favicon.png"/>
	<!--===============================================================================================-->	
    <link rel="stylesheet" href="../View/https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/vendor/bootstrap/css/bootstrap.min.css">	
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/css/util.css">
	<link rel="stylesheet" type="text/css" href="../View/css/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../View/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
</head>
<body>
<form action="../View/frm_perfil_psicologo.php">
        <input type="submit" class="customPrevBtn btn btn-dark m-1" value="Voltar" name="voltar"> 
        </form>
    <div class="container">
        <h1>Pacientes</h1><br>
      
<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Paciente</th>
					<th>Telefone</th>
                    <th>Gênero</th>
					<th>Data</th>
                    <th>Horário</th>
					<th>Psicologo</th>
					<th>CRP</th>
                </tr>
            </thead>
  <?php 
    include_once("../Model/conexao.php");
    
    $conn= conectar();  

  $pacientes = "SELECT * FROM pacientes ORDER BY id";
    
	$resultado_pacientes = mysqli_query($conn, $pacientes);
        
	while($row = mysqli_fetch_assoc($resultado_pacientes)){ 
	
 ?>
  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['paciente']; ?></td>
                    <td><?php echo $row['telefone']; ?></td>
                    <td><?php echo $row['genero']; ?></td>
                    <td><?php echo $row['data']; ?></td>
                    <td><?php echo $row['horario']; ?></td> 
                    <td><?php echo $row['psicologo']; ?></td>
                    <td><?php echo $row['FK_CRP']; ?></td> 
  </tr>
  <?php }?>    
			</table>
			<table class="table">
            <thead>
                <tr>
                    <th>Nome do Psicologo</th>
                    <th>Consultas</th>                   
                </tr>
            </thead>
			<?php
              include_once("../Model/conexao.php");
              $conn= conectar();
              $con_psicologo = "SELECT COUNT(P.FK_CRP) as pacientes, P.psicologo FROM pacientes P INNER JOIN psicologo S ON FK_CRP = crp GROUP BY FK_CRP;";

          	  $resultado_psicologo = mysqli_query($conn, $con_psicologo);
          	    while($row_psicologo = mysqli_fetch_assoc($resultado_psicologo)){
           ?>
            <tr>
              <td align="left"><?php echo $row_psicologo['psicologo'];?></td>
          	  <td align="left"><?php echo $row_psicologo['pacientes'];?></td>
            </tr>
            <?php }?>
          </table>
		</div>
	<script src="../View/js/jquery-3.3.1.min.js"></script>
  <script src="../View/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../View/js/jquery-ui.js"></script>
  <script src="../View/js/popper.min.js"></script>
  <script src="../View/js/bootstrap.min.js"></script>
  <script src="../View/js/owl.carousel.min.js"></script>
  <script src="../View/js/jquery.stellar.min.js"></script>
  <script src="../View/js/jquery.countdown.min.js"></script>
  <script src="../View/js/bootstrap-datepicker.min.js"></script>
  <script src="../View/js/jquery.easing.1.3.js"></script>
  <script src="../View/js/aos.js"></script>
  <script src="../View/js/jquery.fancybox.min.js"></script>
  <script src="../View/js/jquery.sticky.js"></script>
  <script src="../View/js/main.js"></script>
	</body>
</html>
<?php }?>