@extends('layout.app' , ["current"=>"home"])
@section('body')
    <div class="jumbotron bg-ligth border border-secundary">
        <div class="row">
            <div class="card-desk">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">TODOlist de Projetos</h5>
                        <p class="card-text">Aqui você inclui todos seus Projetos</p>
                    </div>
                    <a href="/projetos" class="btn btn-primary">Cadastre seus Projetos</a>
                </div>
            </div>
        </div>
    </div>
@endsection 