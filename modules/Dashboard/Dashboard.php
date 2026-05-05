<?php

class Dashboard extends Database {

    function __construct() {
        parent::__construct();
    }
    public function ACTION_updateNotifNon(){
        $params = isset($_GET) ? $_GET : $_POST;
    }

    public function ACTION_dashboardList(){
        $params = isset($_GET) ? $_GET : $_POST;
        echo '{"success":true,"msg":"berhasil"}';
    }

    public function ACTION_dashboardList2(){
        $params = isset($_GET) ? $_GET : $_POST;
        echo '{"success":true,"msg":"berhasil"}';
    }
  
}
