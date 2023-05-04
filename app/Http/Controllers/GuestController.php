<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function index(){
        // tampilkan data guest dengan urutan terakhir sebanyak 5 data
        $guestList = Guest::orderBy('id','desc')->paginate(5);

        return view('guest.index',compact('guestList'))
        ->with('i',(request()->input('page',1)-1)*5);
     }
     public function create(){ 

        return view('guest.create');
     }

     public function store(Request $request){
         
      }

}
