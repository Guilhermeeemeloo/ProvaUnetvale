@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Prova Unetvale</object></h1>
    <p class="lead">Este é um exemplo de como utilizar Bootstrap em um projeto Laravel.</p>
    <hr class="my-4">
    <p>Como podemos ajudar?</p>
    
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <a class="btn btn-primary btn-lg" href="#" role="button">Suporte</a>
          </div>
          <div class="col">
            <a class="btn btn-primary btn-lg" href="#" role="button">Metas</a>
          </div>
          <div class="col">
            <button type="button" class="btn btn-primary btn-lg">Área Do Cliente</button>
          </div>
        </div>
      </div>
</div>
@endsection
