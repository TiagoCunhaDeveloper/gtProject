<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gt Project - Entrar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
       <link rel="shortcut icon" href="build/img/logo-2-mob.png">
        <link rel="stylesheet" href="build/css/lib/bootstrap-sweetalert/sweetalert.css">
<link rel="stylesheet" href="build/css/separate/vendor/sweet-alert-animations.min.css">
    <noscript>
	<meta http-equiv="Refresh" content="0;URL=build/erros/erroJava.html" />
	</noscript>
     </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container">
        <a class="navbar-brand" href="index.html"><b>Gt Project</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
           <!--<ul class="navbar-nav ml-auto">
           <li class="nav-item"><a href="../index.html" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="contact.html" class="nav-link">Entrar</a></li>
           
          </ul>-->
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-cover" style="background-image: url(images/bg_1.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-75">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500"><b>Entrar</b></h1>
              <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600"><b>Gerencie seus projetos de maneira simplificada e tenha uma documentação profissional.</b></h2>    
            <!-- <p data-aos="fade-up"  data-aos-delay="700"><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white px-4 py-3" data-toggle="modal" data-target="#reservationModal">Go Get This Template</a></p> -->
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    
 <div class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="../controller/usuario.php" method="POST">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="E-mail" autofocus name="email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="**********" name="senha" required>
              
            </div>
            <?php
              if(isset($_SESSION['login']) && $_SESSION['login']==false){
                unset($_SESSION["login"]);  
                session_write_close();
                echo '<p class="help-block" style="color:red">E-mail e/ou senha incorretos!</p>';
              }     
            ?>
            <p class="help-block"><a href="esqueci_minha_senha.php">Esqueci minha senha</a> 
            <div class="form-group">
              <input type="submit" value="Logar-se" class="btn btn-primary py-3 px-5" name="logar">&nbsp;&nbsp;&nbsp;<input type="button" value="Cadastrar-se" class="btn btn-primary py-3 px-5" onClick="window.location.href='cadastro.php#c'"> <input type="hidden" class="swal-btn-success" data-dismiss="modal" id="cadOk">
            </div>
            
          </form>
        
        </div>

        <div class="col-md-6" style="background-image: url(images/apresentacaoLogin.png);background-size:500px 300px;">
             
        </div>
      </div>
    </div>
  </div>

 
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/main.js"></script>
    <script src="build/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
	<script>
		$(document).ready(function() {
			$('.swal-btn-basic').click(function(e){
				e.preventDefault();
				swal("Here's a message!");
			});

			$('.swal-btn-text').click(function(e){
				e.preventDefault();
				swal({
					title: "Here's a message!",
					text: "It's pretty, isn't it?"
				});
			});

			$('.swal-btn-success').click(function(e){
				e.preventDefault();
				swal({
					title: "Sucesso!",
					text: "Cadastro efetuado com sucesso!",
					type: "success",
					confirmButtonClass: "btn-success",
					confirmButtonText: "Entrar"
				});
			});

			$('.swal-btn-warning').click(function(e){
				e.preventDefault();
				swal({
							title: "Are you sure?",
							text: "Your will not be able to recover this imaginary file!",
							type: "warning",
							showCancelButton: true,
							cancelButtonClass: "btn-default",
							confirmButtonClass: "btn-warning",
							confirmButtonText: "Warning",
							closeOnConfirm: false
						},
						function(){
							swal({
								title: "Deleted!",
								text: "Your imaginary file has been deleted.",
								type: "success",
								confirmButtonClass: "btn-success"
							});
						});
			});

			$('.swal-btn-cancel').click(function(e){
				e.preventDefault();
				swal({
							title: "Are you sure?",
							text: "You will not be able to recover this imaginary file!",
							type: "warning",
							showCancelButton: true,
							confirmButtonClass: "btn-danger",
							confirmButtonText: "Yes, delete it!",
							cancelButtonText: "No, cancel plx!",
							closeOnConfirm: false,
							closeOnCancel: false
						},
						function(isConfirm) {
							if (isConfirm) {
								swal({
									title: "Deleted!",
									text: "Your imaginary file has been deleted.",
									type: "success",
									confirmButtonClass: "btn-success"
								});
							} else {
								swal({
									title: "Cancelled",
									text: "Your imaginary file is safe :)",
									type: "error",
									confirmButtonClass: "btn-danger"
								});
							}
						});
			});

			$('.swal-btn-custom-img').click(function(e){
				e.preventDefault();
				swal({
					title: "Sweet!",
					text: "Here's a custom image.",
					confirmButtonClass: "btn-success",
					imageUrl: 'img/smile.png'
				});
			});

			$('.swal-btn-info').click(function(e){
				e.preventDefault();
				swal({
					title: "Are you sure?",
					text: "Your will not be able to recover this imaginary file!",
					type: "info",
					showCancelButton: true,
					cancelButtonClass: "btn-default",
					confirmButtonText: "Info",
					confirmButtonClass: "btn-primary"
				});
			});

			$('.swal-btn-input').click(function(e){
				e.preventDefault();
				swal({
					title: "An input!",
					text: "Write something interesting:",
					type: "input",
					showCancelButton: true,
					closeOnConfirm: false,
					inputPlaceholder: "Write something"
				}, function (inputValue) {
					if (inputValue === false) return false;
					if (inputValue === "") {
						swal.showInputError("You need to write something!");
						return false
					}
					swal("Nice!", "You wrote: " + inputValue, "success");
				});
			});
		});
	</script>
	 <?php
        if(isset($_SESSION['registrer']) && $_SESSION['registrer']==true){
            unset($_SESSION["registrer"]);  
            session_write_close();
            echo "<script>$(function () { $('#cadOk').trigger('click');});</script>";
        }       
    ?>
  </body>
</html>