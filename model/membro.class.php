<?php
    include_once "conexao.php";

    class Membro{
        private $idMembro;
        private $fkUsuario;
        private $fkEquipe;
        private $perfil;
        private $dataInclusao;
        private $conex = '';
        function __construct(){
            $this->conex = dataBaseCore::getHandler();
	    }
        //Getters and setters
        public function getIdMembro(){
            return $this->idMembro;
        }
        public function setIdMembro($i){
            $this->idMembro = $i;
        }
        
        public function getFkUsuario(){
            return $this->fkUsuario;
        }
        public function setFkUsuario($f){
            $this->fkUsuario = $f;
        }
        
        public function getFkEquipe(){
            return $this->fkEquipe;
        }
        public function setFkEquipe($fe){
            $this->fkEquipe = $fe;
        }
        
        public function getPerfil(){
            return $this->perfil;
        }
        public function setPerfil($p){
            $this->perfil = $p;
        }
        
        public function getDataInclusao(){
            return $this->dataInclusao;
        }
        public function setDataInclusao($d){
            $this->dataInclusao = $d;
        }
        //Fim getters and setters
        public function verificarExistencia($fkUsuario,$fkEquipe){
            //Verifica se a equipe já foi cadastrada
            $result = $this->conex->query("SELECT * FROM tb_membro WHERE fkUsuario = '$fkUsuario' AND fkEquipe= '$fkEquipe'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contEmail = sizeof($chmArray);
            return $contEmail>0;
        }
        public function verificarMembros($fkEquipe){
            $result = $this->conex->query("SELECT * FROM tb_membro WHERE fkEquipe='$fkEquipe'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $cont = sizeof($chmArray);
            return $cont;
        }
        public function inserir(){
            //Inserir membro
            $this->conex->exec("INSERT INTO tb_membro(fkUsuario,fkEquipe,perfil,dataInclusao) VALUES ('$this->fkUsuario','$this->fkEquipe','$this->perfil','$this->dataInclusao')");
        }
        public function listarMembrosEquipes($fkEquipe){
            $result = $this->conex->query("SELECT * FROM tb_membro INNER JOIN tb_usuario ON tb_membro.fkUsuario = tb_usuario.idUsuario WHERE fkEquipe = '$fkEquipe'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);           
            return $chmArray;
        }
        public function verPerfil($fkUsuario,$fkEquipe){
            //Verifica se a equipe já foi cadastrada
            $result = $this->conex->query("SELECT * FROM tb_membro WHERE fkUsuario = '$fkUsuario' AND fkEquipe= '$fkEquipe' AND perfil=1");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contEmail = sizeof($chmArray);
            return $contEmail>0;
        }
    }
?>