@extends('layouts.template')
@section('content')
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Konfigurime</a></li>
    <li class="breadcrumb-item"><a href="#">Përdorues</a></li>
    <li class="breadcrumb-item active" aria-current="page">Krijo përdorues</li>
  </ol>
</nav>
    <div class="row">
        <div class="col-12">
         <div class="card">
    
    <div class="card-body">
        <form action="{{route('perdorues.krijo_perdoruesin')}}" role="form" method="POST" enctype="multipart/form-data">
            {!!csrf_field()!!}         
            <div class="form-group">
                <label class="required" for="name">Emri</label>
                <input class="form-control " type="text" name="name"  value="" required="">
                                <span class="help-block"> </span>
            </div>
            <div class="form-group">
                <label class="required" for="email">Email</label>
                <input class="form-control " type="email" name="email" value="" required="">
                                <span class="help-block"> </span>
            </div>
            <div class="form-group">
                <label class="required" for="password">Password</label>
                <input class="form-control "  name="password" value="" type="password" placeholder="*******" required>
                                <span class="help-block"> </span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">Roli</label>
              
              <select class="form-select"  name="id" aria-label="Default select example">
                         <option selected>Zgjidhni rolin</option>
                           @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->role}}</option>
                           @endforeach
            </select>
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