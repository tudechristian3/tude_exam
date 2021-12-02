<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public function __construct(){
		$this->load->model('MY_Model');
		// $this->load->library('Pdf');
		// $this->load->library('excel');
		$route = $this->router->fetch_class();
		if($route == 'login'){
			if($this->session->has_userdata('username')){
				redirect(base_url('dashboard'));
			}
		} else {
			if(!$this->session->has_userdata('username')){
				redirect(base_url('login'));
			}
		}
	}


	public function load_login($page, $data = array()){
      	//$this->load->view('includes/header_login',$data);
      	$this->load->view($page,$data);
      	//$this->load->view('includes/footer_login',$data);
	}

	public function load_dashboard($page, $data = array()){
      	//$this->load->view('includes/header_login',$data);
      	$this->load->view($page,$data);
      	//$this->load->view('includes/footer_login',$data);
	}

// 	public function load_home($page, $data = array()){
// 		$data['users'] = $this->MY_Model->getRows('user');
// 		$data['res'] = $this->MY_Model->getRows('residence');
// 		$data['barangay_sitio'] = $this->MY_Model->getRows('sitio');
// 		$data['sectorals'] = $this->MY_Model->getRows('sectoral');
// 		$data['organizations'] = $this->MY_Model->getRows('organization');
// 		$data['employments'] = $this->MY_Model->getRows('employment_status');
// 		$data['familys'] = $this->MY_Model->getRows('family_background');
// 		$data['staffs'] = $this->MY_Model->getRows('barangay_staff');
// 		$this->load->view('includes/header',$data);
// 		$this->load->view('includes/navbar',$data);
// 		$this->load->view($page,$data);
// 		$this->load->view('includes/footer',$data);
//   }

// 	public function get_users(){
// 		$users = $this->MY_Model->getRows('jogxpress_user');
// 		echo json_encode(array("users" => $users));
// 	}


}
