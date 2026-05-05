<?php

class DataPilah extends Database
{

    function __construct()
    {
        parent::__construct();
    }

    private function get_userId()
    {
        $user = new os;
        $userData = $user->getUserData();
        $userDataArr = json_decode($userData);
        $userId = $userDataArr->user_id;
        return $userId;
    }

    private function findField() {
        $findField = [
            "judul_data_pilah","kode_data_pilah","aktif","kode_instansi","instansi","header_baris"
        ];
        return $findField;
    }

    private function buildSqlSearchingCriteria($keywords, $findField) {
        $arrayKata = explode(' ', $keywords);
        $queryCriteria = array();
        foreach ($arrayKata as $hasil) {
            $criteria = array();
            foreach ($findField as $fieldName) {
                $criteria[] = "LOWER($fieldName) like '%$hasil%'";
            }
            $queryCriteria[] = implode(" OR ", $criteria);
        }
        $resultCriteria = implode(" OR ", $queryCriteria);
        return $resultCriteria;
    }

    // =====================================================================
    // DAFTAR DATA PILAH (header matriks)
    // =====================================================================

    public function ACTION_list($return=false)
    {
        $params = isset($_GET) ? $_GET : $_POST;
        $userId = $this->get_userId();
        $sql = 'SELECT * FROM data_pilah';
        if(isset($_POST['search']['value']) && $_POST['search']['value'] !=''){
            $keywords = strtolower($_POST['search']['value']);
            $findField = $this->findField();
            $criteria = $this->buildSqlSearchingCriteria($keywords, $findField);
            $sql .= " where ".$criteria;
        }
        if (isset($_POST['start'])) {
            $start = $_POST['start'];
            $limit = $_POST['length'];
            $sql .= " limit $start,$limit ";
        }

        $arrayData = $this->dbDataSelectAndReturnAll($sql, $params, true);
        if($return){
            return $arrayData;
        }
        $array = array();
        $sqlCount = "SELECT count(*) FROM data_pilah ";
        $countData = $this->dbDataGetValue($sqlCount);
        $array['recordsTotal'] = $countData;
        $array['recordsFiltered'] = $countData;
        $array['draw'] = $_POST['draw'];
        $array['data'] = (array)$arrayData;
        echo json_encode($array);
    }

    public function ACTION_add(){
        $params = isset($_GET) ? $_GET : $_POST;
        $kode_data_pilah = $params['data']['kode_data_pilah'];
        $sql_k = "SELECT * FROM data_pilah WHERE kode_data_pilah='$kode_data_pilah'";
        $sql = "insert into data_pilah (judul_data_pilah,kode_data_pilah,aktif,kode_instansi,instansi,header_baris) VALUES 
                                          (:judul_data_pilah,:kode_data_pilah,:aktif,:kode_instansi,:instansi,:header_baris)";
        if($this->dbDataRowsCount($sql_k,$params['data']) > 0) {
            echo '{"success" : false,"msg": "Kode Data Pilah Sudah Ada"}';
        }else {
            echo $this->dbDataExecute($sql,$params['data']);
        }
    }

    public function ACTION_update(){
        $params = isset($_GET) ? $_GET : $_POST;
        $sql = "update data_pilah set judul_data_pilah=:judul_data_pilah,kode_data_pilah=:kode_data_pilah,aktif=:aktif,kode_instansi=:kode_instansi,instansi=:instansi,header_baris=:header_baris
                 WHERE id_data_pilah=:id_data_pilah";
        echo $this->dbDataExecute($sql,$params['data']);
    }

    public function ACTION_delete(){
        $params = isset($_GET) ? $_GET : $_POST;
        $sql = "delete from data_pilah WHERE id_data_pilah=:id_data_pilah";
        echo $this->dbDataExecute($sql,$params['data']);
    }

    // =====================================================================
    // DETAIL: Ambil detail satu data pilah berdasarkan kode
    // =====================================================================

    public function ACTION_getDetail(){
        $params = isset($_GET) ? $_GET : $_POST;
        $kode = $params['kode_data_pilah'];
        $sql = "SELECT * FROM data_pilah WHERE kode_data_pilah = '$kode'";
        $data = $this->dbDataSelectAndReturnAll($sql, $params, true);
        $result = new stdClass();
        if(count($data) > 0){
            $result->success = true;
            $result->data = $data[0];
        } else {
            $result->success = false;
            $result->msg = "Data tidak ditemukan";
        }
        echo json_encode($result);
    }

    // =====================================================================
    // MANAJEMEN BARIS
    // =====================================================================

    public function ACTION_listBaris(){
        $params = isset($_GET) ? $_GET : $_POST;
        $kode = $params['kode_data_pilah'];
        $sql = "SELECT * FROM data_pilah_baris WHERE kode_data_pilah = '$kode' ORDER BY no_urut ASC";
        $data = $this->dbDataSelectAndReturnAll($sql, $params, true);
        $result = new stdClass();
        $result->success = true;
        $result->data = $data;
        echo json_encode($result);
    }

    public function ACTION_addBaris(){
        $params = isset($_GET) ? $_GET : $_POST;
        $d = $params['data'];

        // Cek duplikat kode_baris
        $kode_baris = $d['kode_baris'];
        $sqlCek = "SELECT count(*) FROM data_pilah_baris WHERE kode_baris = '$kode_baris'";
        $count = $this->dbDataGetValue($sqlCek);
        if($count > 0){
            echo '{"success":false,"msg":"Kode baris sudah ada"}';
            return;
        }

        // Auto no_urut
        $kode_dp = $d['kode_data_pilah'];
        $sqlMax = "SELECT IFNULL(MAX(no_urut),0)+1 FROM data_pilah_baris WHERE kode_data_pilah = '$kode_dp'";
        $noUrut = $this->dbDataGetValue($sqlMax);

        $sql = "INSERT INTO data_pilah_baris (kode_data_pilah, no_urut, kode_baris, nama_baris, aktif) 
                VALUES (:kode_data_pilah, $noUrut, :kode_baris, :nama_baris, :aktif)";
        echo $this->dbDataExecute($sql, $d);
    }

    public function ACTION_deleteBaris(){
        $params = isset($_GET) ? $_GET : $_POST;
        $id = $params['data']['id_data_pilah_baris'];
        $sql = "DELETE FROM data_pilah_baris WHERE id_data_pilah_baris = $id";
        echo $this->dbDataExecute($sql);
    }

    // =====================================================================
    // MANAJEMEN KOLOM
    // =====================================================================

    public function ACTION_listKolom(){
        $params = isset($_GET) ? $_GET : $_POST;
        $kode = $params['kode_data_pilah'];
        $sql = "SELECT * FROM data_pilah_kolom WHERE kode_data_pilah = '$kode' ORDER BY id_data_pilah_kolom ASC";
        $data = $this->dbDataSelectAndReturnAll($sql, $params, true);
        $result = new stdClass();
        $result->success = true;
        $result->data = $data;
        echo json_encode($result);
    }

    public function ACTION_addKolom(){
        $params = isset($_GET) ? $_GET : $_POST;
        $d = $params['data'];

        // Cek duplikat kode_kolom
        $kode_kolom = $d['kode_kolom'];
        $sqlCek = "SELECT count(*) FROM data_pilah_kolom WHERE kode_kolom = '$kode_kolom'";
        $count = $this->dbDataGetValue($sqlCek);
        if($count > 0){
            echo '{"success":false,"msg":"Kode kolom sudah ada"}';
            return;
        }

        $sql = "INSERT INTO data_pilah_kolom (kode_data_pilah, header_kolom, nama_kolom, kode_kolom, tipe_kolom, aktif) 
                VALUES (:kode_data_pilah, :header_kolom, :nama_kolom, :kode_kolom, :tipe_kolom, :aktif)";
        echo $this->dbDataExecute($sql, $d);
    }

    public function ACTION_deleteKolom(){
        $params = isset($_GET) ? $_GET : $_POST;
        $id = $params['data']['id_data_pilah_kolom'];
        $sql = "DELETE FROM data_pilah_kolom WHERE id_data_pilah_kolom = $id";
        echo $this->dbDataExecute($sql);
    }

    // =====================================================================
    // MATRIKS: Render data matriks (baris x kolom) + cell values
    // =====================================================================

    public function ACTION_getMatriks(){
        $params = isset($_GET) ? $_GET : $_POST;
        $kode = $params['kode_data_pilah'];
        $tahun = isset($params['tahun']) ? (int)$params['tahun'] : date('Y');

        // Ambil baris
        $sqlBaris = "SELECT * FROM data_pilah_baris WHERE kode_data_pilah = '$kode' ORDER BY no_urut ASC";
        $baris = $this->dbDataSelectAndReturnAll($sqlBaris, $params, true);

        // Ambil kolom
        $sqlKolom = "SELECT * FROM data_pilah_kolom WHERE kode_data_pilah = '$kode' ORDER BY id_data_pilah_kolom ASC";
        $kolom = $this->dbDataSelectAndReturnAll($sqlKolom, $params, true);

        // Ambil semua cell untuk kode + tahun ini
        $sqlCell = "SELECT * FROM data_pilah_cell WHERE kode_data_pilah = '$kode' AND tahun = $tahun";
        $cells = $this->dbDataSelectAndReturnAll($sqlCell, $params, true);

        // Bangun lookup cell: key = "kode_baris|kode_kolom" => val
        $cellMap = array();
        foreach($cells as $c){
            $key = $c->kode_baris . '|' . $c->kode_kolom;
            $cellMap[$key] = $c->val;
        }

        // Bangun data matriks
        $matriksRows = array();
        foreach($baris as $b){
            $row = new stdClass();
            $row->kode_baris = $b->kode_baris;
            $row->nama_baris = $b->nama_baris;
            $row->no_urut = $b->no_urut;
            $row->cells = array();
            foreach($kolom as $k){
                $cell = new stdClass();
                $cell->kode_kolom = $k->kode_kolom;
                $key = $b->kode_baris . '|' . $k->kode_kolom;
                $cell->val = isset($cellMap[$key]) ? $cellMap[$key] : '';
                $row->cells[] = $cell;
            }
            $matriksRows[] = $row;
        }

        $result = new stdClass();
        $result->success = true;
        $result->kolom = $kolom;
        $result->baris = $matriksRows;
        $result->tahun = $tahun;
        echo json_encode($result);
    }

    // =====================================================================
    // SAVE CELL: Simpan/Update satu nilai cell
    // =====================================================================

    public function ACTION_saveCell(){
        $params = isset($_GET) ? $_GET : $_POST;
        $d = $params['data'];
        $kode_dp = $d['kode_data_pilah'];
        $kode_baris = $d['kode_baris'];
        $kode_kolom = $d['kode_kolom'];
        $tahun = (int)$d['tahun'];
        $val = $d['val'];

        // Cek apakah cell sudah ada
        $sqlCek = "SELECT count(*) FROM data_pilah_cell 
                   WHERE kode_data_pilah='$kode_dp' AND kode_baris='$kode_baris' 
                   AND kode_kolom='$kode_kolom' AND tahun=$tahun";
        $count = $this->dbDataGetValue($sqlCek);

        if($count > 0){
            $sql = "UPDATE data_pilah_cell SET val = :val 
                    WHERE kode_data_pilah = :kode_data_pilah 
                    AND kode_baris = :kode_baris 
                    AND kode_kolom = :kode_kolom 
                    AND tahun = :tahun";
        } else {
            $sql = "INSERT INTO data_pilah_cell (kode_data_pilah, kode_baris, kode_kolom, tahun, val) 
                    VALUES (:kode_data_pilah, :kode_baris, :kode_kolom, :tahun, :val)";
        }
        echo $this->dbDataExecute($sql, $d);
    }

    // =====================================================================
    // PDF EXPORT (legacy — dipertahankan)
    // =====================================================================

    public function ACTION_listPrint($return = false)
    {
        $params = isset($_GET) ? $_GET : $_POST;
        $userId = $this->get_userId();
        $sql = 'SELECT * FROM data_pilah';
        if(isset($_POST['search']['value']) && $_POST['search']['value'] !=''){
            $keywords = strtolower($_POST['search']['value']);
            $findField = $this->findField();
            $criteria = $this->buildSqlSearchingCriteria($keywords, $findField);
            $sql .= " where ".$criteria;
        }
        if (isset($_POST['start'])) {
            $start = $_POST['start'];
            $limit = $_POST['length'];
            $sql .= " limit $start,$limit ";
        }
        echo $this->dbDataSelectAndReturnAll($sql, $params);
    }

    public function ACTION_pdf()
    {
        $data['value'] = $this->ACTION_list(true);
        $i = 0;
        $data['judul'] = "Export data pdf";

        $pdf = $this->createHtml2Pdf('DataPilah', $data, 'tpl_pdf.html');
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Arkan Herawan');
        $pdf->SetTitle('Contoh export pdf');
        $pdf->SetSubject('export pdf dengan digital signature');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT, PDF_MARGIN_TOP);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->AddPage();
        $pdf->writeHTML($pdf->content, true, 0, true, 0);
        $pdf->Output('export_pdf_file.pdf', 'D');
    }
}
