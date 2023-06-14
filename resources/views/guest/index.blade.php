@extends('layout')
@section('content')
    <div class="container">
       
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="float-start">
                    <h2>Laravel Guest</h2>
                </div>
                <div class="float-end mb-3">
                    <a href="{{ route('guest.create') }}"
                    class="btn btn-success"
                    >Create</a>
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
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Role</th>
                    <th>Job</th>
                    <th>Department</th>
                    <th>Status</th>
                </tr>
                @foreach ($guestList as $g)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $g->username }}</td>
                        <td>{{ $g->fullname }}</td>
                        <td>{{ $g->role  }}</td>
                        <td>{{ $g->job  }}</td>
                        <td>{{ $g->department }}</td>
                        <td>{{ $g->status }}</td>        
                    </tr>
                @endforeach
            </table>
            {{-- membuat link atau number page( << 1,2,3 >>) --}}
       {{   $guestList->links()  }}
    </div>
@endsection