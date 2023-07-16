<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_persona;
class C_persona extends Controller{

    public function index()
    {
        $per = new m_persona();
        $datos['personas']=$per->findAll();
        return view('welcome_message',$datos);
    }

    public function agregar()
    {
      return view('agregar');
    }
    
    public function insertar()
    {
        $per = new m_persona();
        $data=[
          /*  'idpersona'=> $_POST['Id'],*/
            'cedulapersona'=> $_POST['Cedula'],
            'apellidospersona'=> $_POST['Apellidos'],
            'nombrespersona'=> $_POST['Nombres'],
            'fechanacimientopersona'=> $_POST['FechaNacimiento'],
            'correopersona'=> $_POST['Correo']
        ];

        $per->insert($data);
        return redirect()->to(base_url());
    }
    
    public function eliminar($idpersona = null)
    {
       $per = new m_persona();
       $per->delete($idpersona);
       return redirect()->to(base_url());
    }
    public function editar($idpersona = null)
    {
        $per = new m_persona();
        $registro['persona']= $per->find($idpersona);
        return view('actualizando',$registro);
    }
    public function factualizar()
    {

        $per = new m_persona();
        $id= $_POST['Id'];

        $data = [

            'cedulapersona'=> $_POST['Cedula'],
            'apellidospersona'=> $_POST['Apellidos'],
            'nombrespersona'=> $_POST['Nombres'],
            'fechanacimientopersona'=> $_POST['FechaNacimiento'],
            'correopersona'=> $_POST['Correo']
           // print_r($id);
        ];
        
        $per->update($id, $data);
       return redirect()->to(base_url());
    }





}