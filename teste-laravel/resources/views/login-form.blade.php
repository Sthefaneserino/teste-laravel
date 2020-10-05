@extends('welcome')
@section('content')
        <div class="row">
            <div class="card col-6 p-5">
                <h3>Login</h3>
                <form method="POST" action='/logar' class="text-left">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                        <div class="form-group col-12">
                            <label for="password">Senha</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-success">Login</button>
                            <a type="button" href="/cadastro" class="btn btn-outline-primary">Cadastrar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endsection
