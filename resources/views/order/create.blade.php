@extends('layout')
@section('content')
<div class="container">
   
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="float-start">
                <h2>Add Guest</h2>
            </div>
            <div class="float-end mb-3">
                <a href="{{ route('guest.list') }}"
                class="btn btn-primary"
                >Back</a>
            </div>
        </div>
    </div>

    <form action="{{ route('guest.store')}}" method="post">
       {{-- untuk mengirim token --}}
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="username" 
                    class="form-control" required="true">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Fullname</label>
                    <input type="text" name="fullname" id="fullname" 
                    class="form-control" required="true">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Role</label>
                    <input type="text" name="role" id="role" 
                    class="form-control" required="true">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" name="job" id="job" 
                    class="form-control" required="true">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Department</label>
                    <input type="text" name="department" id="department" 
                    class="form-control" required="true">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="" selected></option>
                        <option value="Single" selected>Single</option>
                        <option value="Married" selected>Married</option>
                    </select>
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

    </form>

</div>
@endsection