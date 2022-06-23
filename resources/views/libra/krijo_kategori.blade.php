@extends('layouts.template')
@section('content')
    
    <div class="row">
        <div class="col-12">
         <div class="card">
    <div class="card-header">
        Krijo Kategori
    </div>

    <div class="card-body">
        <form action="{{route('libra.add')}}" role="form" method="POST" enctype="multipart/form-data">
            {!!csrf_field()!!}         
            <div class="form-group">
                <label class="required">Kategori</label>
                <input class="form-control " type="text" name="category"  value="" required="">
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