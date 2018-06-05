<?php

class C_post extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('m_post');
		$this->load->model('m_member');
		$this->load->model('m_user');

	}
	function index(){
		$id_member = $this->session->userdata("id_member");
		$where = array(
			'id_member' => $id_member
		);
		$data['post'] = $this->m_post->daftarPost('post',$where)->result();
		$this->load->view('v_daftarpost_m',$data);

	}
	
	function lihatPostSaya(){
		$id_member = $this->session->userdata("id_member");
		$where = array(
			'id_member' => $id_member
		);
		$data['post'] = $this->m_post->getPost('post',$where)->result();
		$this->load->view('v_postsaya_m',$data);
	}
	function lihatPostMemberLain($id_post){
		$data['dataPost'] = $this->m_post->PostMemberLain($id_post);
		if($this->session->userdata('status')=="login"){
			$this->load->view('v_postmemberlain_m',$data);
		}
		else{
			$this->load->view('v_postmemberlain_u',$data);
		}

	}
	function v_editPost($id_post){
		$where = array('id_post' => $id_post);
		$data['dtPost'] = $this->m_post->getPost('post',$where)->result_array();
		$this->load->view('v_editpost_m',$data);
	}
	function deletePost($id_post){
		$where = array('id_post' => $id_post);
		$this->m_post->deletePost('post',$where);
		echo "<script>alert('Berhasil hapus post!');</script>";
		$this->daftarPost();
	}
	function lihatDetailPost($id_post){
		$where = array('id_post' => $id_post);
		$data['dtPost'] = $this->m_post->getPost('post',$where)->result_array();
		$this->load->view('v_lihatpost_m',$data);
	}
	function daftarPost(){
		$id_member = $this->session->userdata("id_member");
		$where = array(
			'id_member' => $id_member
		);
		$data['post'] = $this->m_post->daftarPost('post',$where)->result();
		$this->load->view('v_daftarpost_m',$data);
	}
	function pemberitahuan(){
		$this->load->view('v_');
	}
	function tambahPost(){
		$this->load->view('v_tambahpost_m');
	}
	function addPost(){
		//1
		$id_member = $this->input->post('id_member');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$deskripsi = $this->input->post('deskripsi');
		$status = $this->input->post('status');

		$this->load->library('upload');// library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
		//2
		for($i = 1;$i <= 3;$i++){
    	$nmfile = $id_member."_".$i."_".time();
      $path   = './assets/img/post/'; //path folder
      $config['upload_path'] = $path; //variabel path untuk config upload
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '2048'; //maksimum besar file 2M
      $config['max_width']  = '1288'; //lebar maksimum 1288 px
      $config['max_height']  = '768'; //tinggi maksimu 768 px
      $config['file_name'] = $nmfile; //nama yang terupload nantinya
			$this->load->library('upload',$config);// library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
    	$this->upload->initialize($config);
    	if (!$this->upload->do_upload('gambar'.$i)){	//3
				echo "<script>alert('Gagal tambah post');</script>";	//4
				echo "<script>history.go(-1);</script>";
			}
			else{	//5
    		$gbr = $this->upload->data();
        if($i=='1'){	//6
        	$gambar1 = $gbr['file_name'];
        }
        else if($i=='2'){	//7
        	$gambar2 = $gbr['file_name'];	//8
        }
        else {	//9
        	$gambar3 = $gbr['file_name'];
        }//10
        @unlink($path.('gambar'.$i));
      }	//11
  	}//12
    $dataPost = array(
			'id_member' => $id_member,
			'judul' => $judul,
			'kategori' => $kategori,
			'alamat' => $alamat,
			'kota' => $kota,
			'deskripsi' => $deskripsi,
			'gambar1' => $gambar1,
			'gambar2' => $gambar2,
			'gambar3' => $gambar3,
			'status' => $status
		);
    $this->m_post->insertPost($dataPost,'post');
    echo "<script>alert('Berhasil tambah post!');</script>";
    $this->daftarPost();
	}
	function editPost(){
		$id_post = $this->input->post('id_post');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$deskripsi = $this->input->post('deskripsi');

		$where = array(
			'id_post' => $id_post
		);

		$dataPost = array(
			'judul' => $judul,
			'kategori' => $kategori,
			'alamat' => $alamat,
			'kota' => $kota,
			'deskripsi' => $deskripsi
		);

		$this->m_post->updatePost($where,$dataPost,'post');
		echo "<script>alert('Berhasil edit post!');</script>";
		$this->lihatDetailPost($id_post);
	}
	function editGbrPost(){
		$id_post = $this->input->post('id_post');
		$gambar1 = $this->input->post('gambar1');
		$gambar2 = $this->input->post('gambar2');
		$gambar3 = $this->input->post('gambar3');
		for ($i=1; $i <= 3; $i++) {
			$nmfile = $id_post."_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $path   = './assets/img/post/'; //path folder
      $config['upload_path'] = $path; //variabel path untuk config upload
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['file_name'] = $nmfile; //nama yang terupload nantinya

      $this->load->library('upload',$config);// library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
      $this->upload->initialize($config);
    	if (!$this->upload->do_upload('gambar'.$i)){
        echo "<script>alert('Gagal edit foto!');</script>";
	      echo "<script>history.go(-1);</script>";
      }
      else{
        $gbr = $this->upload->data();
        $data = array(
        	'gambar'.$i =>$gbr['file_name']
        );
        $where = array(
        	'id_post' => $id_post
        );
        @unlink($path.$this->session->userdata("foto"));
        $this->m_post->update_foto($data,$where,'post');
        $this->lihatDetailPost($id_post);
      }
    }
	}
}
