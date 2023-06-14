<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::paginate(5);
        return view('order.index',compact('order'))
        ->with('i',(request()->input('page',1)-1)*5);
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create($request->all());

         return redirect()->route('order.list')
            ->with('success','Guest created successfully');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function sendEmail(){

        $topOrder = Order::orderBy('TotalOrder','desc')->firstOrFail();
        
        $testMailData = [
            'TShirtName'=>$topOrder->TShirtName,
            'SellerName'=>$topOrder->SellerName,
            'Date'=>$topOrder->Date,
            'Price'=>$topOrder->Price,
            'TotalOrder'=>$topOrder->TotalOrder
        ];

        Mail::to('masdidi00@gmail.com')->send(new SendMail($testMailData));
        
        return redirect()->route('order.index');  

     }
}
