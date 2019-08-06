<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Gt Project - Meu perfil</title>

	<link href="../img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="../img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="../img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="../img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	 <link rel="shortcut icon" href="../img/logo-2-mob.png">
	<link href="../img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<link rel="stylesheet" href="../css/lib/lobipanel/lobipanel.min.css">
<link rel="stylesheet" href="../css/separate/vendor/lobipanel.min.css">
<link rel="stylesheet" href="../css/lib/jqueryui/jquery-ui.min.css">
<link rel="stylesheet" href="../css/separate/pages/widgets.min.css">
    <link rel="stylesheet" href="../css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="../css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/separate/pages/profile-2.min.css">
    <link rel="stylesheet" href="../css/lib/bootstrap-sweetalert/sweetalert.css">
<link rel="stylesheet" href="../css/separate/vendor/sweet-alert-animations.min.css">
     <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	   <script>
    	$(document).ready(function(){
			    $('#file-input').on('change', function(){ //on file input change
			        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
			        {
			            $('#thumb-output').html(''); //clear html of output element
                        var data = $(this)[0].files; //this file data
			            
			            $.each(data, function(index, file){ //loop though each file
			                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
			                    var fRead = new FileReader(); //new filereader
			                    fRead.onload = (function(file){ //trigger function on successful read
			                    return function(e) {
			                        var img = $('<img alt=""/>').addClass('thumb').attr('src', e.target.result); //create image element 
			                        $('#thumb-output').append(img); //append image to output element
			                    };
			                    })(file);
			                    fRead.readAsDataURL(file); //URL representing the file's data.
			                }
			            });
			            
			        }else{
			           // alert("Seu navegador não suporta a API!"); //if File API is absent
			        }
			    });
			});
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
	<script src="../../js/maskedinput.js" type="text/javascript"></script>
<script> 
jQuery.noConflict();
jQuery(function($){
     $("#cnpj").mask("99.999.999/9999-99");
     $("#cpf").mask("999.999.999-99");
     $("#tel").mask("(99) 9999-9999");
     $("#cel").mask("(99) 99999-9999");
});    
    </script>
</head>

<body class="horizontal-navigation">

	<?php
        $menu=0;
        include "naveg.php";        
    ?>
	<div class="page-content">
	    <div class="container-fluid">
        <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Meu perfil</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="">Meu perfil</a></li>&nbsp;&nbsp;/
								
							</ol>
						</div>					
					</div>
				</div>
			</header>
        
                                
                            
	        <div class="row">
          <div class="col-lg-12">
	          <div class="box-typical box-typical-padding">
	           <form role="form" action="../../../controller/usuario.php" method="POST" enctype='multipart/form-data' id="formularioE">
	          <section class="box-typical profile-side-user">
							<button type="button" class="avatar-preview avatar-preview-128">
							    <?php
                                    $imgUsuario=$listar[1];
                                    if($imgUsuario==""){
                                        echo '<span id="thumb-output"><img src="../img/avatar-2-256.png" alt="" /></span>';
                                    }
                                    else{
                                        echo '<span id="thumb-output"><img src="../img/imagensUsuarios/'.$imgUsuario.'" alt=""/></span>';
                                    }
                                ?>								
								<span class="update" >
									<i class="font-icon font-icon-picture-double"></i>
									Atualizar foto
								</span>
								<input type="file" id="file-input" name="imgUsuario"/>
							</button>							
						</section>
	           <div class="row">
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInput">Razão Social/Nome*</label>
							<input type="text" class="form-control" id="exampleInput" <?php echo "value='".$listar[0]."'"; ?> name="nome" style="text-transform: capitalize;">
							
						</fieldset>
					</div>
				</div>
	          <div class="row">
					<div class="col-lg-6" >
						<fieldset class="form-group">
							
							<?php
                                $tamanhoCpfCnpj=strlen($listar[2]);
                                if($tamanhoCpfCnpj>14){
                                    echo '<label class="form-label " for="exampleInput">Cnpj*</label><input type="text" class="form-control" id="cnpj" value="'.$listar[2].'" name="cpfCnpj" onkeyup="verificarCpfCnpj(this.value)">';
                                }
                                else{
                                    echo '<label class="form-label " for="exampleInput">Cpf*</label><input type="text" class="form-control" id="cpf" value="'.$listar[2].'" name="cpfCnpj" onkeyup="verificarCpfCnpj(this.value)" >';
                                }                           
                            ?>
                            <span id="msgCpfCnpj"></span>						
						</fieldset>
					</div>
					<div class="col-lg-6" >
						<fieldset class="form-group">
							<label class="form-label " for="exampleInputEmail1">E-mail*</label>
							<input type="email" class="form-control" id="exampleInputEmail1" <?php echo "value='".$listar[3]."'"; ?> name="email" onkeyup="verificarEmail(this.value)" >
							 <span id="msgEmail"></span>
						</fieldset>
					</div>
				</div>
              <div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInput">Telefone</label>
							<input type="text" class="form-control" id="tel" <?php echo "value='".$listar[4]."'"; ?> name="telefone">
							
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInputEmail1">Celular*</label>
							<input type="text" class="form-control" id="cel" <?php echo "value='".$listar[5]."'"; ?> name="celular">
						</fieldset>
					</div>
				</div>
             <div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInput">Facebook</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Link do perfil" <?php echo "value='".$listar[7]."'"; ?> name="facebookPerfil">
								<i class="font-icon font-icon-fb-fill"></i>
							</div>
							
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInputEmail1">Github</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Link do perfil" <?php echo "value='".$listar[8]."'"; ?> name="githubPerfil">
								<i class="font-icon font-icon-github"></i>
							</div>
						</fieldset>
					</div>
				</div>
              <div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInput">LinkedIn</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Link do perfil" <?php echo "value='".$listar[9]."'"; ?> name="linkedinPerfil">
								<i class="font-icon font-icon-in-fill"></i>
							</div>
							
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label " for="exampleInputEmail1">Twitter</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Link do perfil" <?php echo "value='".$listar[10]."'"; ?> name="twitterPerfil">
								<i class="font-icon font-icon-tw-fill"></i>
							</div>
						</fieldset>
					</div>
				</div>
             <div class="row">
                <div class="col-lg-6">
                <input type="hidden" <?php echo "value='".$listar[6]."'"; ?> name="hash"/>
                <button type="button" class="btn btn-inline" onclick="verificarFormulario()">Salvar</button>  <button type="button" class="btn btn-inline"><i class="fa fa-lock"></i> Solicitar mudança de senha</button>
                <input type="hidden" class="swal-btn-success" data-dismiss="modal" id="cadOk">
                <input type="hidden" name="alterarPerfil"/>
                 </div>
                 
             </div>
                  </form>
              </div>
	        </div><!--.row-->	 	       
	    </div><!--.container-fluid-->
        </div>
	</div><!--.page-content-->

	<script src="../js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="../js/lib/popper/popper.min.js"></script>
	<script src="../js/lib/tether/tether.min.js"></script>
	<script src="../js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>

	<script type="text/javascript" src="../js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="../js/lib/match-height/jquery.matchHeight.min.js"></script>
	
    <script src="../js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
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
					text: "Perfil alterado com sucesso!",
					type: "success",
					confirmButtonClass: "btn-success",
					confirmButtonText: "Fechar"
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
           function verificarEmail(email) {
            $.ajax
         ({
         type:'POST',
         url:'../../../controller/usuario.php',
         data:'ajaxEmail='+email,
         success:function(html)
         {
         
         $('#msgEmail').html(html);
         
         }
		  });
        }
         function verificarCpfCnpj(cpfCnpj) {
            $.ajax
         ({
         type:'POST',
         url:'../../../controller/usuario.php',
         data:'ajaxCpfCnpj='+cpfCnpj,
         success:function(html)
         {
         
         $('#msgCpfCnpj').html(html);
         
         }
		  });
        }
            function verificarFormulario(){
        
      
                    var verificaEmail=document.getElementById("msgEmail").innerHTML;
                    if(verificaEmail==""){
                        var verificaCpfCnpj=document.getElementById("msgCpfCnpj").innerHTML;
                        if(verificaCpfCnpj==""){
                            var form = document.getElementById("formularioE");
                            form.submit();
                        }
                        else{
                            
                        }
                        
                    }
                    else{
                        
                    }                    
                }       
            
	</script>
	 <?php
        if(isset($_SESSION['edit']) && $_SESSION['edit']==true){
            unset($_SESSION["edit"]);  
            session_write_close();
            echo "<script>$(function () { $('#cadOk').trigger('click');});</script>";
        }       
    ?>

<script src="../js/app.js"></script>
</body>
</html>