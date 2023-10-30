<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfiguracionModel extends Model
{
    protected $table='configuracion';
    //protected $returnType ='array';
    //protected $useSoftDeletes =false;
    protected $primaryKey='id';
    protected $allowedFields = ['nombre', 'valor'];

    //protected $useTimestamps = true;
    //protected $createdField = 'fecha_alta';
    //protected $updatedFiedl ='fecha_edit';
    //protected $deletedField='deleted_at';

   // protected $validationRules =[];
   // protected $validationMessages = [];
   // protected $skipValidation = false;
}

?>