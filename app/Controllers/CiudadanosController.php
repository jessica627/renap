<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ciudadanos;
class CiudadanosController extends Controller{
    public function cagarCiudadanos (){
        $ciudadano = new Ciudadanos ();


        $datos ['datos'] = $ciudadano ->findALL ();
        return view ('view_ciudadanos',$datos);
    }

}