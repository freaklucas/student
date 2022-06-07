<?php 
    require_once("lib/PersistModelAbstract.php");

    class DashboardModel extends PersistModelAbstract {

        function __construct(){
            parent::__construct();
            $this->createTable();
        }
        public function getFirstDashboard(){
            $st_sql = "SELECT * FROM dashboard";
            $o_data = $this->o_db->query($st_sql);
            $a_dashboard = $o_data->fetchObject();
            return $a_dashboard;
        }
    }
?>