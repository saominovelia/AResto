<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model resto
use App\Resto;
use DB;

class ContactController extends Controller
{
   public function index()
   {
        $config = DB::table('tb_config')->where('id', 1)->first();

        return view('contact', [
            'configs' => $config
        ]);
   }

   public function insert(Request $request)
   {
       //try adalah fungsi untuk memerintahkan program untuk mencoba apa yang ada dalam brakit try
       // sedangkan catch untuk menangkap error yang terjadi saat try berjalan
       try
       {
           $input = $request->all(); //didalam input ada array berisi semua yang sudah post
           $resto = new Resto(); //inisiasi objek resto
           $resto->name = $input['name'];
           $resto->email = $input['email'];
           $resto->phone = $input['phone'];
           $resto->business_name = $input['business_name'];
           $resto->website = $input['website'];
           $resto->comment = $input['comment'];
           $resto->save();

           echo '<script> alert("Pengisian Data berhasil");window.location.href="'.url("/").'/contact"; </script>';
           return;
       }
       catch(\Illuminate\Database\QueryException $ex)
       {
           //QueryException digunakan untuk menangkap error di eloquent laravel
           echo '<script> alert("Pengisian Data Gagal");window.location.href="'.url("/").'/contact"; </script>';

           return;
           //alert di js fungsi untuk memunculkan peringatan

       }
   }

   public function finish()
   {
        $config = DB::table('tb_config')->where('id', 1)->first();

        return view('finish', [
            'configs' => $config
        ]);
   }

   public function privacy()
   {
        $config = DB::table('tb_config')->where('id', 1)->first();

        return view('privacy', [
            'configs' => $config
        ]);
   }
}
