<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_kontak extends CI_Model {
	
	var $table = 'tb_kontak';
	
	public function get_by_id() {
		$this->db->from($this->table);
		$this->db->where('id_kontak','1');
		$query = $this->db->get();
		return $query->row();
	}
	
	public function update($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	
}