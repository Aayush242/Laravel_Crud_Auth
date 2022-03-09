@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Crud through Laravel</h2>
                        </div>
                        <div class = "pull-right mb-2"> 
                            <a class="btn btn-success ms-4"  href="{{route ('account.create') }}"> Create New Account </a>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="container mt-2">  
                    <table class="table table-bordered">  
                        <tr>
                            <th>S.No</th>
                            <th width="200px">First_Name</th>
                            <th width="200px">Last_Name</th>
                            <th>Email</th>
                            <th width="700px">Dob</th>
                            <th width="300px">Address</th>
                            <th width="200px">Phone_no</th>
                            <th>Hobby</th>  
                            <th>Gender</th>
                            <th>Country</th>  
                            <th width="400px">Action</th> 
                        </tr>
                            
                         @foreach ($Account as $account)
                            <tr>
                                <td>{{ $account->id }}</td>
                                <td>{{ $account->first_name}}</td>
                                <td>{{ $account->last_name}}</td>
                                <td>{{ $account->email }}</td>
                                <td>{{ $account->dob }}</td>
                                <td>{{ $account->address }}</td>
                                <td>{{ $account->phone_no }}</td>
                                <td>{{ $account->hobby }}</td>
                                <td>{{ $account->gender }}</td>
                                <td>{{ $account->country }}</td>
                            

                                <td>
                                    <form action="{{ route('account.destroy',$account->id) }}" method="Post">
                                      <a class="btn btn-warning mb-2" href="{{ route('account.edit',$account->id) }}">Edit</a>
                                      <br>
              
                                      <button type="submit" class="btn btn-danger mb-2">Delete</button>    
              
                                      @csrf
                                      @method('DELETE')

                                      <div class="pull-right mb-2">
                                        <a class="btn btn-success mb-2" href="{{ route('account.show',$account->id) }}"> Show</a>
                                      </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection