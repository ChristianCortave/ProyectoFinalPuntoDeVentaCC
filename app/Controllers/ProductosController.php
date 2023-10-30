<?php
namespace App\Controllers;

//use App\Controllers\Controller;
use CodeIgniter\Controller;
use App\Models\ProductosModel;
use App\Models\CategoriasModel;
class ProductosController extends Controller
{
    protected $productos;

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
    public function producto()

    {
        $productos = new ProductosModel();
        $resultadop=$productos->findAll();
        $categorias = new CategoriasModel();
        $resultadoc=$categorias->findAll();
        $resultado=array(
          'resultadoproductos'=>$resultadop,
          'resultadocategorias'=>$resultadoc
        );

        return view('productos',$resultado);
        
    }
    public function eliminar($codigo=null){
      $productos = new ProductosModel();
      $productos->delete($codigo);  
      return $this->producto();
    }
    public function localizar($codigo=null){   
    
      $productos = new ProductosModel();
      $data['data']=$productos ->where('id',$codigo)->first();
        return view('frmactualizarcategoria',$data);
      }
      public function modificar($codigo=null){   
    
        $id=$this->request->getVar('txt_id');
        $nombre=$this->request->getVar('txtnombre');
        $codigo=$this->request->getVar('txtcodigo');   
        $precioventa=$this->request->getVar('txtventa');   
        $preciocompra=$this->request->getVar('preciocompra');   
        $existencias=$this->request->getVar('txtexistencias');   
        $stockminimo=$this->request->getVar('txtstock');   
        $inventariable=$this->request->getVar('txtinventario');   
        $idunidad=$this->request->getVar('txtunidad'); 
        $idcategoria=$this->request->getVar('txtcategoria');       
        $activo=$this->request->getVar('txxtactivo');
        
        
        $productos = new ProductosModel();
        $datos=[      
            'nombre'=>$nombre,
            'codigo'=>$codigo,
            'nombre'=>$nombre,
            'precio_venta'=>$precioventa,
            'precio_compra'=>$preciocompra,
            'existencias'=>$existencias,
            'stock_minimo'=>$stockminimo,
            'inventariable'=>$inventariable,
            'id_unidad'=>$idunidad,
            'id_categoria'=>$idcategoria,
            'activo'=> $activo,
            
            
       ];
    
       $productos->update($id,$datos);
     return $this->producto();  
    
    
    }
    public function guardar(){
      // recibe datos del formulario
      $id=$this->request->getVar('txt_id');
        $nombre=$this->request->getVar('txtnombre');
        $codigo=$this->request->getVar('txtcodigo');   
        $precioventa=$this->request->getVar('txtventa');   
        $preciocompra=$this->request->getVar('preciocompra');   
        $existencias=$this->request->getVar('txtexistencias');   
        $stockminimo=$this->request->getVar('txtstock');   
        $inventariable=$this->request->getVar('txtinventario');   
        $idunidad=$this->request->getVar('txtunidad'); 
        $idcategoria=$this->request->getVar('txtcategoria');       
        $activo=$this->request->getVar('txxtactivo');
                       
      $productos = new ProductosModel();
      $datos=[          
        'nombre'=>$nombre,
            'codigo'=>$codigo,
            'nombre'=>$nombre,
            'precio_venta'=>$precioventa,
            'precio_compra'=>$preciocompra,
            'existencias'=>$existencias,
            'stock_minimo'=>$stockminimo,
            'inventariable'=>$inventariable,
            'id_unidad'=>$idunidad,
            'id_categoria'=>$idcategoria,
            'activo'=> $activo,       
     ];
     
      $productos->insert($datos);
      return $this->producto();
  
  }
}