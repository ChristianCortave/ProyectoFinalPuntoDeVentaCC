<?php
namespace App\Controllers;

//use App\Controllers\Controller;
use CodeIgniter\Controller;
use App\Models\ClientesModel;

class ClientesController extends Controller
{
    protected $clientes;

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
    public function clientes()
    {
        $clientes = new ClientesModel();
        $resultadoclientes['resultadoclientes']=$clientes->findAll();
        return view('clientes',$resultadoclientes);
        
    }
    public function eliminar($codigo=null){
      $clientes = new ClientesModel();
      $clientes->delete($codigo);  
      return $this->clientes();
    }
    public function localizar($codigo=null){   
    
      $clientes = new ClientesModel();
      $data['data']=$clientes ->where('id',$codigo)->first();
        return view('frmactualizarclientes',$data);
      }
      public function modificar($codigo=null){   
    
        $id=$this->request->getVar('txt_id');
        $nombre=$this->request->getVar('txtnombre');
        $apellido=$this->request->getVar('txtapellido');
        $direccion=$this->request->getVar('txtdireccion');
        $telefono=$this->request->getVar('txttelefono');
        $correo=$this->request->getVar('txtcorreo');
        $fechaalta=$this->request->getVar('txtalta');   
        $fechaedit=$this->request->getVar('txtedit');     
        $activo=$this->request->getVar('txxtactivo');
        
        
        $clientes = new ClientesModel();
        $datos=[      
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'direccion'=>$direccion,
            'telefono'=>$telefono,
            'correo'=>$correo,
            'activo'=> $activo,
            'fecha_alta'=>$fechaalta,
            'fecha_edit'=>$fechaedit,
            
       ];
    
       $clientes->update($id,$datos);
     return $this->clientes();  
    
    
    }
    public function guardar(){
      // recibe datos del formulario
      $id=$this->request->getVar('txt_id');
      $nombre=$this->request->getVar('txtnombre');
      $apellido=$this->request->getVar('txtapellido');
      $direccion=$this->request->getVar('txtdireccion');
      $telefono=$this->request->getVar('txttelefono');
      $correo=$this->request->getVar('txtcorreo');
      $fechaalta=$this->request->getVar('txtalta');   
      $fechaedit=$this->request->getVar('txtedit');     
      $activo=$this->request->getVar('txxtactivo');
                       
      $clientes = new ClientesModel();
      $datos=[          
        'nombre'=>$nombre,
            'apellido'=>$apellido,
            'direccion'=>$direccion,
            'telefono'=>$telefono,
            'correo'=>$correo,
            'activo'=> $activo,
            'fecha_alta'=>$fechaalta,
            'fecha_edit'=>$fechaedit,      
     ];
     
      $clientes->insert($datos);
      return $this->clientes();
  
  }
}