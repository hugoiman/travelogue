<?php

class C_peminjaman extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('m_admin');
		$this->load->model('m_member');
		$this->load->model('m_post');
		$this->load->model('m_peminjaman');
	}
	function index(){
		$this->load->view('v_index_m');
	}

	function formpinjam($id_post){
		$where = array(
			'id_post' => $id_post
		);
		$data['dataPost'] = $this->m_post->getPost('post',$where)->result();
		$this->load->view('v_formpinjam_m',$data);
	}
	function riwayatMeminjam(){
		$where = array(
			'id_peminjam' => $this->session->userdata('id_member')
		);
		$data['dataPost'] = $this->m_peminjaman->riwayatMeminjam('peminjaman',$where)->result();
		$this->load->view('v_riwayatmeminjam_m',$data);
	}
	function tolak($no_peminjaman){
		$where = array('no_peminjaman' => $no_peminjaman);
		$data  = array('status' => 'permintaan ditolak');
		$this->m_peminjaman->tolak("peminjaman",$where,$data);
		echo "<script>history.go(-1);</script>";
	}
	function batalPinjam($no_peminjaman){
		$where = array('no_peminjaman' => $no_peminjaman);
		$this->m_peminjaman->batalPeminjaman("peminjaman",$where);
		echo "<script>history.go(-1);</script>";
	}
	function editPeminjaman($no_peminjaman){
		$where = array('no_peminjaman' => $no_peminjaman);
		$this->m_peminjaman->getPeminjaman("peminjaman",$where);
		echo "<script>history.go(-1);</script>";
	}
	function pinjam(){
		$id_pemilik = $this->input->post('id_pemilik');
		$id_peminjam = $this->input->post('id_peminjam');
		$id_post = $this->input->post('id_post');
		$judul = $this->input->post('judul');
		$tgl_pinjam = $this->input->post('tgl_pinjam');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'id_pemilik' => $id_pemilik,
			'id_peminjam' => $id_peminjam,
			'id_post' => $id_post,
			'judul' => $judul,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_selesai' => $tgl_selesai,
			'keterangan' => $keterangan,
			'status' => 'belum disetujui'
		);
		$this->m_peminjaman->tambahpeminjaman('peminjaman',$data);
		echo "<script>alert('berhasil tambah peminjaman. silahkan tunggu konfirmasi');</script>";
		echo "<script>history.go(-1);</script>";
	}
	function pemberitahuan(){
		$id_pemilik = $this->session->userdata('id_member');
		$data['dataPost'] = $this->m_peminjaman->pemberitahuan('peminjaman',$id_pemilik);
		$this->load->view('v_pemberitahuan_m',$data);
	}
	function verifikasi($no_peminjaman){
		$where = array('no_peminjaman' => $no_peminjaman);
		$data  = array('status' => 'sudah disetujui');
		$this->m_admin->verified("peminjaman",$where,$data);
		echo "<script>alert('berhasil verifikasi!');</script>";
		echo "<script>history.go(-1);</script>";
	}
}
