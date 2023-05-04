@extends('layout')
@section('content')
        <div class="container">
            <div class="row mt-5 justify-content-center" style="margin-top:300px!important;">
                <div class="col-md-8">
                    <div class="card p-3">
                        <h5 class="card-title text-center">Form Registrasi</h5>
                       @if ($message = Session::get('success'))
                       <div class="alert alert-success" role="alert">
                        {{ $message }}
                      </div>
                       @endif
                        <div class="card-body">
                            <form action="{{ url('register') }}" method="post">
                                @csrf

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">?</span>
                                    <input type="text" name="name" class="form-control" 
                                    placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"
                                     required="true"
                                    >
                                  </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="email" name="email" class="form-control" 
                                placeholder="Email" aria-label="Email" aria-describedby="basic-addon1"
                                 required="true"
                                >
                              </div>
        
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">#</span>
                                <input type="password" name="password" class="form-control" 
                                placeholder="Password" aria-label="Password" aria-describedby="basic-addon1"
                                required="true">
                              </div>
                            
                             <div class="mt-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                             </div>
                              
                            </form>
                              
                        </div>
                    </div>
                  
                    
                      
                </div>
            </div>
        </div>    
@endsection