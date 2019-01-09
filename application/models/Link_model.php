<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Link_model
 *
 * @author Mikael
 */
class Link_model extends CI_Model {

    public function insert($data = array()) {
        $this->db->insert('link', $data);
        return $this->db->affected_rows();
    }

    public function getEnderecoById($id) {
        $this->db->select('endereco');
        $this->db->where('idlink', $id);
        $query = $this->db->get('link');
        return $query->row(0);
    }

    public function getIdByEndereco($endereco) {
        $this->db->select('idlink');
        $this->db->where('endereco', $endereco);
        $query = $this->db->get('link');
        return $query->row(0);
    }

}
