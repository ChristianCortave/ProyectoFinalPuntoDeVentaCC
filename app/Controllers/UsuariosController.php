<?php
namespace App\Controllers;

//use App\Controllers\Controller;
use CodeIgniter\Controller;
use App\Models\UsuariosModel;

class UsuariosController extends Controller
{
    protected $usuarios;

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
    public function usuarios()
    {
        $usuarios = new UsuariosModel();
        $resultadousuarios['resultadousuarios']=$usuarios->findAll();
        return view('usuarios',$resultadousuarios);
        
    }

   // public function nuevo()
   // {
    //  $data =['titulo'=>]
  //  }
  public function eliminar($codigo=null){
    $usuarios = new UsuariosModel();
    $usuarios->delete($codigo);  
    return $this->usuarios();
      }
      public function localizar($codigo=null){   
    
        $usuarios = new UsuariosModel();
        $data['data']=$usuarios ->where('id',$codigo)->first();
          return view('frmactualizarusuarios',$data);
        }
        public function modificar($codigo=null){   
    
          $id=$this->request->getVar('txt_id');
          $usuario=$this->request->getVar('txtusuario');
          $contra=$this->request->getVar('txtcontra');
          $nombre=$this->request->getVar('txtnombre');
          $idcaja=$this->request->getVar('txtid_caja');  
          $idrol=$this->request->getVar('txtid_rol');
          $fechaalta=$this->request->getVar('txtfecha_alta');   
          $fechamodifica=$this->request->getVar('txtfecha_modifica');     
          $activo=$this->request->getVar('txxtactivo');
          
          
          $usuarios = new UsuariosModel();
          $datos=[   
            'usuario'=>$usuario,
            'contra'=>$contra,   
              'nombre'=>$nombre,
              'idcaja'=>$idcaja,
              'idrol'=>$idrol,
              'activo'=> $activo,
              'fecha alta'=>$fechaalta,
              'fecha modifica'=>$fechamodifica,
              
         ];
      
         $usuarios->update($id,$datos);
       return $this->usuarios();  
      
      
      }
      public function guardar(){
        // recibe datos del formulario
        $id=$this->request->getVar('txt_id');
        $ususario=$this->request->getVar('txtusuario');
        $contra=$this->request->getVar('txtcontra');
        $nombre=$this->request->getVar('txtnombre');
        $idcaja=$this->request->getVar('txtid_caja'); 
        $idrol=$this->request->getVar('txtid_rol'); 
        $fechaalta=$this->request->getVar('txtfecha_alta');   
        $fechamodifica=$this->request->getVar('txtfecha_modifica');     
        $activo=$this->request->getVar('txxtactivo');
                         
        $usuarios = new UsuariosModel();
        $datos=[          
            'usuario'=>$usuario,
            'contra'=>$contra,   
              'nombre'=>$nombre,
              'idcaja'=>$idcaja,
              'idrol'=>$idrol,
              'activo'=> $activo,
              'fecha alta'=>$fechaalta,
              'fecha modifica'=>$fechamodifica,      
       ];
       
        $usuarios->insert($datos);
        return $this->usuarios();
    
    }
    public function login()
    {
       
        return view('login');
        
    }
    public function valida()
    {
        $usuario = $this->request->getPost('usuario');
        $contra = $this->request->getPost('contra');
    
        $usuariosModel = new UsuariosModel();
        $usuarioData = $usuariosModel->where('usuario', $usuario)->first();
    
        if ($usuarioData && password_verify($contra, $usuarioData['contra'])) {
            // Las credenciales son válidas, inicia la sesión del usuario
            // Puedes usar la librería de sesiones de CodeIgniter o tu propio sistema de sesiones.
            // Ejemplo: $this->session->set('usuario_id', $usuarioData['id']);
    
            // Redirige a la página de menú
            return redirect()->to('menu.php'); // Cambia 'menu.php' por la URL deseada
        } else {
            // Credenciales incorrectas, muestra un mensaje de error y redirige al inicio de sesión
            return redirect()->to('login')->with('error', 'Credenciales incorrectas');
        }
    }
    
      
}