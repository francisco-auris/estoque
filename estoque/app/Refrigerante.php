<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Refrigerante extends Model
{
    //
    protected $fillable = ['marca','litragem','sabor','tipo','valor'];

    public function listAll(){
        $lista = DB::table('refrigerantes')->paginate(10)->get();
        return json_encode( $lista );
    }

}
