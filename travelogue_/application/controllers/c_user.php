<?php

class C_user extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_member');
		$this->load->model('m_admin');
		$this->load->model('m_post');
	}
	function index(){
		$data['dataPost'] = $this->m_post->Post_u();
		$this->load->view('v_index_u',$data);
	}

	function cari(){
		$cari = $this->input->get('cari');
		$data['dataPost'] = $this->m_member->search($cari);
        $this->load->view('v_index_m',$data);
	}
	function cari2($cari){
		$data['dataPost'] = $this->m_member->search($cari);
        $this->load->view('v_index_m',$data);
	}
	function cariKK(){
		$kategori = $this->input->get('kategori');
		$kota = $this->input->get('kota');
		$data['dataPost'] = $this->m_member->searchKK($kategori,$kota);
        $this->load->view('v_index_m',$data);
	}
	function profilememberlain($id_member){
		$where = array('id_member' => $id_member);
		$data['dataPost'] = $this->m_member->getMember('member',$where)->result_array();
		$this->load->view('v_profilememberlain_u',$data);
	}
	function aksi_login(){
		$email = $this->input->post('email');										//1
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
		);
		$ambil = $this->m_user->getMember('member',$where)->result_array();
	    foreach ($ambil as $data) {
				$data_session = array(
     			'email' => $email,
     			'password' => $password,
     			'id_member' => $data['id_member'],
     			'nama_member' => $data['nama_member'],
     			'no_hp' => $data['no_hp'],
   				'alamat' => $data['alamat'],
   				'foto' => $data['foto'],
   				'status' => "login"
	    	);
	    $this->session->set_userdata($data_session);
		}
	    if($this->session->userdata("id_member") != ''){							//2
	    	redirect("c_member");													//3
		}
		else{																		//4
			echo "<script>alert('Email atau password salah!');</script>";
			echo "<script>history.go(-1);</script>";
		}																			//5
	}																				//6
	function login_admin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
		);
		$ambil = $this->m_admin->getAdmin('admin',$where)->result_array();
	    foreach ($ambil as $data) {
    		$data_session = array(
     			'email' => $email,
     			'password' => $password,
     			'id_admin' => $data['id_admin'],
     			'nama_admin' => $data['nama_admin'],
   				'foto' => $data['foto'],
   				'status' => "login"
	    	);
	    $this->session->set_userdata($data_session);
		}
	    if($this->session->userdata("id_admin") != ''){
	    	redirect("c_admin");
		}
		else{
			echo "<script>alert('Username atau password salah!');</script>";
			echo "<script>history.go(-1);</script>";
		}

	}
	// Register
  function cek_ketersediaan_email(){
		$email = $this->input->post('email');
		$jml_karakter = strlen($email);									//1
	  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {  							//2
	        echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';										//3
	  }
	  else if($this->m_user->apakah_email_tersedia($email)) { 					//4
	      echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Sudah Terdaftar</label>';  															 																	//5
		}
		else if($jml_karakter > 30){
			echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Maksimal 30 Karakter</span></label>';
		}
	  else {  																	//6
	      echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Tersedia</label>';
		}  																			//7
	}
	function dataRegister(){
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$data = array(
				'nama_member' => $nama,
				'email' => $email,
				'password' => md5($password)
				);
			$this->m_user->simpanDataRegister($data,'member');
			echo "<script>alert('Data berhasil di tambahkan!');
			history.go(-1);</script>";
	}
}
