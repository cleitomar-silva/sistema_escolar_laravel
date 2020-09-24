@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Chamado</h2>
    </div>
    <div class="row" style="display: block">
       Título: {{ $chamado->titulo }}
    </div>
</div>
@endsection


