@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Editar del rol de usuario
          </div>

          <div class="card-body">
            <form method="POST" action="{{route('user-roles.update',['roleApp' => $role->id])}}" id="frm_updaterol" name="frm_updaterol" class="form-inline">
              @method('PATCH')

              @csrf

              <label class="my-1 mr-2 font-weight-bold" for="title">Titulo: <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="title" id="title" value="{{$role->title}}">
              <button type="button" class="btn btn-danger m-2">Cancelar</button>
              <button type="submit" class="btn btn-primary m-2">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
