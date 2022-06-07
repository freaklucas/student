<?php 
    require_once("lib/PersistModelAbstract.php");

    class EvaluationModel extends PersistModelAbstract {
        protected $id;
        protected $name;
        protected $note;


        function __construct(){
            parent::__construct();
            $this->createTable();
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function setNote ($note) {
            $this->note = $note;
        }

        public function getName () {
            return $this->name;
        }

        public function getNote () {
            return $this->note;
        }

        public function getId () {
            return $this->id;
        }

        public function getAll () {
            $st_sql = "SELECT * FROM evaluation";
            $o_data = $this->o_db->query($st_sql);
            $a_evaluation = $o_data->fetchAll(PDO::FETCH_OBJ);
            return $a_evaluation;
        }
        
        public function save () {
            $st_sql = "INSERT INTO evaluation (name, note) VALUES ('$this->name', '$this->note')";
            $this->o_db->exec($st_sql);
        }
        public function update () {
            $st_sql = "UPDATE evaluation SET name = '$this->name', note = '$this->note' WHERE id = '$this->id'";
            $this->o_db->exec($st_sql);
        }
        public function delete () {
            $st_sql = "DELETE FROM evaluation WHERE id = '$this->id'";
            $this->o_db->exec($st_sql);
        }
        public function getById ($id) {
            $st_sql = "SELECT * FROM evaluation WHERE id = '$id'";
            $o_data = $this->o_db->query($st_sql);
            $a_evaluation = $o_data->fetchObject();
            return $a_evaluation;
        }

        private function createTable () {
         $st_sql = "CREATE TABLE IF NOT EXISTS evaluation (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT,
                note FLOAT(62,2),
            )";
            $this->o_db->exec($st_sql);
        }
    }
?>