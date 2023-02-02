<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactsModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'contacts';
    protected $primaryKey       = 'id_contact';
    // protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['name_contact', 'name_alias', 'phone', 'email', 'address', 'info_contact', 'id_group'];

    // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public function getAll()
    {
        $builder = $this->db->table('contacts');
        $builder->join('groups', 'groups.id_group = contacts.id_group');
        $query = $builder->get();
        return $query->getResult();
    }
}
