<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function entrar( Request $req )
    {
        //print_r( $req->input() );
        $login = $req->input('cmp_user') ?? null;
        $senha = $req->input('password') ?? null;
        //vef valores
        if( $login == null OR $senha == null ){
            //saida msg de vazio
        }
        else 
        {

        }
    }

}
