<?php
namespace App\Controllers;

//use App\Controllers\Controller;
use CodeIgniter\Controller;
use App\Models\ConfiguracionModel;

class ConfiguracionController extends Controller
{
    protected $configuracion;

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
    public function configuracion($codigo=1)
    {
        $configuracion = new ConfiguracionModel();
        $data['data']=$configuracion ->where('id',$codigo)->first();
        return view('configuracion',$data);
        
    }
    public function eliminar($codigo=null){
      $configuracion = new ConfiguracionModel();
      $configuracion->delete($codigo);  
      return $this->configuracion();
    }
    public function localizar($codigo=null){   
    
      $configuracion = new ConfiguracionModel();
      $data['data']=$configuracion ->where('id',$codigo)->first();
        return view('frmactualizarcategoria',$data);
      }
      public function modificar($codigo=null){   
    
        $id=$this->request->getVar('txt_id');
        $nombre=$this->request->getVar('txtnombre');
        $fechaalta=$this->request->getVar('txtfecha_alta');   
        $fechaedit=$this->request->getVar('txtfecha_edit');     
        $activo=$this->request->getVar('txxtactivo');
        
        
        $configuracion = new ConfiguracionModel();
        $datos=[      
            'nombre'=>$nombre,
            
            'activo'=> $activo,
            'fecha_alta'=>$fechaalta,
            'fecha_edit'=>$fechaedit,
            
       ];
    
       $configuracion->update($id,$datos);
     return $this->configuracion();  
    
    
    }
    public function guardar(){
      // recibe datos del formulario
      $id=$this->request->getVar('txt_id');
      $nombre=$this->request->getVar('txtnombre');
      $fechaalta=$this->request->getVar('txtfecha_alta');   
      $fechaedit=$this->request->getVar('txtfecha_edit');     
      $activo=$this->request->getVar('txxtactivo');
                       
      $configuracion = new ConfiguracionModel();
      $datos=[          
        'nombre'=>$nombre,
            
            'activo'=> $activo,
            'fecha_alta'=>$fechaalta,
            'fecha_edit'=>$fechaedit,        
     ];
     
      $configuracion->insert($datos);
      return $this->configuracion();
  
  }
}