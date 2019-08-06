<?php
    include_once "conexao.php";

    class Equipe{
        private $idEquipe;
        private $nomeEquipe;
        private $imgEquipe;
        private $dataCriacao;
        private $fkUsuario;
        private $conex = '';
        function __construct(){
            $this->conex = dataBaseCore::getHandler();
	    }
        //Getters and setters
        public function getIdEquipe(){
            return $this->idEquipe;
        }
        public function setIdEquipe($i){
            $this->idEquipe = $i;
        }
        
        public function getNomeEquipe(){
            return $this->nomeEquipe;
        }
        public function setNomeEquipe($n){
            $this->nomeEquipe = $n;
        }
        
        public function getImgEquipe(){
            return $this->imgEquipe;
        }
        public function setImgEquipe($im){
            $this->imgEquipe = $im;
        }
        
        public function getDataCriacao(){
            return $this->dataCriacao;
        }
        public function setDataCriacao($d){
            $this->dataCriacao = $d;
        }
        
        public function getFkUsuario(){
            return $this->fkUsuario;
        }
        public function setFkUsuario($d){
            $this->fkUsuario = $d;
        }
        //Fim getters and setters
        public function verificarExistencia($nomeEquipe,$fkUsuario){
            //Verifica se a equipe já foi cadastrada
            $result = $this->conex->query("SELECT * FROM tb_equipe WHERE nomeEquipe = '$nomeEquipe' AND fkUsuario= '$fkUsuario'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contEmail = sizeof($chmArray);
            return $contEmail>0;
        }
        public function capturaEquipe($nomeEquipe,$fkUsuario){
           $result = $this->conex->query("SELECT idEquipe FROM tb_equipe WHERE fkUsuario = '$fkUsuario' AND nomeEquipe='$nomeEquipe'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($chmArray as $ca){
                $idEquipe=$ca['idEquipe'];
            }
            return $idEquipe;
        }
        public function inserir(){
            //Inserir equipe
            $this->conex->exec("INSERT INTO tb_equipe(nomeEquipe,imgEquipe,dataCriacao,fkUsuario) VALUES ('$this->nomeEquipe','$this->imgEquipe','$this->dataCriacao','$this->fkUsuario')");
        }
        public function listarEquipesUsuario($fkUsuario){
            $result = $this->conex->query("SELECT * FROM tb_equipe WHERE fkUsuario = '$fkUsuario'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);           
            return $chmArray;
        }  
        public function listarEquipesUsuarioSelecionadas($final){
            $result = $this->conex->query("SELECT * FROM tb_equipe WHERE idEquipe in '$final'");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);           
            return $chmArray;
        }  
        public function listarEquipesUsuarioE($fkUsuario){
            $result = $this->conex->query("SELECT fkEquipe FROM tb_membro WHERE fkUsuario = '$fkUsuario' group by fkEquipe");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
          
            foreach ($chmArray as $c) {
                @$teste.=$c['fkEquipe'].",";
            }
            $final="(".$teste."0)";
            
            $result1 = $this->conex->query("SELECT * FROM tb_equipe WHERE idEquipe in $final");
            $chmArray1 = $result1->fetchAll(PDO::FETCH_ASSOC);           
            return $chmArray1;         
        }
        public function listarEquipesUsuarioCont($fkUsuario){
            $result = $this->conex->query("SELECT fkEquipe FROM tb_membro WHERE fkUsuario = '$fkUsuario' group by fkEquipe");
            $chmArray = $result->fetchAll(PDO::FETCH_ASSOC);
            $contE = sizeof($chmArray);
            return $contE>0;
        }
    }
?>