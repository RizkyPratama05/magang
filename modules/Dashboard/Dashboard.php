<?php
class Dashboard extends Database {
    function __construct() {
        parent::__construct();
    }

    public function ACTION_getSummary() {
        $res = array('success' => true);
        
        $res['countMatrix'] = $this->dbDataGetValue("SELECT COUNT(*) FROM data_pilah");
        $res['countUnit'] = $this->dbDataGetValue("SELECT COUNT(*) FROM reff_unit_kerja");
        
        // Mock chart data by years
        $res['years'] = ['2022', '2023', '2024', '2025', '2026'];
        $chartData = [];
        foreach($res['years'] as $y) {
            $count = $this->dbDataGetValue("SELECT COUNT(*) FROM data_pilah_cell WHERE tahun = $y");
            $chartData[] = (int)$count;
        }
        $res['chartData'] = $chartData;
        
        echo json_encode($res);
    }

    public function ACTION_getMatrixList() {
        $sql = "SELECT kode_data_pilah, judul_data_pilah, instansi, aktif
                FROM data_pilah
                ORDER BY kode_data_pilah ASC";
        $sth = $this->dbDataQuery($sql);
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);

        $res = array(
            'success' => true,
            'total'   => count($data),
            'result'  => $data
        );
        echo json_encode($res);
    }
}
