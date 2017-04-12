<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
     {
          parent::__construct();
          $this->load->database();
          //load the login model
          $this->load->model('MLogin');
     }

	public function index()
	{
		if ($this->session->userdata('loginuser')){
			$session_data = $this->session->userdata('loginuser');
			redirect ('transaksi');
		}
		else {
			$this->load->view('VLogin.php');
		}
	}

	public function cek(){
		//asign variable dari input form
		$username = $this->input->post("i_username");
		$password = $this->input->post("i_password");

		//proses validasi form
		$this->form_validation->set_rules("i_username","Username", "trim|required");
		$this->form_validation->set_rules("i_password","Password", "trim|required");

		//pengecekan form
		if ($this->form_validation->run() == FALSE){
			$this->load->view('VLogin.php'); //gagal kembali reload halaman login
		}
		else{
			$userdata = $this->MLogin->GetUser($username,$password); //berhasil, load modul getuser

			if (isset($userdata)){ //usernya ada
				//melakukan pengaturan variable sesi
				$session_data = array (
						'username' => $userdata->username,
						'loginuser' => 1,
						'role' => $userdata->id_role,
						'iduser' => $userdata->id_user
					);
				$this->session->set_userdata($session_data);
				redirect('transaksi'); //diarahkan kembali ke halaman transaksi
			}
			else {
				$this->session->set_flashdata('msg','<p><span class="alert alert-danger">User atau password anda salah!</span></p>'); // tamplikan pesan error jika password salah
				redirect('login');
			}
		}
	}


	public function logout(){
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login');
	}
}
