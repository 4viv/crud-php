<?php
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud2","root","");
                return $conectar;
            }catch(Exception $e){
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        
        // Metodo que normaliza los campos para no tener problemas con mayusculas y minusculas
        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

    }
