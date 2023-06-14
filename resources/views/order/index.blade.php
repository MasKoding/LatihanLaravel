@extends('layout')
@section('content')
    <div class="container">
       
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="float-start">
                    <h2>Laravel Order</h2>
                </div>
                <div class="float-end mb-3">
                    <a href="{{ route('order.sendEmail') }}"
                    class="btn btn-success"
                    >Send Email</a>
                </div>
            </div>
        </div>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>T Shirt</th>
                    <th>Seller Name</th>
                    <th>Price</th>
                    <th>Total Order</th>
                    <th>Action</th>
                </tr>
                @foreach ($order as $g)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $g->Date }}</td>
                        <td>{{ $g->TShirtName }}</td>
                        <td>{{ $g->SellerName  }}</td>
                        <td>{{ $g->Price  }}</td>
                        <td>{{ $g->TotalOrder }}</td>
                     
                        <td>
                            <form action="{{route('order.destroy',$g->id)}}" method="post">
                                @csrf
                                
                                <a href="{{route('order.edit',$g->id) }}" 
                                    class="btn btn-primary">Edit</a>
                                    @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>    
                        </td>     
                    </tr>
                @endforeach
            </table>
            {{-- membuat link atau number page( << 1,2,3 >>) --}}
       {{   $order->links()  }}
    </div>
@endsection