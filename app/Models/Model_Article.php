<?php class Model_Article extends CI_Model {
    function get_all_article()
    {
        $query = $this->db->get('tb_artikel');
        return $query->result_array();
    }

    function get_article_byid()
    {
        $query = $this->db->get_where('tb_artikel', array('id_artikel' => $id_artikel));
        return $query->result_array();
    }
    
    function delete_article_byid($id_artikel)
    {
        $this->db->delete('tb_artikel', array('id_artikel' => $id_artikel));
        
        
    }

    public function tambah_data_article($data) {
        $this->db->insert('tb_artikel', $data);
        
    }


}
