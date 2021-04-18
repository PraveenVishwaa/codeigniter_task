<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('login');
	}
	
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$response = array();
		$res = $this->user_model->checklogin($email,$password);
		if(count($res)>0){
			$sess = array(
				'user_id'  => $res[0]->user_id,
				'username'  => $res[0]->username,
				'email'     => $res[0]->email,
				'logged_in' => true
			);
			$this->session->set_userdata($sess);

			$this->front_page('Inserted Successfully');

			// redirect('controller_name/dashboard','refresh');
		}else{
			$response['message'] = 'Incorrect Email/Password';
			$response['status'] = false;
			$this->load->view('login',$response);
		}
	}

	public function front_page($msg='')
	{
		$user_list = $this->user_model->get_all_users();
		$response['user_list'] = $user_list;
		$response['message'] = $msg;
		
		$this->load->view('general/header');
		$this->load->view('front',$response);
		$this->load->view('general/footer');
	}

	public function create_new()
	{
		$this->load->view('general/header');
		$this->load->view('create_new');
		$this->load->view('general/footer');
	}

	public function check_exist()
	{
		$email = $_POST['email'];
		$resp = $this->db->select('email')->from('tk_users')->where("email",$email)->get()->result();
		if(count($resp)>0){
			$dat['exist'] = true;
			echo json_encode($dat);
		}else{
			$dat['exist'] = false;
			echo json_encode($dat);
		}
		// pirnt_r($_REQUEST);
	}
	
	public function add()
	{
		// $this->load->helper(array('form', 'url'));
		// $config['upload_path']          = './uploads/';
		// $config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']             = 800;

		// $this->load->library('upload', $config);
		// $message = '';
		$user = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
		$img = '';
		$name = $_FILES['userphoto']['name'];
		$arr = explode('.',$name);
		if(isset($_FILES['userphoto']['tmp_name'])){
			if($arr[1] == 'png' || $arr[1]=='jpg' || $arr[1]=='jpeg' || $arr[1]=='gif'){
				$img = "uploads/".$_FILES['userphoto']['name'];
				move_uploaded_file($_FILES['userphoto']['tmp_name'],$img); 
			}
		}

		$data = array(
			"username" => $user,
			"email" => $email,
			"password" => $password,
			"gender" => $gender,
			"age" => $age,
			"photo" => $img,
		);
		$this->db->insert('tk_users', $data);
		$this->front_page('Inserted Successfully');
		// print_r($r);die;
		// print_r($this->upload->data());
		// $this->upload->initialize($config);
		// print_r($_FILES);die;
		// if ( ! $this->upload->do_upload('userphoto'))
		// {
		// 		echo "no";die;
		// 		$error = array('error' => $this->upload->display_errors());
		// 		// $this->load->view('upload_form', $error);
		// }
		// else
		// {
		// 		$data = array('upload_data' => $this->upload->data());
		// 		echo "ss";die;

		// 		// $this->load->view('upload_success', $data);
		// }
	}
}
