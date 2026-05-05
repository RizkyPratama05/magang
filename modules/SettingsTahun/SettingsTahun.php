<?php

class SettingsTahun extends Database {

    function __construct() {
        parent::__construct();
    }

    public function ACTION_list($return = false) {
        $params = isset($_GET) ? $_GET : $_POST;
        $sql = 'SELECT * FROM ref_tahun';
        
        if (isset($_POST['search']['value']) && $_POST['search']['value'] != '') {
            $keywords = strtolower($_POST['search']['value']);
            $sql .= " WHERE LOWER(tahun) LIKE '%$keywords%'";
        }
        
        if (isset($_POST['start'])) {
            $start = $_POST['start'];
            $limit = $_POST['length'];
            $sql .= " LIMIT $start, $limit";
        }

        $arrayData = $this->dbDataSelectAndReturnAll($sql, $params, true);
        
        if ($return) {
            return $arrayData;
        }
        
        $array = array();
        $sqlCount = "SELECT count(*) FROM ref_tahun";
        if (isset($_POST['search']['value']) && $_POST['search']['value'] != '') {
            $keywords = strtolower($_POST['search']['value']);
            $sqlCount .= " WHERE LOWER(tahun) LIKE '%$keywords%'";
        }
        
        $countData = $this->dbDataGetValue($sqlCount);
        $array['recordsTotal'] = $countData;
        $array['recordsFiltered'] = $countData;
        $array['draw'] = isset($_POST['draw']) ? $_POST['draw'] : 1;
        $array['data'] = (array)$arrayData;
        echo json_encode($array);
    }

    public function ACTION_add() {
        $params = isset($_GET) ? $_GET : $_POST;
        $sql = "INSERT INTO ref_tahun (tahun, aktif) VALUES (:tahun, :aktif)";
        echo $this->dbDataExecute($sql, $params['data']);
    }

    public function ACTION_update() {
        $params = isset($_GET) ? $_GET : $_POST;
        $sql = "UPDATE ref_tahun SET tahun=:tahun, aktif=:aktif WHERE id_tahun=:id_tahun";
        echo $this->dbDataExecute($sql, $params['data']);
    }

    public function ACTION_delete() {
        $params = isset($_GET) ? $_GET : $_POST;
        $sql = "DELETE FROM ref_tahun WHERE id_tahun=:id_tahun";
        echo $this->dbDataExecute($sql, $params['data']);
    }
}
