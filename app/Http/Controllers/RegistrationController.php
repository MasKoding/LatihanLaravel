<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    //
   public function index(){
        return view('registration');
    }

    public function register(Request $request){
        $email  = $request->email;
        $testMailData = [
            'email'=>$request->email,
            'name'=>$request->name
        ];
        $data = $request->all();

        $check = $this->createData($data);

//    kirim title & body ke email tujuan
        Mail::to($email)->send(new SendMail($testMailData));
        

        // jika berhasil , kembali ke halaman registrasi
        return redirect()->back()->with('success','berhasil registrasi');
         
     }

     public function createData(array $data){
         return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=> Hash::make($data['password']),
         ]);
      }
}
