<?php 
 
class M_peminjaman extends CI_Model{	

	function tambahpeminjaman($table,$data){
		$this->db->insert($table,$data);
      	return true;
	}

	function tolak($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function batalPeminjaman($table,$where){
		$this->db->where($where);
		$this->db->delete($table);
		return true;
	}
	function getPeminjaman($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
		return true;
	}

	function daftarPeminjaman($table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('member', 'peminjaman.id_pemilik = member.id_member');
		$query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $dataPost[] = $data;
            }
        return $dataPost; //hasil dari semua proses ada dimari
        }
	}
	function riwayatmeminjam($table,$where){
		return $this->db->get_where($table,$where);
	}
	function pemberitahuan($table,$id_pemilik){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join('member', 'peminjaman.id_pemilik = member.id_member');
		$this->db->where('peminjaman.id_pemilik',$id_pemilik);
		$query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $dataPost[] = $data;
            }
        return $dataPost; //hasil dari semua proses ada dimari
		// return $this->db->get_where($table,$where);
    	}
	}
	function verified($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}