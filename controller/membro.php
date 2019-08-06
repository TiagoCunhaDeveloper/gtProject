<?php
    //Adicionar membro a uma equipe
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addMembro'])){
        include "../model/membro.class.php";
        session_start();
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
       
        $fkEquipes=$_POST['equipes'];
        $bodytag = str_replace('{"matchedKey":"email","',"",$fkEquipes);
        $final = str_replace(',"group":"teams"}',"",$bodytag);
        $final1 = str_replace('"name":"',"",$final);
        $final2 = str_replace('"email":"',"",$final1);
        $final3 = str_replace('id":',"",$final2);
        $final4 = str_replace('"',"",$final3);
        $final5 = str_replace('[',"",$final4);
        $final6 = str_replace(']',"",$final5);
        $teste=explode (",",$final6);
        $result = count($teste)-3;
        $membro= new Membro();
        for ($i = 0;$i<=$result;) {
            @$finalMsm=$teste[$i];
            $i=$i+3;
            $jaFoiCadastrada=$membro->verificarExistencia($_POST['idMembro'],$finalMsm);
            if($jaFoiCadastrada >=1){
                
            }
            else{
                $membro->setFkUsuario($_POST['idMembro']);
                $membro->setFkEquipe($finalMsm);
                $membro->setPerfil(0);
                $membro->setDataInclusao($date);
                $membro->inserir();
            }
        }
        $_SESSION['addMembro']=true;
        header("Location: ../view/build/cli/equipes.php");
    }
    // Listar membros Adm na edição de equipe
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxMembroAdm'])){
        include "../model/membro.class.php";
        $membro= new Membro();
        $listarMembros=$membro->listarMembrosEquipes($_POST['ajaxMembroAdm']);
        foreach($listarMembros as $lm){
            $idMembro=$lm['idMembro'];
            $fkUsuario=$lm['fkUsuario'];
            $perfil=$lm['perfil'];
            $nome=$lm['nome'];
            $email=$lm['email'];
            $imgUsuario=$lm['imgUsuario'];
            $facebookPerfil=$lm['facebookPerfil'];
            $githubPerfil=$lm['githubPerfil'];
            $linkedinPerfil=$lm['linkedinPerfil'];
            $twitterPerfil=$lm['twitterPerfil'];
            if($facebookPerfil!==""){
                $f='onclick="window.open(\''.$facebookPerfil.'\')"';
            }
            else{
                $f='';
            }
            if($githubPerfil!=""){
                $g='onclick="window.open(\''.$githubPerfil.'\')"';
            }
            else{
                $g='';
            }
            if($linkedinPerfil!=""){
                $l='onclick="window.open(\''.$linkedinPerfil.'\')"';
            }
            else{
                $l='';
            }
            if($twitterPerfil!=""){
                $t='onclick="window.open(\''.$twitterPerfil.'\')"';
            }
            else{
                $t='';
            }
            if($imgUsuario == ""){
                                                        $imgU=' <img src="../img/avatar-2-64.png" alt="">';
                                                    }
                                                    else{
                                                        $imgU=' <img src="../img/imagensUsuarios/'.$imgUsuario.'" alt="">';
                                                    }
            if($perfil==1){
                echo '		<div class="avatar-preview avatar-preview-32" data-toggle="modal" data-target="#editarPessoa" onclick="editarPessoaE('.$idMembro.',\''.$nome.'\',\''.$email.'\',\''.$facebookPerfil.'\',\''.$githubPerfil.'\',\''.$linkedinPerfil.'\',\''.$twitterPerfil.'\',\''.$perfil.'\')">
											<a href="#">
												'.$imgU.'
											</a>
										</div>                                       
										';
            }
           
            
           
            
        }
         echo ' <script>
                                        function editarPessoaE(idMembro,nomeP,email,f,g,l,t,p){
                document.getElementById("nomeP").innerHTML=nomeP;
                document.getElementById("emailP").value=email;
                document.getElementById("f").value=f;
                document.getElementById("g").value=g;
                document.getElementById("l").value=l;
                document.getElementById("t").value=t;
               
            }
                                        </script>';
    }
     // Listar membros na edição de equipe
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxMembro'])){
        include "../model/membro.class.php";
        $membro= new Membro();
        $listarMembros=$membro->listarMembrosEquipes($_POST['ajaxMembro']);
        foreach($listarMembros as $lm){
            $idMembro=$lm['idMembro'];
            $fkUsuario=$lm['fkUsuario'];
            $perfil=$lm['perfil'];
            $nome=$lm['nome'];
            $email=$lm['email'];
            $imgUsuario=$lm['imgUsuario'];
             $facebookPerfil=$lm['facebookPerfil'];
            $githubPerfil=$lm['githubPerfil'];
            $linkedinPerfil=$lm['linkedinPerfil'];
            $twitterPerfil=$lm['twitterPerfil'];
           if($facebookPerfil!==""){
                $f='onclick="window.open(\''.$facebookPerfil.'\')"';
            }
            else{
                $f='';
            }
            if($githubPerfil!=""){
                $g='onclick="window.open(\''.$githubPerfil.'\')"';
            }
            else{
                $g='';
            }
            if($linkedinPerfil!=""){
                $l='onclick="window.open(\''.$linkedinPerfil.'\')"';
            }
            else{
                $l='';
            }
            if($twitterPerfil!=""){
                $t='onclick="window.open(\''.$twitterPerfil.'\')"';
            }
            else{
                $t='';
            }
            if($imgUsuario == ""){
                                                        $imgU=' <img src="../img/avatar-2-64.png" alt="">';
                                                    }
                                                    else{
                                                        $imgU=' <img src="../img/imagensUsuarios/'.$imgUsuario.'" alt="">';
                                                    }
           if($perfil==0){
                echo '		<div class="avatar-preview avatar-preview-32" data-toggle="modal" data-target="#editarPessoa" onclick="editarPessoaE('.$idMembro.',\''.$nome.'\',\''.$email.'\',\''.$facebookPerfil.'\',\''.$githubPerfil.'\',\''.$linkedinPerfil.'\',\''.$twitterPerfil.'\',\''.$perfil.'\')">
											<a href="#">
												'.$imgU.'
											</a>
										</div>
										';
            }
           
            
            
        }
    }
?>