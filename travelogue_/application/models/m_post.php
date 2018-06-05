<?php 
 
class M_post extends CI_Model{	

	function Post(){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('member', 'post.id_member = member.id_member');
		$this->db->where('member.id_member !=', $this->session->userdata('id_member'));
		$this->db->where('status', 'verified');
		$this->db->order_by('id_post','desc');
		$query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $dataPost[] = $data;
            }
        return $dataPost; //hasil dari semua proses ada dimari
        }
	}

	function Post_u(){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('member', 'post.id_member = member.id_member');
		$this->db->where('status', 'verified');
		$this->db->order_by('id_post','desc');
		$query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
		if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $dataPost[] = $data;
            }
        return $dataPost; //hasil dari semua proses ada dimari
        }
	}

	function editPost($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function update_foto($data,$where,$tabel){
		$this->db->where($where);
        $this->db->update($tabel, $data);
        return true;
	}

	function daftarPost($table,$where){
		return $this->db->get_where($table,$where);
	}

	function insertPost($data,$table){
		$this->db->insert($table,$data);
		return true;
	}

	function updatePost($where,$data,$table){
		$this->db->where($where);
        $this->db->update($table,$data);
        return true;
	}
	
	function getPost($table,$where){
		return $this->db->get_where($table,$where);
	}
	
	function deletePost($table,$where){
		$this->db->where($where);
		$this->db->delete($table);
		return true;
	}
	function PostMemberLain($id_post){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->join('member', 'post.id_member = member.id_member');
		$this->db->where('post.id_post', $id_post);
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