@extends('welcome')
@section('content')
        <div class="row">
            <div class="card col-6 p-5">
                <h3>Cadastro de Usuario</h3>
                <form method="POST" action='/registrar' class="text-left">
                    @csrf
                        <div class="row">
                        <div class="form-group col-12">
                            <label for="name">Nome</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group col-12">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Senha</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <div class="form-group col-12">
                            <label for="confsenha">Confirmar Senha</label>
                            <input class="form-control" type="password" name="confsenha">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    </form>
            </div>
        </div>
        @endsection
