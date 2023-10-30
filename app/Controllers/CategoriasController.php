<?php
namespace App\Controllers;

//use App\Controllers\Controller;
use CodeIgniter\Controller;
use App\Models\CategoriasModel;

class CategoriasController extends Controller
{
    protected $categorias;

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
    public function categoria()
    {
        $categorias = new CategoriasModel();
        $resultadocategorias['resultadocategorias']=$categorias->findAll();
        return view('categorias',$resultadocategorias);
        
    }
    public function eliminar($codigo=null){
      $categorias = new CategoriasModel();
      $categorias->delete($codigo);  
      return $this->categoria();
    }
    public function localizar($codigo=null){   
    
      $categorias = new CategoriasModel();
      $data['data']=$categorias ->where('id',$codigo)->first();
        return view('frmactualizarcategoria',$data);
      }
      public function modificar($codigo=null){   
    
        $id=$this->request->getVar('txt_id');
        $nombre=$this->request->getVar('txtnombre');
        $fechaalta=$this->request->getVar('txtfecha_alta');   
        $fechaedit=$this->request->getVar('txtfecha_edit');     
        $activo=$this->request->getVar('txxtactivo');
        
        
        $categorias = new CategoriasModel();
        $datos=[      
            'nombre'=>$nombre,
            
            'activo'=> $activo,
            'fecha_alta'=>$fechaalta,
            'fecha_edit'=>$fechaedit,
            
       ];
    
       $categorias->update($id,$datos);
     return $this->categoria();  
    
    
    }
    public function guardar(){
      // recibe datos del formulario
      $id=$this->request->getVar('txt_id');
      $nombre=$this->request->getVar('txtnombre');
      $fechaalta=$this->request->getVar('txtfecha_alta');   
      $fechaedit=$this->request->getVar('txtfecha_edit');     
      $activo=$this->request->getVar('txxtactivo');
                       
      $categorias = new CategoriasModel();
      $datos=[          
        'nombre'=>$nombre,
            
            'activo'=> $activo,
            'fecha_alta'=>$fechaalta,
            'fecha_edit'=>$fechaedit,        
     ];
     
      $categorias->insert($datos);
      return $this->categoria();
  
  }
}