<?php 
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=127.0.0.1;dbname=evaluacion","usuario1","12345");
                return $conectar;
        } catch (Exception $e){
            print "error DB!! : " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}
?>