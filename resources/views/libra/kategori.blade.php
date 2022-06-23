@extends('layouts.template')
@section('content')



    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">

            <a class="btn btn-success" href="{{route('krijo_kategori')}}">
               Shto kategori
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
           <div class="card">
            <div class="card-header">
                Kategori
            </div>
            <div class="table-responsive-sm card-body">
                <table class="table align-items-center" id="table1">
                    <thead>
                        <tr>
                            <th>Kategoria</th>       
                            <th>Veprime</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $categ)
                        <tr>
                            <td>{{$categ['category']}}</td>
                            
                            
                            <td>

                               <a href="" data-toggle="tooltip" title="Edito kategori"> <span class="badge bg-primary"><i class="fas fa-edit" aria-hidden="true"></i></span></a>&nbsp;
                               <a href=""data-toggle="tooltip" title="Fshi kategori">  <span class="badge bg-danger"><i class="fas fa-trash" aria-hidden="true"></i></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>

      </div>


@endsection