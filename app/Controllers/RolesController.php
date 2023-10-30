<?php
namespace App\Controllers;

//use App\Controllers\Controller;
use CodeIgniter\Controller;
use App\Models\RolesModel;

class RolesController extends Controller
{
    protected $roles;

  
    public function roles()
    {
        $roles = new RolesModel();
        $resultadoroles['resultadoroles']=$roles->findAll();
        return view('roles',$resultadoroles);
        
    }

  public function eliminar($codigo=null){
    $roles = new RolesModel();
    $roles->delete($codigo);  
    return $this->Unidades();
      }
      public function localizar($codigo=null){   
    
        $roles = new RolesModel();
        $data['data']=$roles ->where('id',$codigo)->first();
          return view('frmactualizarroles',$data);
        }
        public function modificar($codigo=null){   
    
          $id=$this->request->getVar('txt_id');
          $nombre=$this->request->getVar('txtnombre');
          
          $fechaalta=$this->request->getVar('txtfecha_alta');   
          $fechamodifica=$this->request->getVar('txtfecha_modifica');     
          $activo=$this->request->getVar('txxtactivo');
          
          
          $roles = new RolesModel();
          $datos=[      
              'nombre'=>$nombre,
              
              'activo'=> $activo,
              'fecha_alta'=>$fechaalta,
              'txtfecha_modifica'=>$fechamodifica,
              
         ];
      
         $roles->update($id,$datos);
       return $this->roles();  
      
      
      }
      public function guardar(){
        // recibe datos del formulario
        $id=$this->request->getVar('txt_id');
        $nombre=$this->request->getVar('txtnombre');
        
        $fechaalta=$this->request->getVar('txtfecha_alta');   
        $fechamodifica=$this->request->getVar('txtfecha_modifica');     
        $activo=$this->request->getVar('txxtactivo');
                         
        $roles = new RolesModel();
        $datos=[          
            'nombre'=>$nombre,
              
            'activo'=> $activo,
            'fecha_alta'=>$fechaalta,
            'txtfecha_modifica'=>$fechamodifica,
                 
       ];
       
        $roles->insert($datos);
        return $this->roles();
    
    }
}