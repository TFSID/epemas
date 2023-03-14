<?php class PublicModel extends CI_Model {


public function select_data($id) {
    $query = $this->db->get_where('data_siswa', array('NIS' => $id));
    
}

}
