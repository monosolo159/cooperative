<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$this->db->where('admin_user', $username);
		$this->db->where('admin_password', $password);
		$login_admin = $this->db->get('admin')->result_array();

		if($login_admin != null){

			$session = $this->session->set_userdata( array(
	      'admin_id' => $login_admin[0]['admin_id'],
	      'admin_name' => $login_admin[0]['admin_name'],
	      'admin_surname' => $login_admin[0]['admin_surname'],
				'status' => 'admin',
	      'isLoggedIn'=>true
	    	)
	  	);
			echo "<script> alert('ยินดีต้อนรับผู้ดูแลระบบเข้าสู่ระบบค่ะ');
			window.location.href='admin'; </script>";
		}else {
			$this->db->where('authorities_user', $username);
			$this->db->where('authorities_password', $password);
			$login_authorities = $this->db->get('authorities')->result_array();

			if($login_authorities != null){
				$session = $this->session->set_userdata( array(
		      'authorities_id' => $login_authorities[0]['authorities_id'],
		      'authorities_name' => $login_authorities[0]['authorities_name'],
		      'authorities_surname' => $login_authorities[0]['authorities_surname'],
					'status' => 'officer',
		      'isLoggedIn'=>true
		    	)
		  	);
				echo "<script> alert('ยินดีต้อนรับเจ้าหน้าที่เข้าสู่ระบบค่ะ');
				window.location.href='officer'; </script>";
			}else {

				$this->db->where('manager_user', $username);
				$this->db->where('manager_password', $password);
				$login_manager = $this->db->get('manager')->result_array();

				if($login_manager != null){
					$session = $this->session->set_userdata( array(
			      'manager_id' => $login_manager[0]['manager_id'],
			      'manager_name' => $login_manager[0]['manager_name'],
			      'manager_surname' => $login_manager[0]['manager_surname'],
						'status' => 'manager',
			      'isLoggedIn'=>true
			    	)
			  	);
					echo "<script> alert('ยินดีต้อนรับผู้จัดการที่เข้าสู่ระบบค่ะ');
					window.location.href='manager'; </script>";
				}else {
					$this->db->where('member_user', $username);
					$this->db->where('member_password', $password);
					$login_member = $this->db->get('member')->result_array();

					if($login_member != null){
						$session = $this->session->set_userdata( array(
							'member_id' => $login_member[0]['member_id'],
							'member_name' => $login_member[0]['member_name'],
							'member_surname' => $login_member[0]['member_surname'],
							'status' => 'member',
							'isLoggedIn'=>true
							)
						);
						echo "<script> alert('ยินดีต้อนรับสมาชิกที่เข้าสู่ระบบค่ะ');
						window.location.href='member'; </script>";
					}else {
						echo "<script> alert('ชื่อผู้ใช้งาน หรือ รหัสผ่าน ไม่ถูกต้อง กรุณาลองใหม่อีกครั้งค่ะ !!');
						window.location.href='index'; </script>";
					}
				}
			}
		}
	}

	public function logout() {
    $this->session->sess_destroy();
    redirect('index');
    //$this->index();
  }













}
