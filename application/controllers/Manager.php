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

	public function share()
	{

	}

	public function order()
	{
		$where = 'product_name';
		$search = '';
		if(isset($_POST['product_search'])){
			$search = $_POST['product_search'];
		}

		$table = 'product';

		$config = array();
    $config["base_url"] = base_url('Manager/order');
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
		$this->load->view('Manager/order', $data);
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

	public function activity()
	{
		$table = 'activity';

		$config = array();
    $config["base_url"] = base_url('Manager/activity');
    $config["total_rows"] = $this->Main_model->record_count_activity($table);
    $config["per_page"] = 5;
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

		$data["activity"] = $this->Main_model->fetch_data_activity($limit, $page, $table);
		$data["links"] = $this->pagination->create_links();
		$this->load->view('Manager/activity', $data);
	}

	public function product_add()
	{
		$this->load->view('Manager/product_add');
	}

	public function product_order()
	{
		$id = $this->uri->segment(3);
		$this->db->where('product_id', $id);
		$data['product'] = $this->db->get('product')->result_array();
		$this->load->view('Manager/product_order', $data);
	}

	public function member_add()
	{
		$this->load->view('Manager/member_add');
	}

	public function activity_add()
	{
		$this->load->view('Manager/activity_add');
	}

	public function member_edit()
	{
		$id = $this->uri->segment(3);
		$this->db->where('member_id', $id);
		$data['member'] = $this->db->get('member')->result_array();
		$this->load->view('Manager/member_edit', $data);
	}

	public function product_edit()
	{
		$id = $this->uri->segment(3);
		$this->db->where('product_id', $id);
		$data['product'] = $this->db->get('product')->result_array();
		$this->load->view('Manager/product_edit', $data);
	}

	public function product_adddata()
	{
		$ext = pathinfo(@$_FILES["file_product"]["name"],PATHINFO_EXTENSION);
		$file_product = 'product'.date('YadHis').'.'.$ext;
		copy($_FILES["file_product"]["tmp_name"],"image/product/".$file_product);
		$product = array(
			'product_name' => $_POST['name_product'],
			'product_price' => $_POST['price_product'],
			'product_balance' => $_POST['balance_product'],
			'product_image' => $file_product
		);

		$this->db->insert('product', $product);
		echo "<script> alert('เพิ่มสินค้าเรียบร้อยแล้วค่ะ');
		window.location.href='index'; </script>";
	}

	public function order_adddata()
	{
		$product = array(
			'product_order' => $_POST['product_order']
		);

		$this->db->where('product_id', $_POST['product_id']);
		$this->db->update('product', $product);
		echo "<script> alert('สั่งซื้อสินค้าเรียบร้อยแล้วค่ะ');
		window.location.href='order'; </script>";
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
			'member_image' => $file_member
		);

		$this->db->insert('member', $member);
		echo "<script> alert('เพิ่มสมาชิกเรียบร้อยแล้วค่ะ');
		window.location.href='member'; </script>";
	}

	public function activity_adddata()
	{
		$ext = pathinfo(@$_FILES["file_activity"]["name"],PATHINFO_EXTENSION);
		$file_activity = 'activity'.date('YadHis').'.'.$ext;
		copy($_FILES["file_activity"]["tmp_name"],"image/activity/".$file_activity);
		$activity = array(
			'activity_image' => $file_activity
		);

		$this->db->insert('activity', $activity);
		echo "<script> alert('เพิ่มภาพกิจกรรมเรียบร้อยแล้วค่ะ');
		window.location.href='activity'; </script>";
	}

	public function product_editdata()
	{
		$file = @$_FILES["file_product"]["tmp_name"];
		if($file==""){
			$product = array(
				'product_name' => $_POST['name_product'],
				'product_price' => $_POST['price_product'],
				'product_balance' => $_POST['balance_product']
			);

			$this->db->where('product_id', $_POST['id_product']);
			$this->db->update('product', $product);
			echo "<script> alert('แก้ไขข้อมูลสินค้าเรียบร้อยแล้วค่ะ');
			window.location.href='index'; </script>";

		}else{
			$ext = pathinfo(@$_FILES["file_product"]["name"],PATHINFO_EXTENSION);
			$file_product = 'product'.date('YadHis').'.'.$ext;
			copy($_FILES["file_product"]["tmp_name"],"image/product/".$file_product);

			$product = array(
				'product_name' => $_POST['name_product'],
				'product_price' => $_POST['price_product'],
				'product_balance' => $_POST['balance_product'],
				'product_image' => $file_product
			);

			$this->db->where('product_id', $_POST['id_product']);
			$this->db->update('product', $product);
			echo "<script> alert('แก้ไขข้อมูลสินค้าเรียบร้อยแล้วค่ะ');
			window.location.href='index'; </script>";
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
					'member_password' => md5($_POST['password_member'])
				);
			}

			$this->db->where('member_id', $_POST['id_member']);
			$this->db->update('member', $member);
			echo "<script> alert('แก้ไขข้อมูลผู้ดูแลระบบเรียบร้อยแล้วค่ะ');
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
					'member_password' => md5($_POST['password_member']),
					'member_image' => $file_member
				);
			}
			$this->db->where('member_id', $_POST['id_member']);
			$this->db->update('member', $member);
			echo "<script> alert('แก้ไขข้อมูลผู้ดูแลระบบเรียบร้อยแล้วค่ะ');
			window.location.href='member'; </script>";
		}
	}

	public function product_delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where('product_id', $id);
		$this->db->delete('product');
		redirect('Manager/index');
	}

	public function order_accept()
	{
		$id = $this->uri->segment(3);
		$this->db->where('product_id', $id);
		$product = $this->db->get('product', 1)->result_array();

		$balance = (int)$product[0]['product_order'] + (int)$product[0]['product_balance'];

		$value = array(
			'product_balance' => $balance,
			'product_order' => 0
		);

		$this->db->where('product_id', $id);
		$this->db->update('product', $value);
		redirect('Manager/order');
	}

	public function member_delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where('member_id', $id);
		$this->db->delete('member');
		redirect('Manager/member');
	}

	public function activity_delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where('activity_id', $id);
		$this->db->delete('activity');
		redirect('Manager/activity');
	}















}
