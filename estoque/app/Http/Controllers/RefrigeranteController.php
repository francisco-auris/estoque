<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Refrigerante;

class RefrigeranteController extends Controller {

    public function getLista(){
        /*$lista = DB::table('refrigerante')->get();
        return json_encode( $lista );*/
        return Refrigerante::orderBy('marca','DESC')->get();
    }
    
}