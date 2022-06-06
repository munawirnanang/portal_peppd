<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_infographController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_guide', 'm_guide');
        $this->load->model('M_article', 'm_article');
        $this->load->model('M_logPortal', 'm_logPortal');
    }

    public function index()
    {
        /* $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('indikator', 'Indikator', 'trim|max_length[255]');
        $this->form_validation->set_rules('wilayah', 'Wilayah', 'trim|max_length[255]');
        $this->form_validation->set_rules('subWilayah', 'Sub Wilayah', 'trim|max_length[255]');
        $this->form_validation->set_rules('kabupatenkota', 'Kabupaten Kota', 'trim|max_length[255]'); */

        /* if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            $indikator = $this->input->post('indikator');
            $wilayah = $this->input->post('wilayah');
            $subWilayah = $this->input->post('subWilayah');
            $kabupatenkota = $this->input->post('kabupatenkota');

            $db2 = $this->load->database('pemantauan', TRUE);

            if ($indikator == 'Pertumbuhan Ekonomi') {
                $IndikatorTable = $db2->query("SELECT * FROM indikator WHERE nama_indikator = '" . $indikator . "'")->result();
                if ($wilayah == 'nasional') {
                    $infograph = $db2->query("SELECT * FROM (select * from nilai_indikator where (id_indikator='1' AND wilayah='1000') AND periode !='01' AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='1' AND wilayah='1000' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC")->result();
                } else if ($wilayah == 'provinsi') {
                } else if ($wilayah == 'kabupatenkota') {
                } else {
                    $infograph = 'Wilayah belum diisi';
                }
            } else {
                $infograph = 'Indikator belum diisi';
            }

            $json_data = array(
                "indikator" => $IndikatorTable,
                "data" => $infograph,
            );

            echo json_encode($json_data);

            $nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
            $nav['last_guide'] = $this->m_guide->getallorderbydesc();

            echo $_GET['indikator'];
            die();

            $this->load->view('pages/include/V_header', $nav);
            $this->load->view('pages/main/V_infograph_2');
            $this->load->view('pages/include/V_footer');
        } */

        $db2 = $this->load->database('pemantauan', TRUE);

        if (isset($_GET['indikator'])) {
            $data['indikator'] = strtolower(str_replace("_", " ", $_GET['indikator']));
        }
        if (isset($_GET['wilayah'])) {
            $data['wilayah'] = strtolower(str_replace("_", " ", $_GET['wilayah']));
        }
        if (isset($_GET['subWilayah'])) {
            $kodeSubWilayah = $_GET['subWilayah'];
            $data['subWilayah'] = $db2->query("SELECT * FROM provinsi WHERE id ='" . $kodeSubWilayah . "'")->result_array();
        }
        if (isset($_GET['kabupatenkota'])) {
            $data['kabupatenkota'] = $_GET['kabupatenkota'];
        }


        $data['IndikatorTable'] = $db2->query("SELECT * FROM indikator WHERE nama_indikator = '" . $data['indikator'] . "'")->result_array();
        if ($data['wilayah'] == 'nasional') {
            $data['infograph'] = $db2->query("SELECT * FROM (SELECT * FROM nilai_indikator WHERE (id_indikator='" . $data['IndikatorTable'][0]['id'] . "' AND wilayah='1000') AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='" . $data['IndikatorTable'][0]['id'] . "' AND wilayah='1000' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC")->result_array();
        } else if ($data['wilayah'] == 'provinsi') {
            $data['infograph'] = $db2->query("SELECT * FROM (SELECT * FROM nilai_indikator WHERE (id_indikator='" . $data['IndikatorTable'][0]['id'] . "' AND wilayah='" . $kodeSubWilayah . "') AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='" . $data['IndikatorTable'][0]['id'] . "' AND wilayah='" . $kodeSubWilayah . "' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC")->result_array();
            $data['graphperbandinganwilayah'] = $db2->query("SELECT p.label AS label, e.* FROM provinsi p JOIN nilai_indikator e ON p.id = e.wilayah WHERE (e.id_indikator='" . $data['IndikatorTable'][0]['id'] . "' AND e.id_periode='" . $data['infograph'][5]['id_periode'] . "') AND (wilayah, versi) IN (SELECT x.wilayah, max(x.versi) AS versi FROM nilai_indikator x WHERE id_indikator='" . $data['IndikatorTable'][0]['id'] . "' AND id_periode='" . $data['infograph'][5]['id_periode'] . "' GROUP BY wilayah) GROUP BY wilayah ORDER BY wilayah ASC")->result_array();
        } else if ($data['wilayah'] == 'kabupatenkota') {
            $sql_nilai_indikator = $db2->query("SELECT * FROM (select * from nilai_indikator where (id_indikator='" . $data['IndikatorTable'][0]['id'] . "' AND wilayah='1000') AND periode !='01' AND (id_periode, versi) in (select id_periode, max(versi) as versi from nilai_indikator WHERE id_indikator='" . $data['IndikatorTable'][0]['id'] . "' AND wilayah='1000' group by id_periode) group by id_periode order by id_periode desc limit 6) y order by id_periode ASC")->result();
            foreach ($sql_nilai_indikator as $row_sql) {
                $idperiode[] = $row_sql->id_periode;
            }
            $periode_kab_max = max($idperiode);
            $data['graphperbandinganwilayah'] = $db2->query("select p.nama_kabupaten as label, e.* from kabupaten p join nilai_indikator e on p.id = e.wilayah where p.prov_id='" . $kodeSubWilayah . "' and (e.id_indikator='1' AND e.id_periode='" . $periode_kab_max . "') AND (wilayah, versi) in (select x.wilayah, max(x.versi) as versi from nilai_indikator x  where id_indikator='1' AND id_periode='" . $periode_kab_max . "' group by wilayah ) group by wilayah order by wilayah asc")->result_array();
        } else {
            $data['infograph'] = 'Wilayah belum diisi';
        }

        $nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
        $nav['last_guide'] = $this->m_guide->getallorderbydesc();

        $this->load->view('pages/include/V_header', $nav);
        $this->load->view('pages/main/V_infograph_2', $data);
        $this->load->view('pages/include/V_footer');
    }
}
