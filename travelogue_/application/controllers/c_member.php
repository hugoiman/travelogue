<?php

class C_member extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->model('m_member');
		$this->load->model('m_post');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_user"));
		}
	}

	function index(){
		$data['dataPost'] = $this->m_post->Post();
		$this->load->view('v_index_m',$data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('c_user'));
	}
	function pengaturan(){
		$this->load->view('v_pengaturan_m');
	}
	function profile(){
		$this->load->view('v_profile_m');
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
		$this->load->view('v_profilememberlain_m',$data);
	}
	function editProfile(){
		$id_member = $this->input->post('id_member');
		$nama_member = $this->input->post('nama_member');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_member' => $nama_member,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat
		);
		$where = array(
			'id_member' => $id_member
		);
		//kirim data baru
		$this->m_member->simpanEditProfile($where,$data,'member');
		//mengambil session dengan data yang baru
		$ambil = $this->m_member->getMember("member",$where)->result_array();
	    foreach ($ambil as $data) {}
    		$data_session = array(
     			'email' => $data['email'],
     			'password' => $data['password'],
     			'id_member' => $data['id_member'],
     			'nama_member' => $data['nama_member'],
     			'no_hp' => $data['no_hp'],
   				'alamat' => $data['alamat'],
   				'foto' => $data['foto'],
   				'status' => "login"
	    	);
	    $this->session->set_userdata($data_session);
	    echo "<script>alert('Berhasil edit profile!');</script>";
	    $this->pengaturan();
	}
	function editPassword(){
  $password = $this->session->userdata('password');
  $oldpassword = $this->input->post('oldpassword');
  $newpassword = $this->input->post('newpassword');
  $password_confirmation = $this->input->post('password_confirmation');
  if($oldpassword != $password){
    echo "<script>alert('password lama tidak sesuai');</script>";
    echo "<script>history.go(-1);</script>";
  }
  else if (strlen($newpassword) < 8) {
    echo "<script>alert('password minimal 8 karakter');</script>";
    $this->load->view('v_pengaturan_m');
  }
  else if($newpassword != $password_confirmation){
    echo "<script>alert('konfirmasi password tidak sesuai');</script>";		//5
    echo "<script>history.go(-1);</script>";
  }
  else if($newpassword == $password){
    echo "<script>alert('password baru tidak boleh sama dengan password lama');</script>";		//7
    echo "<script>history.go(-1);</script>";
  }
  else{
    $data = array(
      'password' => md5($newpassword)
    );
    $id_member = $this->session->userdata("id_member");
    $where = array(
      'id_member' => $id_member
    );
    $this->m_member->simpanEditPassword($where,$data,'member');
    $ambil = $this->m_member->getMember("member",$where)->result_array();
    $data_session = array(
      'email' => $data['email'],
	'password' => $data['password'],
	'id_member' => $data['id_member'],
	'nama_member' => $data['nama_member'],
	'no_hp' => $data['no_hp'],
	'foto' => $data['foto'],
	'alamat' => $data['alamat']
    );
    $this->session->set_userdata($data_session);
    echo "<script>alert('berhasil ganti password!');</script>";
    $this->load->view('v_pengaturan_m');
  }
}
		//11
	function uploadFoto(){
   	$nmfile = $this->session->userdata("id_member")."_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
    $path   = './assets/img/profile/'; //path folder
    $config['upload_path'] = $path; //variabel path untuk config upload
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['max_size'] = '2048'; //maksimum besar file 2M
    $config['max_width']  = '1288'; //lebar maksimum 1288 px
    $config['max_height']  = '768'; //tinggi maksimu 768 px
    $config['file_name'] = $nmfile; //nama yang terupload nantinya

    $this->load->library('upload',$config);// library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
    $this->upload->initialize($config);

  	if (!$this->upload->do_upload('newfoto')){
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('v_pengaturan_m', $error);
    }
    else {
      $gbr = $this->upload->data();
      $data = array(
      	'foto' =>$gbr['file_name']
      );
      $where = array(
      	'id_member' => $this->session->userdata("id_member")
      );
      @unlink($path.$this->session->userdata("foto")); //menghapus foto yang lama
      $this->m_member->update_foto($data,$where,'member'); //mengupdate kolom foto dengan nama yang baru
      //jika upload berhasil
      $email = $this->session->userdata("email");
      $where = array('email' => $email);
      $ambil = $this->m_member->getMember('member',$where)->result_array();
      foreach ($ambil as $data) {
    		$data_session = array(
     			'email' => $data['email'],
     			'password' => $data['password'],
     			'id_member' => $data['id_member'],
     			'nama_member' => $data['nama_member'],
     			'no_hp' => $data['no_hp'],
  				'alamat' => $data['alamat'],
  				'foto' => $data['foto'],
  				'status' => "login"
      	);
      }
    	$this->session->set_userdata($data_session);
    	echo "<script>alert('Berhasil upload foto!');</script>";
    	$this->pengaturan();
    }
  }

}
