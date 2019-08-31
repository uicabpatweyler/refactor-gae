@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Detalles del rol de usuario
          </div>

          <div class="card-body">
            <form class="form-inline">
              <label class="my-1 mr-2 font-weight-bold" for="title">Titulo: </label>
              <input type="text" class="form-control" id="title" value="{{$role->title}}" disabled>
              @can('edit-role')
                <a href="{{route('user-roles.edit',['roleApp' => $role->id])}}" class="btn btn btn-primary m-2" role="button" aria-pressed="true">
                  Editar
                </a>
              @endcan
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
