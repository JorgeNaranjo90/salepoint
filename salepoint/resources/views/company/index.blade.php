@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Campany</div>

                    <div class="panel-body">
                        <table class=""table table-striped">
                             <tr>
                                 <th>#</th>
                                 <th>name</th>
                                 <th>Partner_id</th>
                                 <th>Currency_id</th>
                                 <th>FisicalRegimen_id</th>
                                 <th>Acciones</th>
                                 </tr>
                              @foreach($company as $company)
                              <tr>
                                  <td>{{$user->id}}}}</td>
                                  <td>{{$user->}}}}</td>
                                  <td>2</td>
                                  <td>3</td>
                                  <td>1</td>
                                  <td>
                                      <a href="">Edita</a>
                                      <a href="">Eliminar</a>
                                  </td>
                              </tr>
                             @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
