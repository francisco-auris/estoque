<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class Refrigerante extends Model
{
    //
    protected $fillable = ['marca','litragem','sabor','tipo','valor','quantidade'];

    protected $hidden = ['id'];

    protected $table = 'refrigerantes';

    protected $primaryKey = 'id';
    public $incrementing = true;

    public function listAll(){
        $lista = DB::table('refrigerantes')->paginate(10)->get();
        return json_encode( $lista );
    }

    public function modelInsert()
    {
        if( $this->vefRefrigerante( $this->marca ) == false )
        {
            try {

                /*$result = DB::insert(
                    'insert into refrigerantes (marca,tipo,litragem,quantidade,sabor,valor) values (:marca, :tipo, :litro, :qtd, :sabor, :valor)',
                    ['marca' => $this->marca, 'tipo' => $this->tipo, 'litro' => $this->litragem, 'qtd' => $this->quantidade, 'sabor' => $this->sabor, 'valor' => $this->sabor]
                );*/
                /*DB::table('refrigerantes')->insertGetId(
                    array(
                        'marca' => $this->marca, 
                        'tipo' => $this->tipo, 
                        'litragem' => $this->litragem, 
                        'quantidade' => $this->quantidade, 
                        'sabor' => $this->sabor, 
                        'valor' => $this->sabor
                    )
                );*/

                return 'teste';

            }
            catch( Exception $e ){
                report($e);
                return $e;
            }
        }
        else {
            return "_exist_";
        }
    }

    private function vefRefrigerante( $valor ){

        $teste = DB::table('refrigerantes')->where('marca', $valor)->count();
        if( $teste > 0 ){
            return true;
        }
        else {
            return false;
        }

    }

}
