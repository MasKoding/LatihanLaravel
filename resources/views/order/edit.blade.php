@extends('layout')
@section('content')
<div class="container">
   
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="float-start">
                <h2>Edit Guest</h2>
            </div>
            <div class="float-end mb-3">
                <a href="{{ route('guest.list') }}"
                class="btn btn-primary"
                >Back</a>
            </div>
        </div>
    </div>

    <form action="{{ url('/guest/update/'.$guest->id)}}" method="post">
       {{-- untuk mengirim token --}}
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" value="{{ $guest->username }}" id="username" 
                    class="form-control" required="true">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Fullname</label>
                    <input type="text" name="fullname" value="{{ $guest->fullname }}" id="fullname" 
                    class="form-control" required="true">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Role</label>
                    <input type="text" name="role" value="{{ $guest->role }}" id="role" 
                    class="form-control" required="true">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" name="job" value="{{ $guest->job }}" id="job" 
                    class="form-control" required="true">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Department</label>
                    <input type="text" name="department" value="{{ $guest->department }}" id="department" 
                    class="form-control" required="true">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="" selected></option>
                        <option value="Single" @if ($guest->status =="Single")
                            {{ "selected"}}
                        @endif >Single</option>
                        <option value="Married" @if ($guest->status =="Married")
                            {{ "selected"}}
                        @endif >Married</option>
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