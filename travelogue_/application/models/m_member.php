<?php

class M_member extends CI_Model{

	function getMember($table,$where){
		return $this->db->get_where($table,$where);
	}
	function simpanEditPassword($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
  function simpanEditProfile($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
  }
	function update_foto($data,$where,$tabel){
		$this->db->where($where);
        $this->db->update($tabel, $data);
        return true;
	}
	function PostMemberLain($where){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('member', 'post.id_member = member.id_member');
		$this->db->where('post.id_post',$where);
		$query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $dataPost[] = $data;
            }
        return $dataPost; //hasil dari semua proses ada dimari
        }
	}
	function search($cari)
    {
    	$this->db->select('*');
		$this->db->from('post');
		$this->db->join('member', 'post.id_member = member.id_member');
		$this->db->where('member.id_member !=', $this->session->userdata('id_member'));
		$where = "post.judul LIKE '%$cari%' OR post.kategori LIKE '%$cari%' OR member.nama_member LIKE '%$cari%' OR post.kota LIKE '%$cari%' ";
		$this->db->order_by('id_post','desc');
		$this->db->where($where);
        $query =  $this->db->get();
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $dataPost[] = $data;
            }
        return $dataPost; //hasil dari semua proses ada dimari
        }
    }

    function searchKK($kategori,$kota)
    {
    	$this->db->select('*');
		$this->db->from('post');
		$this->db->join('member', 'post.id_member = member.id_member');
		$where = "post.kategori LIKE '%$kategori%' AND post.kota LIKE '%$kota%' ";
		$this->db->where($where);
		$this->db->order_by('id_post','desc');
        $query =  $this->db->get();
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $dataPost[] = $data;
            }
        return $dataPost; //hasil dari semua proses ada dimari
        }
    }

}
