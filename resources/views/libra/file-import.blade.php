
@extends('layouts.template')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Fondi</a></li>
    <li class="breadcrumb-item active" aria-current="page">Importo</li>
  </ol>
</nav>
    <div class="row">
        <div class="col-12">
         <div class="card">
    

    

 <div class="card-body">
           <form id="import-csv-form" method="POST"  action="{{route('libra.import')}}" accept-charset="utf-8" enctype="multipart/form-data">
             {!!csrf_field()!!}         
            <div class="form-group">
                <input class="form-control " type="file" name="file"  placeholder="Choose file">
                                <span class="help-block"> </span>
            </div>
             @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
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