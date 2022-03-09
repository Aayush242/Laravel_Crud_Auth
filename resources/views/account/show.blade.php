@extends('layouts.app')
@section('content')

<div class="container mt-2">  
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('account.index') }}" enctype="multipart/form-data"> Back </a>
    </div>
    <br>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('account.show','$account->id') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Name: {{$account->first_name}}</strong>
                </div>
            </div>
            <br>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name: {{$account->last_name}}</strong>
                </div>
            </div>
            <br>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                    <strong>DOB: {{$account->dob}}</strong>
                    <br>
                </div>
            </div>
            <br>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address: {{$account->address}}</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:
                        @if($account->gender=='male') Male @endif
                        @if($account->gender=='female') Female @endif
                    </strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone No.: {{$account->phone_no}}</strong>
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email: {{$account->email}}</strong>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Country: {{$account->country}}</strong>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Hobby:
                            @if($account->hobby=='Singing')Singing  @endif
                            @if($account->hobby=='Dancing')Dancing  @endif
                        </strong>
                    </div>
                </div>
            </div>

    </form>
    </div>
</div>
@endsection