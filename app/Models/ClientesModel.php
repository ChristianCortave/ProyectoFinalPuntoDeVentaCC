<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table='clientes';
    //protected $returnType ='array';
    //protected $useSoftDeletes =false;
    protected $primaryKey='id';
    protected $allowedFields = ['nombre', 'apellido','direccion','telefono', 'correo','activo','fecha_alta','fecha_edit'];

    //protected $useTimestamps = true;
    //protected $createdField = 'fecha_alta';
    //protected $updatedFiedl ='fecha_edit';
    //protected $deletedField='deleted_at';

   // protected $validationRules =[];
   // protected $validationMessages = [];
   // protected $skipValidation = false;
}

?>