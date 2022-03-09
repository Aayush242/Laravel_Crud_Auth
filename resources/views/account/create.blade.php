
    @extends('layouts.app')

    @section('content')
    <div class="container mt-1">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right ">
                    <a class="btn btn-primary mb-2" href="{{ route('account.index') }}"> Back</a>
                </div>
            </div>
        </div>
    
    
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        
        <form action="{{route('account.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('account.form')
        </form>
    </div>
@endsection