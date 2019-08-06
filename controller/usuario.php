<?php
    //Cadastro do usuário
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cadastrar'])){
        include "../model/usuario.class.php";
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $emailAssinatura=$_POST['emailAssinatura'];
        $usuario= new Usuario();
        $usuario->setNome(ucwords($_POST['nome']));
        $usuario->setImgUsuario(null);
        if($_POST['cpf'] == ""){
            $cpfCnpj=$_POST['cnpj'];
        }
        else{
            $cpfCnpj=$_POST['cpf'];
        }
        $usuario->setCpfCnpj($cpfCnpj);
        $usuario->setEmail($_POST['email']);
        $usuario->setTelefone($_POST['telefone']);
        $usuario->setCelular($_POST['celular']);
        $usuario->setSenha(hash('sha512',$_POST['senha']));
        $usuario->setAssinatura($_POST['as']);
        $usuario->setHashAssinatura(md5(uniqid(rand(), true)));
        $usuario->setDataUltimoAcesso(null);
        $usuario->setDataDeCadastro($date);        
        $usuario->setPerfilU(0);
        $usuario->setFacebookPerfil(null);
        $usuario->setGithubPerfil(null);
        $usuario->setLinkedinPerfil(null);
        $usuario->setTwitterPerfil(null);
        $usuario->inserir();
        
        $idUsuario=$usuario->capturaID($_POST['email'],hash('sha512',$_POST['senha']));
        if(isset($emailAssinatura)){
            //Enviar e-mail com hash de representacao da assinatura
            $usuario->inserirConfigNotificacoes($idUsuario[0],1);
        }
        else{
            $usuario->inserirConfigNotificacoes($idUsuario[0],0);
        }
        //Enviar e-mail de confirmação de conta
        session_start();
        $_SESSION['registrer']=true;
        header("Location: ../view/login.php");
    }
    //Ajax email
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxEmail'])){
        include "../model/usuario.class.php";
        $usuario= new Usuario();
        if($usuario->verificarExistencia($_POST['ajaxEmail'])>=1){
            echo '<p class="help-block" style="color:red">E-mail já cadastrado!</p>';
        }
        else{
             echo '';
        }
    }
    //Ajax cpfCnpj
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxCpfCnpj'])){
        include "../model/usuario.class.php";
        $usuario= new Usuario();
        if($usuario->verificarExistenciaCpfCnpj($_POST['ajaxCpfCnpj'])>=1){
            echo '<p class="help-block" style="color:red">Cpf/Cnpj já cadastrado!</p>';
        }
        else{
             echo '';
        }
    }
    //Ajax notificacoes
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajaxStatusNotificacoes'])){
        include "../model/usuario.class.php";
        $usuario= new Usuario();
        $status=$usuario->verificarAjaxStatusNotificacoes($_POST['ajaxStatusNotificacoes']);
        $tipoNotificacao=$_POST['tipo'];
        $email=$_POST['email'];
        if($status >=1){
            $usuario->ajaxStatusNotificacoes($_POST['ajaxStatusNotificacoes'],0);
        }
        else{
            $usuario->ajaxStatusNotificacoes($_POST['ajaxStatusNotificacoes'],1);
            if($tipoNotificacao==1){
                //Enviar e-mail com código da assinatura
                echo '<p class="help-block" style="color:red">Código enviado para o e-mail <b>'.$email.'</b>.</p>';
            }
            else{
                echo "";
            }
        }        
    }
    //Login
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logar'])){
        include "../model/usuario.class.php";
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d');
        $usuario= new Usuario();
        if($usuario->login($_POST['email'],hash('sha512',$_POST['senha']))>=1){
            $id=$usuario->capturaID($_POST['email'],hash('sha512',$_POST['senha']));
            $ultimoAcesso=$usuario->ultimoAcesso($id[0],$date);           
            session_start();           
            $_SESSION['login']=true;
            $_SESSION['id_usuario']=$id[0];            
            $_SESSION['tipo']=$id[1];          
            if($id[1]==0){
                header("Location:../view/build/cli/index.php");    
            }
            else{
                
            }
        }
        else{
            session_start();
            $_SESSION['login']=false;
            header("Location: ../view/login.php");
        }
    }
    //Alterar perfil 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['alterarPerfil'])){
        include "../model/usuario.class.php";
        $usuario= new Usuario();
        $morango=$_FILES['imgUsuario'];
        if($morango['size']==0){
            $tokenImg=$usuario->recuperaImgAntiga($_POST['hash']);
        }
        else{
            $titulo_img = $morango['name'];
            $tmp        = $morango['tmp_name'];
            $formato    = pathinfo($titulo_img, PATHINFO_EXTENSION);
            $upload = move_uploaded_file($tmp,"../view/build/img/imagensUsuarios/".$titulo_img);
            if($upload===true){
                $tokenImg = md5(uniqid(rand(), true)).".".$formato;
                rename("../view/build/img/imagensUsuarios/".$titulo_img,"../view/build/img/imagensUsuarios/".$tokenImg);
                $imgAntiga=$usuario->recuperaImgAntiga($_POST['hash']);
                unlink("../view/build/img/imagensUsuarios/".$imgAntiga);
            }
            else{
                $tokenImg = null;
            }        
        }        
        $usuario->editar(ucwords($_POST['nome']),$tokenImg,$_POST['cpfCnpj'],$_POST['email'],$_POST['telefone'],$_POST['celular'],$_POST['facebookPerfil'],$_POST['githubPerfil'],$_POST['linkedinPerfil'],$_POST['twitterPerfil'],$_POST['hash']);
        session_start();
        $_SESSION['edit']=true;
        header("Location: ../view/build/cli/perfil.php");
    }
?>