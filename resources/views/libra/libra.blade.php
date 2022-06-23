@extends('layouts.template')
@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Fondi</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listë librash</li>
  </ol>
</nav>

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">

            <a class="btn btn-success" href="{{route('shto_liber')}}">
               Shto libër
            </a>
            <a class="btn btn-info" href="{{route('file-import')}}">
               Importo libra
            </a>
             <a class="btn btn-primary" href="{{ route('export') }}">
               Eksporto libra
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
           <div class="card">
            <div class="card-header">
                Libra
            </div>
            <div class="table-responsive card-body">
                <table class="table align-items-center" id="table1">
                    <thead>
                        <tr>
                            <th>Titulli</th>
                            <th>Viti i botimit</th>
                            <th>Autorë</th>
                            <th>Veprime</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{!! html_entity_decode($book['book_title']) !!}</td>
                            <td>{{$book['publication_year']}}</td>
                            <td>{{$book['author_1']}}<br>{{$book['author_2']}}</td>
                            
                            
                            <td>

                               <a href="{{route('edit_book',$book['book_id'])}}" data-toggle="tooltip" title="Edito libër"> <span class="badge bg-primary"><i class="fas fa-edit" aria-hidden="true"></i></span></a>&nbsp;  
                               <!-- Button trigger modal -->



                              <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal-{{$book['book_id']}}">
                              <span class="badge bg-info"> <i class="fas fa-eye" aria-hidden="true"></i></span>
                               </a>&nbsp; 
                                 <!-- Modal -->

                                <?php $roles = Auth::user()->id; ?>
                                    @if($roles != 3)  

                               <a href="{{route('fshi_liber',$book['book_id'])}}"data-toggle="tooltip" title="Fshi libër">  <span class="badge bg-danger"><i class="fas fa-trash" aria-hidden="true"></i></span></a>
							    @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                 @foreach($books as $book)
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
        </div>
        </div>

      </div>


@endsection