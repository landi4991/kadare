@extends('layouts.template')
@section('content')
<div class="row">
        <div class="col-12">
         <div class="card">
    <div class="card-header">
       Rezultatet e Kërkimit
    </div>


                    <div class="card-body">

                       
                    {{-- 
                     @foreach($searchResults as $searchResult)
                        <ul>
                                <a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a>
                        </ul>
                    @endforeach--}}
					@foreach($books as $book)
                        <ul>
                              {{ $book->book_title }}-  <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$book['book_id']}}"> <b>Më shumë</b></a>
                        </ul>

                           <div class="modal fade bs-example-modal-lg" id="exampleModal-{{$book['book_id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog">
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
                          
                     @foreach($user as $users)
                        <ul>
                                <a href="">{{ $users->name }}</a>
                        </ul>
                    @endforeach
                        </div>
                    </div>
    </div>
</div>
@endsection