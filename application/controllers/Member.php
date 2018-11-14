<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
	}

	public function index()
	{
		$where = 'product_name';
		$search = '';
		if(isset($_POST['product_search'])){
			$search = $_POST['product_search'];
		}

		$table = 'product';

		$config = array();
    $config["base_url"] = base_url('Manager/index');
    $config["total_rows"] = $this->Main_model->record_count($table, $search, $where);
    $config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$limit = $config['per_page'];

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

    $this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["product"] = $this->Main_model->fetch_data($limit, $page, $table, $search, $where);
		$data["links"] = $this->pagination->create_links();

		$this->load->view('Manager/index', $data);
	}

	public function index()
	{
		$where = 'member_name';
		$search = '';
		if(isset($_POST['member_search'])){
			$search = $_POST['member_search'];
		}

		$table = 'member';

		$config = array();
    $config["base_url"] = base_url('Manager/member');
    $config["total_rows"] = $this->Main_model->record_count($table, $search, $where);
    $config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$limit = $config['per_page'];

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

    $this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["member"] = $this->Main_model->fetch_data($limit, $page, $table, $search, $where);
		$data["links"] = $this->pagination->create_links();
		$this->load->view('Manager/member', $data);
	}


}
