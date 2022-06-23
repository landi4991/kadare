@extends('layouts.template')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Fondi</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listë librash</li>
  </ol>
</nav>


 
      <div class="row row-cols-1 row-cols-md-5 g-4">
        @foreach($books as $book)
  <div class="col">
    <div class="card h-100">
      <img src="http://shtepiakadare.tirana.al/wp-content/uploads/2019/12/coveri-i-librave.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{!! html_entity_decode($book['book_title']) !!}</h5>

       

      </div>
      <div class="card-footer">
      <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal-{{$book['book_id']}}">
                              <span class="badge bg-yellow">Më shumë</span>
                               </a>
    </div>
    </div>
  </div>
   <div class="modal fade bs-example-modal-lg" id="exampleModal-{{$book['book_id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kartela e librit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>{!! html_entity_decode($book['book_title']) !!}</h5>
      <b> Autor: </b>{{$book['author_1']}}<br>{{$book['author_2']}}<br>
      <b> Viti i botimit: </b>{{$book['publication_year']}}<br>
      <b> Përshkrim: </b>{!! html_entity_decode($book['description']) !!}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mbyll</button>
      </div>
    </div>
  </div>
</div>

   @endforeach

</div>

      <div class="nav-scroller py-4 mb-2"> <nav class="nav d-flex justify-content-center"> <ul class="pagination pagination-sm ">    {{ $books->links() }}</ul> </nav> </div>


@endsection