<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_pagesController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_guide', 'm_guide');
		$this->load->model('M_article', 'm_article');
		$this->load->model('M_logPortal', 'm_logPortal');
	}

	public function article_pagination($page_segment)
	{
		// load library pagination
		$this->load->library("pagination");

		//konfigurasi pagination
		$config['base_url'] = site_url(); //site url
		$config['total_rows'] = $this->m_article->count_all(); //total row
		$config['per_page'] = 3;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$config["num_links"] = 1;
		$config["use_page_numbers"] = TRUE;

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = FALSE;
		$config['last_link']        = FALSE;
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<nav><ul class="pagination justify-content-end">';
		$config['full_tag_close']   = '</ul></nav>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';

		// inisialisasi config ke dalam pagination
		$this->pagination->initialize($config);
		// ambil nilai yg ada di url ke 3
		$page = $this->uri->segment(3);
		// $page = $page_segment;
		// inisialisasi nilai awal untuk database limit
		$start = ($page - 1) * $config["per_page"];
		// panggil fungsi fetch_details di model
		$list_article = $this->m_article->fetch_details($config["per_page"], $start);

		// nilai kosong
		$output = '';
		// melakukan perulangan data artikel untuk di tampilkan dan di tampung pada variable output 
		foreach ($list_article as $article) {
			$output .= '<div class="card mb-3">';
			$output .= '<div class="row no-gutters">';
			$output .= '<div class="col-md-5">';
			$output .= '<img class="w-100 img-news" src="' . base_url() . 'assets/images/summernote/' . $article->title_picture . '" alt="' . $article->title . '" />';
			$output .= '</div>';
			$output .= '<div class="col-md-7">';
			$output .= '<div class="card-body">';
			$output .= '<p class="card-text">';
			$output .= '<small class="text-muted">' . date("j F Y", strtotime(substr($article->created_at, 0, 10))) . '</small>';
			$output .= '<span class="badge badge-secondary float-right">' . $article->name . '</span>';
			$output .= '</p>';
			$output .= '<h5 class="card-title title-news">';
			$output .= '<b>' . $article->title . '</b>';
			$output .= '</h5>';
			$output .= '<p class="card-text text-news">';
			$output .= (strlen($article->description) > 105) ? substr($article->description, 0, 101) . '...' : $article->description;
			// $output .= '<i><a class="btn-read-more-article" data-id="'.$article->id.'" target="_blank" rel="noopener" href="'.base_url().'news/'.$article->slug.'" title="'.$article->title.'">selengkapnya</a></i>';
			$output .= '<br/><a type="button" class="button-read-more btn-read-more-article" data-id="' . $article->id . '" target="_blank" rel="noopener" href="' . base_url() . 'news/' . $article->slug . '" title="' . $article->title . '">Selengkapnya...<i class="fa fa-align-left pl-1" aria-hidden="true"></i></a>';
			$output .= '</p>';
			$output .= '</div>';
			$output .= '</div>';
			$output .= '</div>';
			$output .= '</div>';
		}

		// inisialisasi array
		$list_article_pagination = array(
			'pagination_link'	=> $this->pagination->create_links(),
			'list_article'		=> $output
		);

		echo json_encode($list_article_pagination);
	}

	public function home()
	{
		$data['list_publications'] = $this->m_guide->getallorderbydesc();

		$data['list_pub'] = array();
		foreach ($data['list_publications'] as $l_pub) {
			$item_publication = $this->m_guide->allandpagehintdownload('user menklik dokumen/file dengan id = ' . $l_pub->id . '%', 'user mengunduh dokumen/file dengan id = ' . $l_pub->id . '%', $l_pub->id);
			array_push($data['list_pub'], $item_publication);
		}

		/* $where_article = array(
			'status' => 'publish',
		);
		$data['articles'] = $this->m_article->getby($where_article); */
		$data['articles'] = $this->m_article->joinCategorieswhere1('status', 'publish');
		// $data['articles'] = $this->m_article->joinCategorieswhere1limit('status', 'publish', '3');

		$category = $this->m_article->selectdistinctorderbydesc('id_category', 'created_at', 'DESC');

		for ($i = 0; $i < count($category); $i++) {
			$data['carousel_content'][$i] = $this->m_article->joinCategorieswhere2limit('status', 'publish', 'id_category', $category[$i]->id_category, '1');
		}

		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_home', $data);
		$this->load->view('pages/include/V_footer');
	}

	public function news($slug = '')
	{
		if ($slug == '') {
			/* $where_article = array(
				'status' => 'publish',
			);
			$data['articles'] = $this->m_article->getby($where_article); */
			$data['articles'] = $this->m_article->joinCategorieswhere1('status', 'publish');

			$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
			$nav['last_guide'] = $this->m_guide->getallorderbydesc();

			$this->load->view('pages/include/V_header', $nav);
			$this->load->view('pages/main/V_article_publication', $data);
			$this->load->view('pages/include/V_footer');
		} else {
			/* $where_article = array(
				'slug' => $slug,

			);
			$data['article'] = $this->m_article->getby($where_article); */
			$data['article'] = $this->m_article->joinCategorieswhere1('articles.slug', $slug);

			$where_page_hint = array(
				'action' => 'user mengklik article dengan id = ' . $data['article'][0]->id . ' '
			);
			$data['page_hint'] = $this->m_logPortal->likeby($where_page_hint);

			// linked article
			$sum_article_before = $this->m_article->article_before($data['article'][0]->id_category, $data['article'][0]->created_at);
			$sum_article_after = $this->m_article->article_after($data['article'][0]->id_category, $data['article'][0]->created_at);

			if ((count($sum_article_after) >= 2) && (count($sum_article_before) >= 2)) {
				$data['article_before'] = $this->m_article->article_before_limit($data['article'][0]->id_category, $data['article'][0]->created_at, 2);
				$data['article_after'] = $this->m_article->article_after_limit($data['article'][0]->id_category, $data['article'][0]->created_at, 2);
			} else if ((count($sum_article_after) >= 2) && (count($sum_article_before) < 2)) {
				$data['article_before'] = $this->m_article->article_before_limit($data['article'][0]->id_category, $data['article'][0]->created_at, count($sum_article_before));
				$data['article_after'] = $this->m_article->article_after_limit($data['article'][0]->id_category, $data['article'][0]->created_at, 4 - count($sum_article_before));
			} else if ((count($sum_article_after) < 2) && (count($sum_article_before) >= 2)) {
				$data['article_before'] = $this->m_article->article_before_limit($data['article'][0]->id_category, $data['article'][0]->created_at, 4 - count($sum_article_after));
				$data['article_after'] = $this->m_article->article_after_limit($data['article'][0]->id_category, $data['article'][0]->created_at, count($sum_article_after));
			} else if ((count($sum_article_after) < 2) && (count($sum_article_before) < 2)) {
				$data['article_before'] = $this->m_article->article_before_limit($data['article'][0]->id_category, $data['article'][0]->created_at, count($sum_article_before));
				$data['article_after'] = $this->m_article->article_after_limit($data['article'][0]->id_category, $data['article'][0]->created_at, count($sum_article_after));
			} else {
				$data['article_before'] = '';
				$data['article_after'] = '';
			}
			// end linked article

			$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
			$nav['last_guide'] = $this->m_guide->getallorderbydesc();

			$this->load->view('pages/include/V_header', $nav);
			$this->load->view('pages/main/V_article', $data);
			$this->load->view('pages/include/V_footer');
		}
	}

	public function publication()
	{
		$data['list_publications'] = $this->m_guide->getallorderbydesc();

		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_publication', $data);
		$this->load->view('pages/include/V_footer');
	}

	public function file_publication($folder, $title)
	{
		$data['folder'] = $folder;
		$data['title'] = $title;
		$this->load->view('pages/main/V_file_publication', $data);
	}

	public function aplikasi()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_aplikasi');
		$this->load->view('pages/include/V_footer');
	}

	public function kegiatan()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_kegiatan');
		$this->load->view('pages/include/V_footer');
	}

	public function karir()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_career');
		$this->load->view('pages/include/V_footer');
	}

	public function penghargaan()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_penghargaan');
		$this->load->view('pages/include/V_footer');
	}

	public function pemantauan()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_pemantauan');
		$this->load->view('pages/include/V_footer');
	}

	public function evaluasi()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$category = $this->m_article->selectdistinctorderbydesc('id_category', 'created_at', 'DESC');

		for ($i = 0; $i < count($category); $i++) {
			$data['carousel_content'][$i] = $this->m_article->joinCategorieswhere2limit('status', 'publish', 'id_category', $category[$i]->id_category, '1');
		}

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_evaluasi', $data);
		$this->load->view('pages/include/V_footer');
	}

	public function koordinasi()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_koordinasi');
		$this->load->view('pages/include/V_footer');
	}

	public function profil_ppd()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_profil_ppd');
		$this->load->view('pages/include/V_footer');
	}

	public function pedoman_ppd()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_pedoman_ppd');
		$this->load->view('pages/include/V_footer');
	}

	public function infograph()
	{
		$nav['last_article'] = $this->m_article->getallorderbydescwhere1('status', 'publish');
		$nav['last_guide'] = $this->m_guide->getallorderbydesc();

		$this->load->view('pages/include/V_header', $nav);
		$this->load->view('pages/main/V_infograph_2');
		$this->load->view('pages/include/V_footer');
	}
}
