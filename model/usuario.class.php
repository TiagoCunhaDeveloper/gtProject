<?php
    include_once "conexao.php";

    class Usuario{
        private $idUsuario;
        private $nome;
        private $imgUsuario;
        private $cpfCnpj;
        private $email;
        private $telefone;
        private $celular;
        private $senha;
        private $assinatura;
        private $hashAssinatura;
        private $dataUltimoAcesso;
        private $dataDeCadastro;
        private $perfilU;
        private $facebookPerfil;
        private $githubPerfil;
        private $linkedinPerfil;
        private $twitterPerfil;
        private $conex = '';
        function __construct(){
            $this->conex = dataBaseCore::getHandler();
	    }
        //Getters and setters
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($i){
            $this->idUsuario = $i;
        }
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        
        public function getImgUsuario(){
            return $this->imgUsuario;
        }
        public function setImgUsuario($im){
            $this->imgUsuario = $im;
        }
        
        public function getCpfCnpj(){
            return $this->cpfCnpj;
        }
        public function setCpfCnpj($c){
            $this->cpfCnpj = $c;
        }
        
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            $this->email = $e;
        }
        
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($t){
             $this->telefone = $t;
        }
        
        public function getCelular(){
            return $this->celular;
        }
        public function setCelular($ce){
             $this->celular = $ce;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($se){
            $this->senha = $se;
        }
        
        public function getAssinatura(){
            return $this->assinatura;
        }
        public function setAssinatura($h){
            $this->assinatura = $h;
        }
        
        public function getHashAssinatura(){
            return $this->hashAssinatura;
        }
        public function setHashAssinatura($h){
            $this->hashAssinatura = $h;
        }
        
        public function getDataUltimoAcesso(){
            return $this->dataUltimoAcesso;
        }
        public function setDataUltimoAcesso($d){
            $this->dataUltimoAcesso = $d;
        }
        
        public function getDataDeCadastro(){
            return $this->dataDeCadastro;
        }
        public function setDataDeCadastro($dc){
            $this->dataDeCadastro = $dc;
        }
        
        public function getPerfilU(){
            return $this->perfilU;
        }
        public function setPerfilU($p){
            $this->perfilU = $p;
        }
        
        public function getFacebookPerfil(){
            return $this->facebookPerfil;
        }
        public function setFacebookPerfil($fc){
            $this->facebookPerfil = $fc;
        }
        
        public function getGithubPerfil(){
            return $this->githubPerfil;
        }
        public function setGithubPerfil($gt){
            $this->githubPerfil = $gt;
        }
        
        public function getLinkedinPerfil(){
            return $this->linkedinPerfil;
        }
        public function setLinkedinPerfil($l){
            $this->linkedinPerfil = $l;
        }
        
        public function getTwitterPerfil(){
            return $this->twitterPerfil;
        }
        public function setTwitterPerfil($tw){
            $this->twitterPerfil = $tw;
        }  
        //Fim getters and setters
        public function verificarExistencia($email){
            //Verifica se o email já foi cadastrado
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE email = '$email'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contEmail = sizeof($chmArray);
            return $contEmail>0;
        }
        public function verificarExistenciaCpfCnpj($cpfCnpj){
            //Verifica se o cpfCnpj já foi cadastrado
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE cpfCnpj = '$cpfCnpj'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contCpfCnpj = sizeof($chmArray);
            return $contCpfCnpj>0;
        }
        public function login($email,$senha){
            //Login
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE email = '$email' AND senha = '$senha'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contUsu = sizeof($chmArray);
            return $contUsu>0;
        }
        public function capturaID($email,$senha){
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE email = '$email' AND senha = '$senha'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $idUsuario=$ca['idUsuario'];
                $perfil=$ca['perfilU'];
            }
            $array=array(1);
            $array[0]=$idUsuario;
            $array[1]=$perfil;
            return $array;
        }
        public function capturaNome($id){
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE idUsuario = '$id'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $nome=$ca['nome'];
                $sobreNome=$ca['sobreNome'];
            }
            $primeiraLetra=substr($nome,0,1);
            $SegundaLetra=substr($sobreNome,0,1);
            $final=strtoupper($primeiraLetra).strtoupper($SegundaLetra);
            return $final;
        }
        public function inserir(){
            //Inserir usuario
            $this->conex->exec("INSERT INTO tb_usuario(nome,imgUsuario,cpfCnpj,email,telefone,celular,senha,assinatura,hashAssinatura,dataUltimoAcesso,dataDeCadastro,perfilU,facebookPerfil,githubPerfil,linkedinPerfil,twitterPerfil) VALUES ('$this->nome','$this->imgUsuario','$this->cpfCnpj','$this->email','$this->telefone','$this->celular','$this->senha','$this->assinatura','$this->hashAssinatura','$this->dataUltimoAcesso','$this->dataDeCadastro','$this->perfilU','$this->facebookPerfil','$this->githubPerfil','$this->linkedinPerfil','$this->twitterPerfil')");
        }
        public function inserirConfigNotificacoes($idUsuario,$statusEmailAssinatura){
            //Inserir notificacoes
            $this->conex->exec("INSERT INTO tb_configuracoes(fkUsuario,tipoNotificacao,status) VALUES 
            ($idUsuario,1,1),
            ($idUsuario,2,1),
            ($idUsuario,3,1),
            ($idUsuario,4,1),
            ($idUsuario,5,1),
            ($idUsuario,6,$statusEmailAssinatura);
            ");
        }
        public function ajaxStatusNotificacoes($idConfiguracoes,$status){
            $this->conex->exec("UPDATE `tb_configuracoes` SET `status` = '$status' WHERE `tb_configuracoes`.`idConfiguracoes` = $idConfiguracoes");
        }
        public function verificarAjaxStatusNotificacoes($idConfiguracoes){
            $result = $this->conex->query("SELECT * FROM tb_configuracoes WHERE idConfiguracoes=$idConfiguracoes AND status = 1");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function listar($id){
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE idUsuario = '$id'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $nome=$ca['nome'];
                $imgUsuario=$ca['imgUsuario'];
                $cpfCnpj=$ca['cpfCnpj'];
                $email=$ca['email'];
                $telefone=$ca['telefone'];
                $celular=$ca['celular'];
                $hashAssinatura=$ca['hashAssinatura'];
                $facebookPerfil=$ca['facebookPerfil'];
                $githubPerfil=$ca['githubPerfil'];
                $linkedinPerfil=$ca['linkedinPerfil'];
                $twitterPerfil=$ca['twitterPerfil'];
                
            }
            $array=array(10);
            $array[0]=$nome;
            $array[1]=$imgUsuario;
            $array[2]=$cpfCnpj;
            $array[3]=$email;
            $array[4]=$telefone;
            $array[5]=$celular;
            $array[6]=$hashAssinatura;
            $array[7]=$facebookPerfil;
            $array[8]=$githubPerfil;
            $array[9]=$linkedinPerfil;
            $array[10]=$twitterPerfil;
            return $array;
        }
        public function listarTodosUsuarios($id){
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE idUsuario != '$id'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);           
            return $chmArray;
        }
        public function listarNotificacoes($id){
            $result = $this->conex->query("SELECT * FROM tb_configuracoes WHERE fkUsuario = '$id'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);           
            return $chmArray;
        }
        public function recuperaImgAntiga($hash){
            $result = $this->conex->query("SELECT * FROM tb_usuario WHERE hashAssinatura = '$hash'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $imgUsuario=$ca['imgUsuario'];                
            }            
            return $imgUsuario;
        }
        public function editar($nome,$tokenImg,$cpfCnpj,$email,$telefone,$celular,$facebookPerfil,$githubPerfil,$linkedinPerfil,$twitterPerfil,$hash){
            $this->conex->exec("UPDATE `tb_usuario` SET `nome` = '$nome',`imgUsuario`='$tokenImg',`cpfCnpj`='$cpfCnpj',`email`='$email',`telefone`='$telefone',`celular`='$celular',`facebookPerfil`='$facebookPerfil',`githubPerfil`='$githubPerfil',`linkedinPerfil`='$linkedinPerfil',`twitterPerfil`='$twitterPerfil' WHERE `tb_usuario`.`hashAssinatura` = '$hash'");
        }
        public function alterarSenha($senha,$id){
            $this->conex->exec("UPDATE `tb_usuario` SET `senha` = '$senha' WHERE `tb_usuario`.`idUsuario` = $id");
        } 
        public function ultimoAcesso($id,$data){
            $this->conex->exec("UPDATE `tb_usuario` SET `dataUltimoAcesso` = '$data' WHERE `tb_usuario`.`idUsuario` = $id");
        }       
    }
?>