<?php
namespace App\Controllers;

//use App\Controllers\Controller;
use CodeIgniter\Controller;
use App\Models\CajasModel;

class CajasController extends Controller
{
    protected $cajas;

  
    public function cajas()
    {
        $cajas = new CajasModel();
        $resultadocajas['resultadocajas']=$cajas->findAll();
        return view('cajas',$resultadocajas);
        
    }

  public function eliminar($codigo=null){
    $cajas = new CajasModel();
    $cajas->delete($codigo);  
    return $this->cajas();
      }
      public function localizar($codigo=null){   
    
        $cajas = new CajasModel();
        $data['data']=$cajas ->where('id',$codigo)->first();
          return view('frmactualizarcajas',$data);
        }
        public function modificar($codigo=null){   
    
          $id=$this->request->getVar('txt_id');
          $numerocaja=$this->request->getVar('txtnumerocaja');
          
          $nombre=$this->request->getVar('txtnombre');
          $folio=$this->request->getVar('txtfolio');  
         
          $fechaalta=$this->request->getVar('txtfecha_alta');   
          $fechamodifica=$this->request->getVar('txtfecha_modifica');     
          $activo=$this->request->getVar('txxtactivo');
          
          
          $cajas = new CajasModel();
          $datos=[   
            
            'numerodecaja'=>$numerocaja,   
              'nombre'=>$nombre,
              'folio'=>$folio,
              
              'activo'=> $activo,
              'fecha alta'=>$fechaalta,
              'fecha modifica'=>$fechamodifica,
              
         ];
      
         $cajas->update($id,$datos);
       return $this->cajas();  
      
      
      }
      public function guardar(){
        // recibe datos del formulario
        $id=$this->request->getVar('txt_id');
        $numerocaja=$this->request->getVar('txtnumerocaja');
       
        $nombre=$this->request->getVar('txtnombre');
        $folio=$this->request->getVar('txtfolio'); 
       
        $fechaalta=$this->request->getVar('txtfecha_alta');   
        $fechamodifica=$this->request->getVar('txtfecha_modifica');     
        $activo=$this->request->getVar('txxtactivo');
                         
        $cajas = new CajasModel();
        $datos=[          
            'numerodecaja'=>$numerocaja,   
              'nombre'=>$nombre,
              'folio'=>$folio,
              
              'activo'=> $activo,
              'fecha alta'=>$fechaalta,
              'fecha modifica'=>$fechamodifica,    
       ];
       
        $cajas->insert($datos);
        return $this->cajas();
    
    }
}