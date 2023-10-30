<?php

namespace App\Models;

use CodeIgniter\Model;

class RolesModel extends Model
{
    protected $table='roles';
    //protected $returnType ='array';
    //protected $useSoftDeletes =false;
    protected $primaryKey='id';
    protected $allowedFields = ['id','nombre','fecha_alta','fecha_modifica','activo'];

    //protected $useTimestamps = true;
    //protected $createdField = 'fecha_alta';
    //protected $updatedFiedl ='fecha_edit';
    //protected $deletedField='deleted_at';

   // protected $validationRules =[];
   // protected $validationMessages = [];
   // protected $skipValidation = false;
}

?>