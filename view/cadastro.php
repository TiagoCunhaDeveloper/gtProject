<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Gt Project - Cadastrar-se</title>
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
      <style>
		#razao_nome{
			text-transform: capitalize;
		}
	</style>
	<noscript>
	<meta http-equiv="Refresh" content="0;URL=build/erros/erroJava.html" />
	</noscript>
	<script>
        function mascaraMutuario(o,f){
    v_obj=o
    v_fun=f
    setTimeout('execmascara()',1)
}

function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

function cpfCnpj(v){

    //Remove tudo o que não é dígito
    v=v.replace(/\D/g,"")
	if (v.length <= 14) { //CPF

        //Coloca um ponto entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d)/,"$1.$2")

        //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        v=v.replace(/(\d{3})(\d)/,"$1.$2")

        //Coloca um hífen entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

    } else { //CNPJ

        //Coloca ponto entre o segundo e o terceiro dígitos
        v=v.replace(/^(\d{2})(\d)/,"$1.$2")

        //Coloca ponto entre o quinto e o sexto dígitos
        v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")

        //Coloca uma barra entre o oitavo e o nono dígitos
        v=v.replace(/\.(\d{3})(\d)/,".$1/$2")

        //Coloca um hífen depois do bloco de quatro dígitos
        v=v.replace(/(\d{4})(\d)/,"$1-$2")

    }

    return v
}
        function pessoa(n){
            if(n==1){
                 document.getElementById("cnpjC").style.display='none';
                 document.getElementById("cnpj").value='';
                document.getElementById("conteudoIn").innerHTML='<input class="form-control" name="cpf" type="text" minlength="14" value="<?php if(isset($cnpj_cpf)){ echo $cnpj_cpf; } ?>" onkeypress="mascaraMutuario(this,cpfCnpj)"  maxlength="14" onblur="clearTimeout()"  required placeholder="Digite o cpf" id="cpf" onkeyup="verificarCpfCnpj(this.value)">';
                document.getElementById("cpf").focus();
            }
            else{
                 document.getElementById("conteudoIn").innerHTML='';
                 document.getElementById("cnpjC").style.display='block';
                 document.getElementById("cnpj").focus();
                 $('#cnpj').select();
            }
        }
         function verificarConfSenha(senha) {
            var senha_digitada = document.getElementById("inputSenha").value;
            
        var tamanhoSenha=senha_digitada.length;
            if (senha_digitada != senha) {
             
                document.getElementById("msgConfSenha").innerHTML = '<p class="help-block" style="color:red">As senhas não conferem</p>';
                
                      if(tamanhoSenha<8){
            document.getElementById("spanSenha").innerHTML='<p class="help-block" style="color:red">Mínimo de 8 caracteres</p>';
        }
        else{
           document.getElementById("spanSenha").innerHTML=''; 
        }
            } else {
                   if(tamanhoSenha<8){
            document.getElementById("spanSenha").innerHTML='<p class="help-block" style="color:red">Mínimo de 8 caracteres</p>';
        }
        else{
           document.getElementById("spanSenha").innerHTML=''; 
        }
                document.getElementById("msgConfSenha").innerHTML = '';
            } 
        
        }
    </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
	<script src="js/maskedinput.js" type="text/javascript"></script>
<script type="text/javascript"> 
jQuery.noConflict();
jQuery(function($){
     $("#cnpj").mask("99.999.999/9999-99");
     $("#tel").mask("(99) 9999-9999");
     $("#cel").mask("(99) 99999-9999");
    
});
    function focar(){
        document.getElementById('cnpj').focus();
         $('#cnpj').select();
    }
    function verificarFormulario(){
        
        var senha = document.getElementById("inputSenha").value;
        var confSenha = document.getElementById("confSenha").value;
        var tamanhoSenha=senha.length;
        if(tamanhoSenha<8){
            document.getElementById("spanSenha").innerHTML='<p class="help-block" style="color:red">Mínimo de 8 caracteres</p>';
        }
        else{
            document.getElementById("spanSenha").innerHTML='';
            if(senha!=confSenha){
                   document.getElementById("msgConfSenha").innerHTML = '<p class="help-block" style="color:red">As senhas não conferem</p>';
                    document.getElementById("inputSenha").focus();
            }
            else{
                document.getElementById("msgConfSenha").innerHTML = '';
                var campoSenha= document.getElementById("imageCanvas").value;
                if(campoSenha == "data:image/png;base64,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"){
                     document.getElementById("spanAssinatura").innerHTML='<p class="help-block" style="color:red">Campo obrigatório</p>';
                }
                else{
                    document.getElementById("spanAssinatura").innerHTML='';
                    var verificaEmail=document.getElementById("msgEmail").innerHTML;
                    if(verificaEmail==""){
                        var verificaCpfCnpj=document.getElementById("msgCpfCnpj").innerHTML;
                        if(verificaCpfCnpj==""){
                            var form = document.getElementById("form");
                            form.submit();
                        }
                        else{
                            
                        }
                        
                    }
                    else{
                        
                    }                    
                }             
            }
          
            
        }
       
    }
    
</script>
 <style>
     .signature-line {
  position: absolute;
  top: 0px;
  
  height: 110px;
  width: 500px;
  pointer-events: none;
  background-color: transparent;
  border-bottom: 1px dotted #555;
}
      </style>
     
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container">
        <a class="navbar-brand" href="index.html">Gt Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <!--<div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="../index.html" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="contact.html" class="nav-link">Entrar</a></li>
           
          </ul>
        </div>-->
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
    <section id="c"></section>
    <div class="container">
    <form action="../controller/usuario.php" method="POST" id="form">
     <div class="row">
        <div class="col-md-12 ">
               <p class="help-block"><b>Campos com * são obrigatórios</b></p>
             <input type="text" class="form-control" placeholder="Razão Social/Nome*" autofocus id="razao_nome" required name="nome">
             
         </div>
        </div><br>
      <div class="row">
        <div class="col-md-6 pr-md-5">
         
           <div class="form-group">
                                            <label><b>Pessoa*</b></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="Física" onchange="pessoa(1)">Física
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="Juridíca" onchange="pessoa(2)" checked="">Juridíca
                                            </label>
                                            
                                        </div>
            <div class="form-group">
            	<span id="conteudoIn">
															
													
														</span>
           <span id="cnpjC">	 <input class="form-control" name="cnpj" type="text" minlength="18" maxlength="18" placeholder="Digite o cnpj" id="cnpj" onclick="focar()" onkeyup="verificarCpfCnpj(this.value)"></span> <span id="msgCpfCnpj"></span>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Telefone" id="tel" name="telefone">
              
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Senha* (Mínimo de 8 caracteres)" required id="inputSenha" onchange="verificarConfSenha(this.value)" minlength="8" name="senha">
              <span id="spanSenha"></span>
              
            </div>
            <div class="row">
                                                   
                                                        
                                                    
													    <div class="form-group col-md-12">
                                           <div class="form-group">
                                            <label><b>Assinatura*</b> </label>
                                              <canvas id="paper" width="500" height="140" style="border:1px solid #ccc"></canvas>
<div class="signature-line"></div>
<span id="spanAssinatura"></span>
<button type="button" class="btn btn-inline btn-secondary" id="canvasClear">Limpar assinatura</button>
                                              <p><input type="checkbox" required=""> Declaro que essa assinatura representa de forma legal a minha assinatura. <a href="Contrato cessão software.pdf" target="_blank">Saber mais.</a> <br>
                                              <input type="checkbox" name="emailAssinatura"> Gerar código para representar assinatura. <a href="Contrato cessão software.pdf" target="_blank">Saber mais.</a><br> 
                                              <input type="checkbox" required="" id="canvas2pngTrim"> Eu li e aceito os <a href="Contrato cessão software.pdf" target="_blank">termos de uso sobre assinatura.</a> </p>
                                        </div>
                                            
                                           
                                        </div>
                                        
													</div>
             
													
           
            
            
        
        
        </div>

        <div class="col-md-6">
             <br><br>
              <div class="form-group">
              <input type="email" class="form-control" placeholder="E-mail*" onkeyup="verificarEmail(this.value)" required name="email">
               <span id="msgEmail"></span>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Celular*" required id="cel" name="celular">
              
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Confirmar senha*" required onkeyup="verificarConfSenha(this.value)" id="confSenha">
                <span id="msgConfSenha"></span>
            </div>
        </div>
      </div>
      <div class="row">
													    <div class="form-group col-md-12">
                                           <h5> <input type="checkbox" required=""> Eu li e aceito os <a href="" target="_blank">termos de uso</a> </h5>
                                           
                                              
                                            
                                           
                                        </div>
													</div>
      <div class="row">
          <div class="col-md-12">
              <div class="form-group">
                  <input type="button" value="Salvar" class="btn btn-primary py-3 px-5" id="botaoSalvar" onclick="verificarFormulario()"><input type="hidden" name="cadastrar">&nbsp;&nbsp;&nbsp;<input type="button" value="Voltar" class="btn btn-primary py-3 px-5" onclick="window.location.href='login.php'">           
              
            <input type="hidden" id="imageCanvas" name="as"/>           
            </div>
          </div>
      </div>
        </form>
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
     <script src='https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.11/fabric.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.28/pdfmake.min.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.20/build/vfs_fonts.js'></script>

     <script>
          var canvas = new fabric.Canvas('paper', { isDrawingMode: true });
var pencil = new fabric.PencilBrush(canvas);
pencil.strokeLineJoin = "miter";
canvas.freeDrawingBrush = pencil;
canvas.freeDrawingBrush.width = 3;
canvas.freeDrawingBrush.color = "#000000";

$("#canvas2png").click(function(){
    // to PNG
    window.open(canvas.toDataURL('png'));
});

$("#canvas2pngTrim").click(function(){
    document.getElementById('imageCanvas').value = canvas.toDataURL('png');  
});

$("#botaoSalvar").mouseover(function(){
    document.getElementById('imageCanvas').value = canvas.toDataURL('png');  
});         
         
$("#canvasClear").click(function(){
    canvas.clear();
});

// Enable drawing to canvas
canvas.isDrawingMode = true;

$("#downloadPdf").click(function(){
  var dd = {
    
    content: [
      {text: 'Declaration of awesomeness', fontSize: 20},
      'I hereby declare that frontend devs are awesome',
      'Signature:',
      {
        image: 'podpis',
        width: 200
      },
    ],
    images: {
      podpis: canvas.toDataURL('png')
    }

  }
  
  var pdf = pdfMake.createPdf(dd)
  pdf.download("petrolPogodba.pdf");
});

function trim(c) {
  var ctx = c.getContext('2d'),
    copy = document.createElement('canvas').getContext('2d'),
    pixels = ctx.getImageData(0, 0, c.width, c.height),
    l = pixels.data.length,
    i,
    bound = {
      top: null,
      left: null,
      right: null,
      bottom: null
    },
    x, y;

  for (i = 0; i < l; i += 4) {
    if (pixels.data[i+3] !== 0) {
      x = (i / 4) % c.width;
      y = ~~((i / 4) / c.width);
  
      if (bound.top === null) {
        bound.top = y;
      }
      
      if (bound.left === null) {
        bound.left = x; 
      } else if (x < bound.left) {
        bound.left = x;
      }
      
      if (bound.right === null) {
        bound.right = x; 
      } else if (bound.right < x) {
        bound.right = x;
      }
      
      if (bound.bottom === null) {
        bound.bottom = y;
      } else if (bound.bottom < y) {
        bound.bottom = y;
      }
    }
  }
    
  var trimHeight = bound.bottom - bound.top,
      trimWidth = bound.right - bound.left,
      trimmed = ctx.getImageData(bound.left, bound.top, trimWidth, trimHeight);
  
  copy.canvas.width = trimWidth;
  copy.canvas.height = trimHeight;
  copy.putImageData(trimmed, 0, 0);
  
  // open new window with trimmed image:
  return copy.canvas;
}
           function verificarEmail(email) {
            $.ajax
         ({
         type:'POST',
         url:'../controller/usuario.php',
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
         url:'../controller/usuario.php',
         data:'ajaxCpfCnpj='+cpfCnpj,
         success:function(html)
         {
         
         $('#msgCpfCnpj').html(html);
         
         }
		  });
        }
      </script>
  </body>
</html>