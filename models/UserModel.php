<?php 
    require_once("lib/PersistModelAbstract.php");

    class UserModel extends PersistModelAbstract {
        function __construct(){
            parent::__construct();
            $this->createTable();
            
        }
        private function createTable () {
            $st_sql = "CREATE TABLE IF NOT EXISTS user (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT,
                email TEXT,
                password TEXT,
            )";
            $this->o_db->exec($st_sql);
        }
    }
?>