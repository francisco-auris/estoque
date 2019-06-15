<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Refrigerante;

class RefrigeranteController extends Controller {

    public function getLista(){
        /**/
        $ref = new Refrigerante();
        return $ref->listAll();
    }
    
}