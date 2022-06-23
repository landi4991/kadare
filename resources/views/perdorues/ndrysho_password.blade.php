@extends('layouts.template')
@section('content')
    
    <div class="row">
        <div class="col-12">
         <div class="card">
    <div class="card-header">
       Ndrysho Password
    </div>

    <div class="card-body">
        <form action="{{route('password_ndrysho',['user_id' => $users->user_id])}}" role="form" method="POST" enctype="multipart/form-data">
            {!!csrf_field()!!}         
            
             <div class="form-group">
                <label class="required" for="password">Password</label>
                <input class="form-control "  name="password" value="{{$users->password}}" type="password" placeholder="*******" required>
                                <span class="help-block"> </span>
            </div>
           
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Ruaj
                </button>
            </div>
        </form>
    </div>
</div>
        </div>

      </div>

@endsection
     
