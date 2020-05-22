@extends('layouts.app');

@section('content')

@include('notas.todas.modal')

<div class="container-fluid">

<div class="row">

@if($notas)

@foreach ($notas as $nota)

@include('notas.todas.modal-delete')

<div class="col-4">
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header p-3"> <b>{{ $nota->titulo }}</b>  <div class="float-right">{{ $nota->created_at }}</div> </div>
        <div class="card-body">
            <p class="card-text">{{ $nota->texto }}</p>
        </div>
        <div class="card-footer">

        <!-- Button modal -->
        <button type="button" class="btn btn-danger float-right ml-2" data-toggle="modal" data-target="#modalEliminar-{{$nota->id}}">
            <i class="far fa-trash-alt"></i>
        </button>

        <a href="{{URL::action('NotasController@edit',$nota->id)}}">
            <button type="button" class="btn btn-info float-right ">
                <i class="far fa-edit"></i>
            </button>
        </a>




  
    </div>
    </div>

</div>

@endforeach
@endif
</div>
</div>
@endsection
