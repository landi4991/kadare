@extends('layouts.template')
@section('content')
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Fondi</a></li>
    <li class="breadcrumb-item"><a href="#">Listë librash</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edito libër</li>
  </ol>
</nav>
    <div class="row">
        <div class="col-12">
         <div class="card">
    

    <div class="card-body">
        <form action="{{route('perditeso_liber',['book_id' => $books->book_id])}}" role="form" method="POST" enctype="multipart/form-data">
            {!!csrf_field()!!}         
            <div class="form-group">
                <label class="required">Titulli</label>
                <input class="form-control " type="text" name="book_title"  value="{{$books->book_title}}" >
                                <span class="help-block"> </span>
            </div>
            <div class="form-group">
                <label class="required">Autor 1</label>
                <input class="form-control " type="text" name="author_1"  value="{{$books->author_1}}" >
                                <span class="help-block"> </span>
            </div>
            <div class="form-group">
                <label class="required" >Autor 2</label>
                <input class="form-control " type="text" name="author_2"  value="{{$books->author_2}}" >
                                <span class="help-block"> </span>
            </div>
            <div class="form-group">
                <label class="required">Përshkrim</label>
                <textarea class="form-control " type="text" name="description"  value="">{{$books->description}}</textarea>
                                <span class="help-block"> </span>
            </div>
            <div class="form-group">
                <label class="required">Viti i botimit</label>
                <input class="form-control " type="number" name="publication_year"  value="{{$books->publication_year}}">
                                <span class="help-block"> </span>
            </div>
                           <input type="hidden" value = "{{Auth::user()->user_id}}" name="user_id">


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