@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Chamados</h2>
    </div>
    <div class="row" style="display: block">
        @forelse($chamados as $key => $value)
            <p>{{ $value->titulo }}</p>
        @empty
            <p>Não existe chamados!</p>
        @endforelse
    </div>
</div>
@endsection


