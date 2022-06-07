<?php 
    require_once("lib/PersistModelAbstract.php");

    class UserModel extends PersistModelAbstract {

        protected $id;
        protected $title;

        function __construct(){
            parent::__construct();
            $this->createTable();
        }

        public function setTitle ($title) {
            $this->title = $title;
        }

        public function getTitle () {
            return $this->title;
        }

        public function getId () {
            return $this->id;
        }

        public function getAll () {
            $st_sql = "SELECT * FROM personal_notes";//
            $o_data = $this->o_db->query($st_sql);
            $a_personalNotes = $o_data->fetchAll(PDO::FETCH_OBJ);
            return $a_personalNotes;
        }

        public function save () {
            $st_sql = "INSERT INTO evaluation (title) VALUES ('$this->title')";
            $this->o_db->exec($st_sql);
        }

        public function getById ($id) {
            $st_sql = "SELECT * FROM evaluation WHERE id = '$id'";
            $o_data = $this->o_db->query($st_sql);
            $a_personalNotes = $o_data->fetchObject();
            return $a_personalNotes;
        }

        private function createTable () {
            $st_sql = "CREATE TABLE IF NOT EXISTS personalNotes (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                title TEXT,
            )";
            $this->o_db->exec($st_sql);
        }
    }
?>