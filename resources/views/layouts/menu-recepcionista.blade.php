@extends('layouts.main')

@section('menu')
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand-xs navbar-light bg-body-tertiary border-bottom">
    <div class="container-fluid">
        <button class="navbar-toggler me-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive">
            <ion-icon name="menu-outline"></ion-icon>
        </button>
        <div class="circle-logo-painel bg-primary ms-2">
            <ion-icon name="fitness-outline" class="pt-1 text-white"></ion-icon>
        </div>
        <div class="d-flex align-items-center ms-auto d-xxl-none d-xl-none d-lg-none d-md-none d-sm-none">
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-primary" href="#" role="button" id="navbarDropdownMenuAvatar" data-bs-toggle="dropdown">
                    <ion-icon name="person-circle-outline" class="icon-usuario"></ion-icon>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li><button class="dropdown-item btnEditarAcesso">Editar Acesso</button></li>
                    <li><a class="dropdown-item" href="{{ route('meu-perfil') }}">Meu Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Sair</a></li>
                </ul>
            </div>
        </div>
        <div class="collapse navbar-collapse justify-content-center d-lg-block" id="navbarResponsive">
            <ul class="navbar-nav mx-auto d-flex align-items-center pe-3">
                <li class="nav-item {{ Request::is('painel-recepcionista') ? 'active' : '' }}">
                    <a class="nav-link" href="/painel-recepcionista">Home</a>
                </li>
                <li class="nav-item {{ Request::is('painel-recepcionista/gestao-paciente') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('gestao-paciente') }}">Pacientes</a>
                </li>
                <li class="nav-item dropdown {{ Request::is('painel-recepcionista/consultas*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownConsultas" role="button" data-bs-toggle="dropdown">Consultas </a>
                    <ul class="dropdown-menu dropdown-menu-sm-only text-center text-sm-start text-md-start text-lg-start" aria-labelledby="navbarDropdownConsultas">
                        <li><a class="dropdown-item" href="/painel-recepcionista/consultas-agendar">Agendar</a></li>
                        <li><a class="dropdown-item" href="/painel-recepcionista/consultas-gerenciar">Gerenciar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-none d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-flex d-flex align-items-center me-2">
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-primary" href="#" role="button" id="navbarDropdownMenuAvatar" data-bs-toggle="dropdown">
                    <ion-icon name="person-circle-outline" class="icon-usuario"></ion-icon>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li><button class="dropdown-item btnEditarAcesso">Editar Acesso</button></li>
                    <li><a class="dropdown-item" href="{{ route('meu-perfil') }}">Meu Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
    @include('components.modals.usuario.modal-editar-acesso')
</nav>
@endsection

@push('scripts')
<script src="/js/scripts.js"></script>
<script src="/js/hjsCalendar.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<link rel="stylesheet" href="/css/hjsCalendar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
@endpush