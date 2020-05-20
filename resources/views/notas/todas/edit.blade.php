@extends('layouts.app');

@section('content')
<div class="card text-center mx-auto" style='width:250px'>
  <div class="card-header">
    <input type="text" name="titulo" class="form-control" value="{{$nota->titulo}}">
  </div>
  <div class="card-body">
<textarea name="texto" id=""  rows="6" class="form-control">{{$nota->texto}}</textarea>
  </div>
  <div class="card-footer text-muted small" >
  {{$nota->updated_at}}

    <a href="{{URL::action('NotasController@edit',$nota->id)}}">
        <button type="submit" class="btn btn-info float-right ">
            <i class="far fa-save"></i>
        </button>
    </a>

    <a href="{{URL::action('NotasController@index',$nota->id)}}">
        <button type="button" class="btn btn-danger float-right ">
            <i class="far fa-window-close"></i>
        </button>
    </a>

  </div>

</div>
@endsection
