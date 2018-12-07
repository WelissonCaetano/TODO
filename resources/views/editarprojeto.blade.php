@extends('layout.app',["current" => "produtos" ])

@section('body')
    <div class="card border">
        <div class="card-body">
        <form action="/projetos/{{$projeto->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProjeto">Nome do Projeto</label>
                    <input type="text" class="form-control" name="nomeProjeto" value="{{$projeto->nome}}" id="nomeProjeto"
                    placeholder="Projeto">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection