<?php
namespace App\Controllers;

//use App\Controllers\Controller;
use CodeIgniter\Controller;
use App\Models\UnidadesModel;

class UnidadesController extends Controller
{
    protected $unidades;

    //public function __construct()
   // {
     //   $this->unidades = new UnidadesModel();
   // }

    //public function index($activo = 1)
    //{
     //   $unidades = $this->unidades->where('activo',$activo)->findAll();
      //  $data =  ['titulo'=> 'Unidades','datos'=> $unidades];
      //  echo view('header');
      //  echo view('unidades', $data);
      //  echo view('footer');
   // }
    public function unidades()
    {
        $unidades = new UnidadesModel();
        $resultadounidades['resultadounidades']=$unidades->findAll();
        return view('unidades',$resultadounidades);
        
    }

   // public function nuevo()
   // {
    //  $data =['titulo'=>]
  //  }
  public function eliminar($codigo=null){
    $unidades = new UnidadesModel();
    $unidades->delete($codigo);  
    return $this->Unidades();
      }
      public function localizar($codigo=null){   
    
        $unidades = new UnidadesModel();
        $data['data']=$unidades ->where('id',$codigo)->first();
          return view('frmactualizarunidad',$data);
        }
        public function modificar($codigo=null){   
    
          $id=$this->request->getVar('txt_id');
          $nombre=$this->request->getVar('txtnombre');
          $nombrecorto=$this->request->getVar('txtnombre_corto');  
          $fechaalta=$this->request->getVar('txtfecha_alta');   
          $fechaedit=$this->request->getVar('txtfecha_edit');     
          $activo=$this->request->getVar('txxtactivo');
          
          
          $unidades = new UnidadesModel();
          $datos=[      
              'nombre'=>$nombre,
              'nombre_corto'=>$nombrecorto,
              'activo'=> $activo,
              'fecha_alta'=>$fechaalta,
              'fecha_edit'=>$fechaedit,
              
         ];
      
         $unidades->update($id,$datos);
       return $this->unidades();  
      
      
      }
      public function guardar(){
        // recibe datos del formulario
        $id=$this->request->getVar('txt_id');
        $nombre=$this->request->getVar('txtnombre');
        $nombrecorto=$this->request->getVar('txtnombre_corto');  
        $fechaalta=$this->request->getVar('txtfecha_alta');   
        $fechaedit=$this->request->getVar('txtfecha_edit');     
        $activo=$this->request->getVar('txxtactivo');
                         
        $unidades = new UnidadesModel();
        $datos=[          
          'nombre'=>$nombre,
              'nombre_corto'=>$nombrecorto,
              'activo'=> $activo,
              'fecha_alta'=>$fechaalta,
              'fecha_edit'=>$fechaedit,        
       ];
       
        $unidades->insert($datos);
        return $this->unidades();
    
    }
}