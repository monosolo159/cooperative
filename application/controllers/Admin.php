<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
	}

	public function index()
	{
		$where = 'admin_name';
		$search = '';
		if(isset($_POST['admin_search'])){
			$search = $_POST['admin_search'];
		}

		$table = 'admin';

		$config = array();
    $config["base_url"] = base_url('admin/index');
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
		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["admin"] = $this->Main_model->fetch_data($limit, $page, $table, $search, $where);
		$data["links"] = $this->pagination->create_links();


		$this->load->view('Admin/index', $data);
	}

	public function authorities()
	{
		$where = 'authorities_name';
		$search = '';
		if(isset($_POST['authorities_search'])){
			$search = $_POST['authorities_search'];
		}

		$table = 'authorities';

		$config = array();
    $config["base_url"] = base_url('admin/authorities');
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
		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["authorities"] = $this->Main_model->fetch_data($limit, $page, $table, $search, $where);
		$data["links"] = $this->pagination->create_links();


		$this->load->view('Admin/authorities', $data);
	}

	public function member()
	{
		$where = 'member_name';
		$search = '';
		if(isset($_POST['member_search'])){
			$search = $_POST['member_search'];
		}

		$table = 'member';

		$config = array();
    $config["base_url"] = base_url('admin/member');
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
		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["member"] = $this->Main_model->fetch_data($limit, $page, $table, $search, $where);
		$data["links"] = $this->pagination->create_links();

		$this->load->view('Admin/member', $data);
	}

	public function share()
	{
    $data['setting_web'] = $this
		->db
		// ->get('setting_web')->result_array();

		->select('setting_web_id,setting_web_per_share,(SELECT SUM(member_share)  FROM member) AS member_share_all')
		// ->select('*,(select count(book_page_id) from book_page where book.book_id = book_page.book_id) as book_all_page,(select count(book_read_id) from book_read where book_read.book_id = book.book_id) as book_all_read,(select sum(book_like_score) from book_like where book_like.book_id = book.book_id)/(select count(book_like_id) from book_like where book_like.book_id = book.book_id) as book_score')
		// ->order_by('antiques_date','desc')
		// ->join('antiques_store','antiques_store.antiques_store_id = antiques.antiques_store_id','left')
		// ->join('staff','staff.staff_id = antiques.staff_id','left')
		->get('setting_web')
		->result_array();


		$this->load->view('Admin/share', $data);
	}

	public function share_update(){
		$input = $this->input->post();
		$this->db->where('setting_web_id',$input['setting_web_id'])->update('setting_web',$input);
		echo "<script> alert('บันทึกข้อมูลเรียบร้อยแล้วค่ะ');
		window.location.href='share'; </script>";
	}

	public function report()
	{
		$where = 'member_name';
		$search = '';
		if(isset($_POST['member_search'])){
			$search = $_POST['member_search'];
		}

		$table = 'member';

		$config = array();
    $config["base_url"] = base_url('admin/report');
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
		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["member"] = $this->Main_model->fetch_data($limit, $page, $table, $search, $where);
		$data["links"] = $this->pagination->create_links();

		$this->load->view('Admin/report', $data);
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
    $config["base_url"] = base_url('admin/product');
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
		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["product"] = $this->Main_model->fetch_data($limit, $page, $table, $search, $where);
		$data["links"] = $this->pagination->create_links();

		$this->load->view('Admin/product', $data);
	}

	public function admin_add()
	{
		$this->load->view('Admin/admin_add');
	}

	public function product_add()
	{
		$this->load->view('authorities/product_add');
	}

	public function authorities_add()
	{
		$this->load->view('Admin/authorities_add');
	}

	public function member_add()
	{
		$this->load->view('Admin/member_add');
	}

	public function admin_edit()
	{
		$id = $this->uri->segment(3);
		$this->db->where('admin_id', $id);
		$data['admin'] = $this->db->get('admin')->result_array();
		$this->load->view('Admin/admin_edit', $data);
	}

	public function authorities_edit()
	{
		$id = $this->uri->segment(3);
		$this->db->where('authorities_id', $id);
		$data['authorities'] = $this->db->get('authorities')->result_array();
		$this->load->view('Admin/authorities_edit', $data);
	}

	public function member_edit()
	{
		$id = $this->uri->segment(3);
		$this->db->where('member_id', $id);
		$data['member'] = $this->db->get('member')->result_array();
		$this->load->view('Admin/member_edit', $data);
	}

	public function admin_adddata()
	{
		$ext = pathinfo(@$_FILES["file_admin"]["name"],PATHINFO_EXTENSION);
		$file_admin = 'admin'.date('YadHis').'.'.$ext;
		copy($_FILES["file_admin"]["tmp_name"],"image/admin/".$file_admin);
		$admin = array(
			'admin_name' => $_POST['name_admin'],
			'admin_surname' => $_POST['surname_admin'],
			'admin_gender' => $_POST['gender_admin'],
			'admin_birthday' => $_POST['birthday_admin'],
			'admin_tel' => $_POST['tel_admin'],
			'admin_address' => $_POST['address_admin'],
			'admin_idcard' => $_POST['idcard_admin'],
			'admin_email' => $_POST['email_admin'],
			'admin_user' => $_POST['user_admin'],
			'admin_password' => md5($_POST['password_admin']),
			'admin_image' => $file_admin
		);

		$this->db->insert('admin', $admin);
		echo "<script> alert('เพิ่มผู้ดูแลระบบเรียบร้อยแล้วค่ะ');
		window.location.href='index'; </script>";
	}

	public function authorities_adddata()
	{
		$ext = pathinfo(@$_FILES["file_authorities"]["name"],PATHINFO_EXTENSION);
		$file_authorities = 'authorities'.date('YadHis').'.'.$ext;
		copy($_FILES["file_authorities"]["tmp_name"],"image/authorities/".$file_authorities);
		$authorities = array(
			'authorities_name' => $_POST['name_authorities'],
			'authorities_surname' => $_POST['surname_authorities'],
			'authorities_gender' => $_POST['gender_authorities'],
			'authorities_birthday' => $_POST['birthday_authorities'],
			'authorities_tel' => $_POST['tel_authorities'],
			'authorities_address' => $_POST['address_authorities'],
			'authorities_idcard' => $_POST['idcard_authorities'],
			'authorities_email' => $_POST['email_authorities'],
			'authorities_user' => $_POST['user_authorities'],
			'authorities_password' => md5($_POST['password_authorities']),
			'authorities_image' => $file_authorities
		);

		$this->db->insert('authorities', $authorities);
		echo "<script> alert('เพิ่มเจ้าหน้าที่เรียบร้อยแล้วค่ะ');
		window.location.href='authorities'; </script>";
	}

	public function member_adddata()
	{
		$ext = pathinfo(@$_FILES["file_member"]["name"],PATHINFO_EXTENSION);
		$file_member = 'member'.date('YadHis').'.'.$ext;
		copy($_FILES["file_member"]["tmp_name"],"image/member/".$file_member);
		$member = array(
			'member_name' => $_POST['name_member'],
			'member_surname' => $_POST['surname_member'],
			'member_gender' => $_POST['gender_member'],
			'member_birthday' => $_POST['birthday_member'],
			'member_tel' => $_POST['tel_member'],
			'member_address' => $_POST['address_member'],
			'member_idcard' => $_POST['idcard_member'],
			'member_email' => $_POST['email_member'],
			'member_user' => $_POST['user_member'],
			'member_password' => md5($_POST['password_member']),
			'member_share' => $_POST['member_share'],
			'member_image' => $file_member
		);

		$this->db->insert('member', $member);
		echo "<script> alert('เพิ่มสมาชิกเรียบร้อยแล้วค่ะ');
		window.location.href='member'; </script>";
	}

	public function admin_editdata()
	{
		$file = @$_FILES["file_admin"]["tmp_name"];
		$pass = $_POST['password_admin'];
		if($file==""){
			if($pass == ""){
				$admin = array(
					'admin_name' => $_POST['name_admin'],
					'admin_surname' => $_POST['surname_admin'],
					'admin_gender' => $_POST['gender_admin'],
					'admin_birthday' => $_POST['birthday_admin'],
					'admin_tel' => $_POST['tel_admin'],
					'admin_address' => $_POST['address_admin'],
					'admin_idcard' => $_POST['idcard_admin'],
					'admin_email' => $_POST['email_admin'],
					'admin_user' => $_POST['user_admin']
				);
			}else {
				$admin = array(
					'admin_name' => $_POST['name_admin'],
					'admin_surname' => $_POST['surname_admin'],
					'admin_gender' => $_POST['gender_admin'],
					'admin_birthday' => $_POST['birthday_admin'],
					'admin_tel' => $_POST['tel_admin'],
					'admin_address' => $_POST['address_admin'],
					'admin_idcard' => $_POST['idcard_admin'],
					'admin_email' => $_POST['email_admin'],
					'admin_user' => $_POST['user_admin'],
					'admin_password' => md5($_POST['password_admin'])
				);
			}

			$this->db->where('admin_id', $_POST['id_admin']);
			$this->db->update('admin', $admin);
			echo "<script> alert('แก้ไขข้อมูลผู้ดูแลระบบเรียบร้อยแล้วค่ะ');
			window.location.href='index'; </script>";

		}else{
			$ext = pathinfo(@$_FILES["file_admin"]["name"],PATHINFO_EXTENSION);
			$file_admin = 'admin'.date('YadHis').'.'.$ext;
			copy($_FILES["file_admin"]["tmp_name"],"image/admin/".$file_admin);
			if($pass == ""){
				$admin = array(
					'admin_name' => $_POST['name_admin'],
					'admin_surname' => $_POST['surname_admin'],
					'admin_gender' => $_POST['gender_admin'],
					'admin_birthday' => $_POST['birthday_admin'],
					'admin_tel' => $_POST['tel_admin'],
					'admin_address' => $_POST['address_admin'],
					'admin_idcard' => $_POST['idcard_admin'],
					'admin_email' => $_POST['email_admin'],
					'admin_user' => $_POST['user_admin'],
					'admin_image' => $file_admin
				);
			}else {
				$admin = array(
					'admin_name' => $_POST['name_admin'],
					'admin_surname' => $_POST['surname_admin'],
					'admin_gender' => $_POST['gender_admin'],
					'admin_birthday' => $_POST['birthday_admin'],
					'admin_tel' => $_POST['tel_admin'],
					'admin_address' => $_POST['address_admin'],
					'admin_idcard' => $_POST['idcard_admin'],
					'admin_email' => $_POST['email_admin'],
					'admin_user' => $_POST['user_admin'],
					'admin_password' => md5($_POST['password_admin']),
					'admin_image' => $file_admin
				);
			}
			$this->db->where('admin_id', $_POST['id_admin']);
			$this->db->update('admin', $admin);
			echo "<script> alert('แก้ไขข้อมูลผู้ดูแลระบบเรียบร้อยแล้วค่ะ');
			window.location.href='index'; </script>";
		}
	}

	public function authorities_editdata()
	{
		$file = @$_FILES["file_authorities"]["tmp_name"];
		$pass = $_POST['password_authorities'];
		if($file==""){
			if($pass == ""){
				$authorities = array(
					'authorities_name' => $_POST['name_authorities'],
					'authorities_surname' => $_POST['surname_authorities'],
					'authorities_gender' => $_POST['gender_authorities'],
					'authorities_birthday' => $_POST['birthday_authorities'],
					'authorities_tel' => $_POST['tel_authorities'],
					'authorities_address' => $_POST['address_authorities'],
					'authorities_idcard' => $_POST['idcard_authorities'],
					'authorities_email' => $_POST['email_authorities'],
					'authorities_user' => $_POST['user_authorities']
				);
			}else {
				$authorities = array(
					'authorities_name' => $_POST['name_authorities'],
					'authorities_surname' => $_POST['surname_authorities'],
					'authorities_gender' => $_POST['gender_authorities'],
					'authorities_birthday' => $_POST['birthday_authorities'],
					'authorities_tel' => $_POST['tel_authorities'],
					'authorities_address' => $_POST['address_authorities'],
					'authorities_idcard' => $_POST['idcard_authorities'],
					'authorities_email' => $_POST['email_authorities'],
					'authorities_user' => $_POST['user_authorities'],
					'authorities_password' => md5($_POST['password_authorities'])
				);
			}

			$this->db->where('authorities_id', $_POST['id_authorities']);
			$this->db->update('authorities', $authorities);
			echo "<script> alert('แก้ไขข้อมูลเจ้าหน้าที่เรียบร้อยแล้วค่ะ');
			window.location.href='authorities'; </script>";

		}else{
			$ext = pathinfo(@$_FILES["file_authorities"]["name"],PATHINFO_EXTENSION);
			$file_authorities = 'authorities'.date('YadHis').'.'.$ext;
			copy($_FILES["file_authorities"]["tmp_name"],"image/authorities/".$file_authorities);
			if($pass == ""){
				$authorities = array(
					'authorities_name' => $_POST['name_authorities'],
					'authorities_surname' => $_POST['surname_authorities'],
					'authorities_gender' => $_POST['gender_authorities'],
					'authorities_birthday' => $_POST['birthday_authorities'],
					'authorities_tel' => $_POST['tel_authorities'],
					'authorities_address' => $_POST['address_authorities'],
					'authorities_idcard' => $_POST['idcard_authorities'],
					'authorities_email' => $_POST['email_authorities'],
					'authorities_user' => $_POST['user_authorities'],
					'authorities_image' => $file_authorities
				);
			}else {
				$authorities = array(
					'authorities_name' => $_POST['name_authorities'],
					'authorities_surname' => $_POST['surname_authorities'],
					'authorities_gender' => $_POST['gender_authorities'],
					'authorities_birthday' => $_POST['birthday_authorities'],
					'authorities_tel' => $_POST['tel_authorities'],
					'authorities_address' => $_POST['address_authorities'],
					'authorities_idcard' => $_POST['idcard_authorities'],
					'authorities_email' => $_POST['email_authorities'],
					'authorities_user' => $_POST['user_authorities'],
					'authorities_password' => md5($_POST['password_authorities']),
					'authorities_image' => $file_authorities
				);
			}
			$this->db->where('authorities_id', $_POST['id_authorities']);
			$this->db->update('authorities', $authorities);
			echo "<script> alert('แก้ไขข้อมูลเจ้าหน้าที่เรียบร้อยแล้วค่ะ');
			window.location.href='authorities'; </script>";
		}
	}

	public function member_editdata()
	{
		$file = @$_FILES["file_member"]["tmp_name"];
		$pass = $_POST['password_member'];
		if($file==""){
			if($pass == ""){
				$member = array(
					'member_name' => $_POST['name_member'],
					'member_surname' => $_POST['surname_member'],
					'member_gender' => $_POST['gender_member'],
					'member_birthday' => $_POST['birthday_member'],
					'member_tel' => $_POST['tel_member'],
					'member_address' => $_POST['address_member'],
					'member_idcard' => $_POST['idcard_member'],
					'member_email' => $_POST['email_member'],
					'member_share' => $_POST['member_share'],

					'member_user' => $_POST['user_member']
				);
			}else {
				$member = array(
					'member_name' => $_POST['name_member'],
					'member_surname' => $_POST['surname_member'],
					'member_gender' => $_POST['gender_member'],
					'member_birthday' => $_POST['birthday_member'],
					'member_tel' => $_POST['tel_member'],
					'member_address' => $_POST['address_member'],
					'member_idcard' => $_POST['idcard_member'],
					'member_email' => $_POST['email_member'],
					'member_user' => $_POST['user_member'],
					'member_share' => $_POST['member_share'],

					'member_password' => md5($_POST['password_member'])
				);
			}

			$this->db->where('member_id', $_POST['id_member']);
			$this->db->update('member', $member);
			echo "<script> alert('แก้ไขข้อมูลสมาชิกเรียบร้อยแล้วค่ะ');
			window.location.href='member'; </script>";

		}else{
			$ext = pathinfo(@$_FILES["file_member"]["name"],PATHINFO_EXTENSION);
			$file_member = 'member'.date('YadHis').'.'.$ext;
			copy($_FILES["file_member"]["tmp_name"],"image/member/".$file_member);
			if($pass == ""){
				$member = array(
					'member_name' => $_POST['name_member'],
					'member_surname' => $_POST['surname_member'],
					'member_gender' => $_POST['gender_member'],
					'member_birthday' => $_POST['birthday_member'],
					'member_tel' => $_POST['tel_member'],
					'member_address' => $_POST['address_member'],
					'member_idcard' => $_POST['idcard_member'],
					'member_email' => $_POST['email_member'],
					'member_user' => $_POST['user_member'],
					'member_share' => $_POST['member_share'],

					'member_image' => $file_member
				);
			}else {
				$member = array(
					'member_name' => $_POST['name_member'],
					'member_surname' => $_POST['surname_member'],
					'member_gender' => $_POST['gender_member'],
					'member_birthday' => $_POST['birthday_member'],
					'member_tel' => $_POST['tel_member'],
					'member_address' => $_POST['address_member'],
					'member_idcard' => $_POST['idcard_member'],
					'member_email' => $_POST['email_member'],
					'member_user' => $_POST['user_member'],
					'member_share' => $_POST['member_share'],

					'member_password' => md5($_POST['password_member']),
					'member_image' => $file_member
				);
			}
			$this->db->where('member_id', $_POST['id_member']);
			$this->db->update('member', $member);
			echo "<script> alert('แก้ไขข้อมูลสมาชิกเรียบร้อยแล้วค่ะ');
			window.location.href='member'; </script>";
		}
	}

	public function admin_delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where('admin_id', $id);
		$this->db->delete('admin');
		redirect('admin');
	}

	public function authorities_delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where('authorities_id', $id);
		$this->db->delete('authorities');
		redirect('admin/authorities');
	}

	public function member_delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where('member_id', $id);
		$this->db->delete('member');
		redirect('admin/member');
	}















}
