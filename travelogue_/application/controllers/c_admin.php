<?php

class C_admin extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('m_admin');
		$this->load->model('m_member');
		$this->load->model('m_post');
		$this->load->model('m_peminjaman');
	}
	function index(){
		$this->load->view('v_index_a');
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('c_user'));
	}
	function dashboard(){
		$this->load->view('v_index_a');
	}
	function dataPeminjaman(){
		$data['dataPost'] = $this->m_peminjaman->daftarPeminjaman('peminjaman');
		$this->load->view('v_datapeminjaman_a',$data);
	}
	function dataMember(){
		$data['dataPost'] = $this->m_admin->getDataMember('member')->result();
		$this->load->view('v_datamember_a',$data);
	}
	function dataPost(){
		$data['dataPost'] = $this->m_admin->getDataPost('post')->result();
		$this->load->view('v_datapost_a',$data);
	}
	function gantiFoto(){
		$this->load->view('v_gantifoto_a');
	}
	function gantiPassword(){
		$this->load->view('v_gantipass_a');
	}
	function cariMember(){
		$cari = $this->input->get('cari');
		$data['dataPost'] = $this->m_admin->cariMember($cari)->result();
		$this->load->view('v_datamember_a',$data);
	}
	function cariPost(){
		$cari = $this->input->get('cari');
		$data['dataPost'] = $this->m_admin->cariPost($cari)->result();
		$this->load->view('v_datapost_a',$data);
	}
	function cariPeminjaman(){
		$cari = $this->input->get('cari');
		$data['dataPost'] = $this->m_admin->cariPeminjaman($cari)->result();
		$this->load->view('v_datapeminjaman_a',$data);
	}
	function verifikasi($id_post){
		$where = array('id_post' => $id_post);
		$data  = array('status' => 'verified');
		$this->m_admin->verified("post",$where,$data);
		echo "<script>alert('Berhasil verifikasi!');</script>";
		echo "<script>history.go(-1);</script>";
	}
	function hapusMember($id_member){
		$where = array('id_member' => $id_member);
		$this->m_admin->hapus($where,'member');
		echo "<script>alert('Member berhasil dihapus!');</script>";
		echo "<script>history.go(-1);</script>";
	}
	function hapusPost($id_post){
		$where = array('id_post' => $id_post);
		$this->m_admin->hapus($where,'post');
		echo "<script>alert('post berhasil dihapus!');</script>";
		echo "<script>history.go(-1);</script>";
	}
	function detailPost($id_post){

		$data['dataPost'] = $this->m_post->PostMemberLain($id_post);
		$this->load->view('v_postmemberlain_a',$data);
	}
	function profilememberlain($id_member){
		$where = array('id_member' => $id_member);
		$data['dataPost'] = $this->m_member->getMember('member',$where)->result_array();
		$this->load->view('v_profilememberlain_a',$data);
	}
	function editPassword(){
		$password = $this->session->userdata('password');
		$oldpassword = $this->input->post('oldpassword');
		$newpassword = $this->input->post('newpassword');
		$password_confirmation = $this->input->post('password_confirmation');
		if($oldpassword != $password){
			echo "<script>alert('password lama tidak sesuai!');</script>";
			$this->gantiPassword();
		}
		else if($newpassword != $password_confirmation){
			echo "<script>alert('konfirmasi password tidak sesuai');</script>";
			$this->gantiPassword();
		}
		else if($newpassword == $password){
			echo "<script>alert('password baru tidak boleh sama dengan password lama');</script>";
			$this->gantiPassword();
		}
		else{
			$data = array(
				'password' => md5($newpassword)
			);
			$id_admin = $this->session->userdata("id_admin");
			$where = array(
				'id_admin' => $id_admin
			);
			$this->m_admin->simpanEditPassword($where,$data,'admin');
			$ambil = $this->m_admin->getadmin("admin",$where)->result_array();
	    $this->session->set_userdata('password',$newpassword);
	    echo "<script>alert('berhasil ganti password!');</script>";
	    $this->gantiPassword();
		}
	}
	function uploadFoto(){
   	$nmfile = $this->session->userdata("id_admin")."_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
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
      $this->load->view('v_gantifoto_a', $error);
    }
    else {
  		$gbr = $this->upload->data();
      $data = array(
      	'foto' =>$gbr['file_name']
      );
      $where = array(
      	'id_admin' => $this->session->userdata("id_admin")
      );
      @unlink($path.$this->session->userdata("foto"));
      $this->m_admin->update_foto($data,$where,'admin');
      //jika upload berhasil
      $email = $this->session->userdata("email");
   		$where = array('email' => $email);
   		$ambil = $this->m_admin->getadmin('admin',$where)->result_array();
	    foreach ($ambil as $data) {
	  		$data_session = array(
	   			'email' => $data['email'],
	   			'password' => $data['password'],
	   			'id_admin' => $data['id_admin'],
	   			'nama_admin' => $data['nama_admin'],
	 				'foto' => $data['foto'],
	 				'status' => "login"
	    	);
			}
			$this->session->set_userdata($data_session);
			echo "<script>alert('Berhasil upload foto!');</script>";
			$this->gantiFoto();
    }
  }

}
