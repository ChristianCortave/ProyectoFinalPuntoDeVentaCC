<?php

namespace App\Models;

use CodeIgniter\Model;

class UnidadesModel extends Model
{
    protected $table='unidades';
    //protected $returnType ='array';
    //protected $useSoftDeletes =false;
    protected $primaryKey='id';
    protected $allowedFields = ['id','nombre','nombre_corto','activo'];

    //protected $useTimestamps = true;
    //protected $createdField = 'fecha_alta';
    //protected $updatedFiedl ='fecha_edit';
    //protected $deletedField='deleted_at';

   // protected $validationRules =[];
   // protected $validationMessages = [];
   // protected $skipValidation = false;
}

?>