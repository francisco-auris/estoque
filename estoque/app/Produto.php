<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = ['marca','litragem','sabor','tipo','valor','quantidade'];
}
