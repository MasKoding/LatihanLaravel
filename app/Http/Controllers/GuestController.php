<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function index(){
        $guestList = Guest::latest()->paginate(5);

        return view('guest.index',compact('guestList'))
        ->with('i',(request()->input('page',1)-1)*5);
     }
     
     public function create(){ 

        return view('guest.create');
     }

     public function store(Request $request){
         Guest::create($request->all());

         return redirect()->route('guest.list')
            ->with('success','Guest created successfully');
      }

      public function myFunction($id){
         $guest = Guest::findOrFail($id);
      
      
         return view('guest.edit',compact('guest'));
       
      
      }

       public function update(Request $request,$id){
        $guest = Guest::firstOrFail($id);
        
         $guest->update([
            'username'=>$request->username,
           'fullname' =>$request->fullname,
           'role' => $request->role,
           'job' => $request->job,
           'department' => $request->department,
           'status' => $request->status
         ]);    
      

        return redirect()->route('guest.list')
        ->with('success','Guest updated successfully');   
        }
       
        public function delete($id){ 
         Guest::where('id',$id)->delete();

         return redirect()->route('guest.list')
         ->with('success','Guest deleted successfully');
        }
}
