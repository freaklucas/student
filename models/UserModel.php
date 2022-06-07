<?php 
    require_once("lib/PersistModelAbstract.php");

    class UserModel extends PersistModelAbstract {

        protected $id;
        protected $name;
        protected $password;
        protected $email;

        function __construct(){
            parent::__construct();
            $this->createTable();
            
        }

        public function setName ($name) {
            $this->name = $name;
        }

        public function setPassword ($password) {
            $this->password = $password;
        }

        public function setEmail ($email) {
            $this->email = $email;
        }

        public function getName () {
            return $this->name;
        }

        public function getPassword () {
            return $this->password;
        }

        public function getEmail () {
            return $this->email;
        }

        public function getId () {
            return $this->id;
        }

        public function getAll () {
            $st_sql = "SELECT * FROM user";
            $o_data = $this->o_db->query($st_sql);
            $a_user = $o_data->fetchAll(PDO::FETCH_OBJ);
            return $a_user;
        }

        public function save () {
            $st_sql = "INSERT INTO user (name, password, email) VALUES ('$this->name', '$this->password', '$this->email')";
            $this->o_db->exec($st_sql);
        }

        public function getById ($id) {
            $st_sql = "SELECT * FROM user WHERE id = '$id'";
            $o_data = $this->o_db->query($st_sql);
            $a_user = $o_data->fetchObject();
            return $a_user;
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