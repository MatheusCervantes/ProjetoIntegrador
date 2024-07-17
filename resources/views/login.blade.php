@extends('layouts.main')

@section('title', 'Acesso')

@section('content')
<div class="container my-3">
    <div class="row g-5 d-flex mt-xxl-5 mt-xl-5 mt-lg-5 pt-4 align-items-center justify-content-evenly">
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-xs-12 login-texto">
            <h1 class="my-4 display-2 fw-bold ls-tight">Transformando gestão em <span class="text-primary">cuidado</span></h1>
            <p class="fs-5">Descubra a liberdade de cuidar com paixão e precisão. Deixe a tecnologia cuidar do resto.</p>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-7 col-sm-9 col-xs-12 col-9 mb-5 mb-lg-0 mx-md-0">
            <div class="card shadow rounded-4 position-relative">
                <div class="circle-logo-login bg-primary d-flex align-items-center justify-content-center">
                    <ion-icon name="fitness-outline" class="pt-1 text-white"></ion-icon>
                </div>
                <div class="card-body py-5">
                    <h3 class="text-center fw-medium mb-4">Acesse sua conta</h3>
                    <div class="d-flex justify-content-center">
                        <form>
                            <div class="input-group mb-3" width="3vw">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <ion-icon name="person-outline" class="icon-nome-usuario"></ion-icon>
                                    </span>
                                </div>
                                <input type="text" name="nome-usuario" class="form-control" placeholder="Digite o nome de usuário">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <ion-icon name="lock-closed-outline" class="icon-senha"></ion-icon>
                                    </span>
                                </div>
                                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-3">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection