<?php

class Conexion{

    static public function conectar(){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=id22326705_tiendaexpresspro","id22326705_naydelin","Okm@@@111",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            //$conn = new PDO("mysql:host=localhost;dbname=market-pos","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        }
        catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

    }
}
