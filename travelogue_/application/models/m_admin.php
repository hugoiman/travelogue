<?php 
 
class M_admin extends CI_Model{

	function getAdmin($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function getDataMember($table){		
		return $this->db->get_where($table);
	}
	function getDataPost($table){		
		$this->db->from($table);
		$this->db->order_by("id_post",'desc');
		$query = $this->db->get();
		return $query;
	}
	function cariMember($cari){
		$this->db->from('member');
		$where = "id_member LIKE '%$cari%' OR nama_member LIKE '%$cari%' OR email LIKE '%$cari%' OR no_hp = '%$cari%' ";
		$this->db->where($where);
        $query =  $this->db->get();
        return $query;
	}
	function cariPost($cari){
		$this->db->from('post');
		$where = "id_post LIKE '%$cari%' OR judul LIKE '%$cari%' OR kategori LIKE '%$cari%' OR status = '$cari' ";
		$this->db->where($where);
        $query =  $this->db->get();
        return $query;
	}
	function cariPeminjaman($cari){
		$this->db->from('peminjaman');
		$this->db->join('member', 'peminjaman.id_member = member.id_member');
		$where = "no_peminjaman LIKE '%$cari%' OR judul LIKE '%$cari%' OR nama_member LIKE '%$cari%' ";
		$this->db->where($where);
        $query =  $this->db->get();
        return $query;
	}
	function verified($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function update_foto($data,$where,$tabel){
		$this->db->where($where);
        $this->db->update($tabel, $data);
        return true;
	}
	function simpanEditPassword($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function detailPost($id_post){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('member', 'post.id_member = member.id_member');
		$query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $dataPost[] = $data;
            }
        return $dataPost; //hasil dari semua proses ada dimari
        }
	}
}