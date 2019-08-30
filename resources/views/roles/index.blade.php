@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Roles de usuario
          @can('create-role')
          <div class="float-right">
            <a href="{{route('user-roles.create')}}" class="btn btn-sm btn-info" role="button" aria-pressed="true">
              Nuevo Rol de Usuario
            </a>
          </div>
          @endcan
        </div>

        <div class="card-body">
          <table class="table table-striped">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Titulo</th>
              <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $rol)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$rol->name}}</td>
                <td>{{$rol->title}}</td>
                <td>
                  @can('show-role')
                  <a href="{{route('user-roles.show',['roleApp' => $rol->id])}}" class="btn btn-sm btn-outline-success" role="button" aria-pressed="true">
                    Detalles
                  </a>
                  @endcan
                  @can('edit-role')
                  <a href="{{route('user-roles.edit',['roleApp' => $rol->id])}}" class="btn btn-sm btn-outline-primary" role="button" aria-pressed="true">
                    Editar
                  </a>
                  @endcan
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection