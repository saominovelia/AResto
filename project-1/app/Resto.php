<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    protected $table='tb_resto';
    // protected $primarykey='id'; //boleh ada boleh engga asal id
    public $timestamps=false;
    //untuk menonaktifkan timestamp di table 
}
