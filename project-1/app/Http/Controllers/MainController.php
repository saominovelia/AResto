<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
   public function index()
   {

    $config = DB::table('tb_config')->where('id', 1)->first();

        return view('landing', [
            'configs' => $config
        ]);
   }
}
