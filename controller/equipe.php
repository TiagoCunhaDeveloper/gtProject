<?php
    //Cadastro da equipe e adicionar membro
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cadEquipeEaddMembro'])){
        include "../model/equipe.class.php";
        include "../model/membro.class.php";
        session_start();
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $equipe= new Equipe();
        $equipe->setNomeEquipe(ucwords($_POST['nomeEquipe']));
        $morango=$_FILES['imgEquipe'];
        if($morango['size']==0){
            $tokenImg=null;
        }
        else{
            $titulo_img = $morango['name'];
            $tmp        = $morango['tmp_name'];
            $formato    = pathinfo($titulo_img, PATHINFO_EXTENSION);
            $upload = move_uploaded_file($tmp,"../view/build/img/imagensEquipes/".$titulo_img);
            if($upload===true){
                $tokenImg = md5(uniqid(rand(), true)).".".$formato;
                rename("../view/build/img/imagensEquipes/".$titulo_img,"../view/build/img/imagensEquipes/".$tokenImg);              
            }
            else{
                $tokenImg = null;
            }        
        } 
        
        
        $equipe->setImgEquipe($tokenImg);
        $equipe->setDataCriacao($date);
        $equipe->setFkUsuario($_SESSION['id_usuario']);
        
        $equipe->inserir();
        
        $idEquipe=$equipe->capturaEquipe(ucwords($_POST['nomeEquipe']),$_SESSION['id_usuario']);
        
        $membro=new Membro();
        //Colocando usuario que criou a equipe como membro
        $membro->setFkUsuario($_SESSION['id_usuario']);
        $membro->setFkEquipe($idEquipe);
        $membro->setPerfil(1);
        $membro->setDataInclusao($date);
        $membro->inserir();
        //Colocando membro selecionado na equipe
        $membro->setFkUsuario($_POST['idMembro']);
        $membro->setFkEquipe($idEquipe);
        $membro->setPerfil(0);
        $membro->setDataInclusao($date);
        $membro->inserir();
        $_SESSION['cadEquipeEaddMembro']=true;
        header("Location: ../view/build/cli/equipes.php");
    }
    //Cadastro da equipe
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cadEquipe'])){
        include "../model/equipe.class.php";
        include "../model/membro.class.php";
        session_start();
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $equipe= new Equipe();
        $equipe->setNomeEquipe(ucwords($_POST['nomeEquipe']));
        $morango=$_FILES['imgEquipe'];
        if($morango['size']==0){
            $tokenImg=null;
        }
        else{
            $titulo_img = $morango['name'];
            $tmp        = $morango['tmp_name'];
            $formato    = pathinfo($titulo_img, PATHINFO_EXTENSION);
            $upload = move_uploaded_file($tmp,"../view/build/img/imagensEquipes/".$titulo_img);
            if($upload===true){
                $tokenImg = md5(uniqid(rand(), true)).".".$formato;
                rename("../view/build/img/imagensEquipes/".$titulo_img,"../view/build/img/imagensEquipes/".$tokenImg);              
            }
            else{
                $tokenImg = null;
            }        
        } 
        
        
        $equipe->setImgEquipe($tokenImg);
        $equipe->setDataCriacao($date);
        $equipe->setFkUsuario($_SESSION['id_usuario']);
        $equipe->inserir();
        
        $idEquipe=$equipe->capturaEquipe(ucwords($_POST['nomeEquipe']),$_SESSION['id_usuario']);        
                
        $fkUsuarios=$_POST['usuarios'];
        $bodytag = str_replace('{"matchedKey":"email","',"",$fkUsuarios);
        $final = str_replace(',"group":"teams"}',"",$bodytag);
        $final1 = str_replace('"name":"',"",$final);
        $final2 = str_replace('"email":"',"",$final1);
        $final3 = str_replace('id":',"",$final2);
        $final4 = str_replace('emailU":',"",$final3);
        $final5 = str_replace('"',"",$final4);
        $final6 = str_replace('[',"",$final5);
        $final7 = str_replace(']',"",$final6);
        $teste=explode (",",$final7);
        $result = count($teste)-4;
        $membro= new Membro();
         //Colocando usuario que criou a equipe como membro
        $membro->setFkUsuario($_SESSION['id_usuario']);
        $membro->setFkEquipe($idEquipe);
        $membro->setPerfil(1);
        $membro->setDataInclusao($date);
        $membro->inserir();
        for ($i = 0;$i<=$result;) {
            @$finalMsm=$teste[$i];
            $i=$i+4;
            $jaFoiCadastrada=$membro->verificarExistencia($finalMsm,$idEquipe);
            if($jaFoiCadastrada >=1){
                
            }
            else{
                $membro->setFkUsuario($finalMsm);
                $membro->setFkEquipe($idEquipe);
                $membro->setPerfil(0);
                $membro->setDataInclusao($date);
                $membro->inserir();
            }
        }
        
        $_SESSION['cadEquipe']=true;
        header("Location: ../view/build/cli/equipes.php");
    }
    //Ajax equipe
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxEquipe'])){
        include "../model/equipe.class.php";
        session_start();
        $equipe= new Equipe();
        if($equipe->verificarExistencia($_POST['ajaxEquipe'],$_SESSION['id_usuario'])>=1){
            echo '<p class="help-block" style="color:red">Equipe já cadastrada!</p>';
        }
        else{
             echo '';
        }
    }
    //Editar equipe
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editEquipe'])){
        
    }
?>