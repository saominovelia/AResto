<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use File;
use App\User;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
   {
       return view('auth.login');
   }

   public function home()
   {
       $config = DB::table('tb_config')->get();

       return view('admin.home',[
           'configs' => $config
       ]);
   }

   public function contact(){
    $config = DB::table('tb_config')->get();

    return view('admin.contact',[
        'configs' => $config
    ]);
   }

   public function terms(){
    $config = DB::table('tb_config')->get();

    return view('admin.terms',[
        'configs' => $config
    ]);
   }
   public function privacy(){
    $config = DB::table('tb_config')->get();

    return view('admin.privacy',[
        'configs' => $config
    ]);
   }

    public function updateHome(Request $request, $id){
        DB::table('tb_config')->where('id', $id)->update([
            'landing_title' => $request->landing_title,
            'landing_desc' => $request->landing_desc
        ]);

        return redirect('/admin/home')->with('success', 'sukses');
    }

    public function updateContact(Request $request, $id){
        DB::table('tb_config')->where('id', $id)->update([
            'fb_link' => $request->fb_link,
            'ig_link' => $request->ig_link,
            'wa_link' => $request->wa_link,
            'address' => $request->address,
            'phone_number' => $request->phone_number
        ]);

        return redirect('/admin/home')->with('success', 'sukses');
    }

    public function updateTerms(Request $request, $id){
        DB::table('tb_config')->where('id', $id)->update([
            'terms_condition' => $request->terms_condition
        ]);

        return redirect('/admin/home')->with('success', 'sukses');
    }

    public function updatePrivacy(Request $request, $id){
        DB::table('tb_config')->where('id', $id)->update([
            'privacy_policy' => $request->privacy_policy
        ]);

        return redirect('/admin/home')->with('success', 'sukses');
    }

   public function homeEdit($id){
        $config = DB::table('tb_config')->where('id', $id)->get();

        return view('admin.editHome', [
            'configs' => $config
        ]);
    }

    public function contactEdit($id){
        $config = DB::table('tb_config')->where('id', $id)->get();

        return view('admin.editContact', [
            'configs' => $config
        ]);
    }

    public function termsEdit($id){
        $config = DB::table('tb_config')->where('id', $id)->get();

        return view('admin.editTerms', [
            'configs' => $config
        ]);
    }

    public function privacyEdit($id){
        $config = DB::table('tb_config')->where('id', $id)->get();

        return view('admin.editPrivacy', [
            'configs' => $config
        ]);
    }

    public function listContact()
   {
       $config = DB::table('tb_resto')->get();

       return view('admin.listContact',[
           'configs' => $config
       ]);
   }

   public function administration()
   {
       $config = DB::table('users')->get();

       return view('admin.administrator',[
           'configs' => $config
       ]);
   }

    public function registration()
    {
        $config = DB::table('users')->get();

        return view('admin.creatadmin',[
            'configs' => $config
        ]);
    }


   public function postRegistration(Request $request)
   {
       request()->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:8|confirmed',
        'password_confirmation'=>'required|'
       ]);

       $data = $request->all();

       $check = $this->create($data);

       return redirect('/admin/administration')->with('success', 'Successfully Added New Administrator');
   }

   public function create(array $data)
   {
       return User::create([
           'name' => $data['name'],
           'email' => $data['email'],
           'password' => Hash::make($data['password'])
       ]);
   }

   public function adminEdit($id){
       $config = DB::table('users')->where('id', $id)->first();

       return view('admin.editAdmin', [
           'configs' => $config
       ]);
   }

    public function updateAdmin(Request $request){
       $data = $request->all();

       if($data['password'] != ''){
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required|'
           ]);
           User::where('id',$data['id'])->update([
               'name' => $data['name'],
               'email' => $data['email'],
               'password' => Hash::make($data['password'])
           ]);
       } else {
        request()->validate([
            'name'=>'required',
            'email'=>'required|email',
           ]);
           User::where('id',$data['id'])->update([
               'name' => $data['name'],
               'email' => $data['email']
           ]);
       }

       return redirect('/admin/administration')->with('success', 'Successfully Edited Administrator');
    }

    public function delete($id){
        $config = User::where('id',$id)->delete();

        return redirect('admin/administration')->with('success', 'Successfully Deleted Administrator');
    }


}
