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
  <head>
	<title>Inicial Psicólogos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<div class="container-login100" style="background-image: url('images/bg.jpg');">
  <div class="site-wrap">
    <div class="intro-section" id="home-section">   
      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">                
                  <h1><font size="6.0">
				  <?php echo "<span>"; echo "Bem Vindo! Psicologo(a), "; echo "</span>"; echo "<span>"; echo $_SESSION['psicologoNome']; echo "</span>";?>
				  </h1></font>       
                </div>
				<p>
			Cadastrar Pacientes.
            <a href="frm_cadastro_pacientes.php" class="customPrevBtn btn btn-dark m-1">Inserir</a>
			<br>
			Consultar Pacientes.
			<a href="../Control/controller_consulta_pacientes.php" class="customPrevBtn btn btn-dark m-1">Consulte</a>
			<br>
			Alterar Consultas.
            <a href="frm_alterar.php" class="customPrevBtn btn btn-dark m-1">Alterar</a>
			<br>
			Excluir Consultas.
            <a href="frm_excluir.php" class="customPrevBtn btn btn-dark m-1">Excluir</a>
			<br>
			
          </div>
        </div>
	<form action="sair.php">
		<button type="submit" class="customPrevBtn btn btn-dark m-1" name="deslogar" >Sair</button>
	</form>
    </div>
        </div>  
          </div>
        </div>
      </div>
    </div>        
</div>   
<div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>  
  </body>
</html>
<?php }?>