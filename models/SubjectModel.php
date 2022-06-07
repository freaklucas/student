<?php 
    require_once("lib/PersistModelAbstract.php");

    class SubjectModel extends PersistModelAbstract {

        protected $id;
        protected $name;
        protected $note;
        protected $teacher;

        public function setName ($name) {
            $this->name = $name;
        }

        public function setNote ($note) {
            $this->note = $note;
        }

        public function setTeacher ($teacher) {
            $this->teacher = $teacher;
        }


        public function getName () {
            return $this->name;
        }

        public function getNote () {
            return $this->note;
        }

        public function getTeacher () {
            return $this->teacher;
        }

        public function getId () {
            return $this->id;
        }

        public function getAll () {
            $st_sql = "SELECT * FROM subject";
            $o_data = $this->o_db->query($st_sql);
            $a_subject = $o_data->fetchAll(PDO::FETCH_OBJ);
            return $a_subject;
        }

        public function save () {
            $st_sql = "INSERT INTO subject (name, note, teacher) VALUES ('$this->name', '$this->note', '$this->teacher')";
            $this->o_db->exec($st_sql);
        }

        public function update () {
            $st_sql = "UPDATE subject SET name = '$this->name', note = '$this->note', teacher = '$this->teacher' WHERE id = '$this->id'";
            $this->o_db->exec($st_sql);
        }

        public function delete () {
            $st_sql = "DELETE FROM subject WHERE id = '$this->id'";
            $this->o_db->exec($st_sql);
        }

        public function getById ($id) {
            $st_sql = "SELECT * FROM subject WHERE id = '$id'";
            $o_data = $this->o_db->query($st_sql);
            $a_subject = $o_data->fetchObject();
            return $a_subject;
        }

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