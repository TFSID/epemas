<?php class Model_Kategori extends CI_Model {
    function get_all_category()
    {
        $query = $this->db->get('tb_kategori');
        return $query->result_array();
    }

    function get_category_byid()
    {
        $query = $this->db->get_where('tb_kategori', array('NIS' => $NIS));
        return $query->result_array();
    }
    
    function delete_category_byid($NIS)
    {
        $this->db->delete('tb_kategori', array('NIS' => $NIS));
        
        
    }

    public function tambah_data_kategori($data) {
        $this->db->insert('tb_kategori', $data);
        
    }


}
