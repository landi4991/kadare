@extends('layouts.template')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Konfigurime</a></li>
    <li class="breadcrumb-item active" aria-current="page">Përdorues</li>
  </ol>
</nav>

  @if ($success = Session::get('success'))
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> {{$success}}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
                @endif
 
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">

            <a class="btn btn-success" href="{{route('krijo_perdorues')}}">
               Shto perdorues
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
           <div class="card">
            <div class="card-header">
                Përdorues
            </div>
            <div class="table-responsive-sm card-body">
                <table class="table align-items-center" id="table1">
                    <thead>
                        <tr>
                            <th>Emër</th>
                            <th>Email</th>
                            <th>Roli</th>
                            <th>Veprime</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $perdorues)
                        <tr>
                            <td>{{$perdorues['name']}}</td>
                            <td>{{$perdorues['email']}}</td>
                            <td>{{$perdorues['role']}}</td>
                            
                            <td>

                               <a href="{{route('edit',Crypt::encrypt($perdorues['user_id']))}}" data-toggle="tooltip" title="Edito përdorues"> <span class="badge bg-primary"><i class="fas fa-edit" aria-hidden="true"></i></span></a>&nbsp;
                               <a href="{{route('ndrysho_password',Crypt::encrypt($perdorues['user_id']))}}" data-toggle="tooltip" title="Ndryshon password">  <span class="badge bg-info"><i class="fas fa-key" aria-hidden="true"></i></span></a>&nbsp;
                               <a href="{{route('fshi_perdorues',$perdorues['user_id'])}}"data-toggle="tooltip" title="Fshi përdorues">  <span class="badge bg-danger"><i class="fas fa-trash" aria-hidden="true"></i></span></a>
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