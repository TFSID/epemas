<?php class Model_DataSiswa extends CI_Model {
    function get_all_students()
    {
        $query = $this->db->get('data_siswa');
        return $query->result_array();
    }

    function get_students_byid()
    {
        $query = $this->db->get_where('data_siswa', array('NIS' => $NIS));
        return $query->result_array();
    }
    
    function delete_students_byid($NIS)
    {
        $this->db->delete('data_siswa', array('NIS' => $NIS));
        
        
    }


}
