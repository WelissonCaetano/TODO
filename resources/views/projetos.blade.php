@extends('layout.app', ["current"=>"produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de projetos</h5>
            @if (count($projs) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projs as $proj)
                    <tr>
                    <td>{{$proj->id}}</td>
                    <td>{{$proj->nome}}</td>
                    <td>
                        <a href="/projetos/editar/{{$proj->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/projetos/apagar/{{$proj->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/projetos/novo" class="btn btn-sm btn-primary" role="button">Novo Projeto</a>
        </div>
    </div>
@endsection