@extends('layouts.app');

@section('content')

@include('notas.todas.modal')

<div class="container-fluid">

<div class="row">
@if($notas)
@foreach ($notas as $nota)

<div class="col-4">
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header p-3"> <b>{{ $nota->titulo }}</b>  <div class="float-right">{{ $nota->created_at }}</div> </div>
        <div class="card-body">
            <p class="card-text">{{ $nota->texto }}</p>
        </div>
    </div>
</div>

@endforeach
@endif
</div>
</div>
@endsection
