<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
	}

	public function index()
	{
		$this->db->order_by("product_id", "DESC");
		$data['product'] = $this->db->get('product', 3)->result_array();
		$this->load->view('Main/index', $data);
	}

	public function history()
	{
		$this->load->view('Main/history');
	}

	public function authorities()
	{
		$data['authorities'] = $this->db->get('authorities')->result_array();
		$this->load->view('Main/authorities', $data);
	}

	public function news()
	{
		$this->load->view('Main/news');
	}

	public function activity()
	{
		$this->db->order_by("activity_id", "DESC");
		$data['activity'] = $this->db->get('activity')->result_array();
		$this->load->view('Main/activity', $data);
	}

	public function product()
	{
		$where = 'product_name';
		$search = '';
		if(isset($_POST['product_search'])){
			$search = $_POST['product_search'];
		}

		$table = 'product';

		$config = array();
    $config["base_url"] = base_url('main/product');
    $config["total_rows"] = $this->Main_model->record_count($table, $search, $where);
    $config["per_page"] = 6;
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
		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["product"] = $this->Main_model->fetch_data($limit, $page, $table, $search, $where);
		$data["links"] = $this->pagination->create_links();

    $this->load->view("Main/product", $data);
	}

	public function register()
	{
		$this->load->view('Main/register');
	}


















}
