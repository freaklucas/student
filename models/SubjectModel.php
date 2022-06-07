<?php 
    require_once("lib/PersistModelAbstract.php");

    class SubjectModel extends PersistModelAbstract {
        function __construct(){
            parent::__construct();
            $this->createTable();
        }
        private function createTable () {
            $st_sql = "CREATE TABLE IF NOT EXISTS subject (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT,
                note FLOAT,
                teacher TEXT,
            )";
            $this->o_db->exec($st_sql);
        }
    }
?>