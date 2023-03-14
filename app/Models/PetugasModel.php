<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'petugas';
    protected $primaryKey       = 'id_petugas';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'email','nama', 'password','nik','tlpn'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    

    public function saveUser($data)
    {
        $this->insert($data);
        return $this->insertID();
    }

    public function verify_user($username, $password) {
        $db = \Config\Database::connect();
        $builder = $db->table('petugas');
        $builder->select('*');
        $builder->where('Username', $username);
        $builder->where('Password', $password);
        $query = $builder->get();
    
        // check if the query returned any results
        if ($query !== false && $query->getNumRows() == 1) {
            // return the user data
            return $query->getRow();
        } else {
            // no matching user found or query failed
            return false;
        }
    }
}
