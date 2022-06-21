<?php 


abstract class PersistModelAbstract {
    protected $o_db;
    function __construct(){
        $host = "localhost";
        $db = "gerencia_aluno";
        $login = "root";
        $pass = "abacaxi";
        $st_dsn = "mysql:host=$host;dbname=$db";
        $this->o_db = new PDO($st_dsn, $login, $pass);
    }
}
?>