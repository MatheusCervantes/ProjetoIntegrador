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
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-primary me-3" href="#" role="button" id="navbarDropdownMenuNotific" data-bs-toggle="dropdown">
                    <ion-icon name="notifications-outline" class="icon-notific"></ion-icon>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuNotific">
                    <li><a class="dropdown-item" href="#">Alguma coisa</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-primary" href="#" role="button" id="navbarDropdownMenuAvatar" data-bs-toggle="dropdown">
                    <ion-icon name="person-circle-outline" class="icon-usuario"></ion-icon>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li><a class="dropdown-item" href="#">Meu Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Sair</a></li>
                </ul>
            </div>
        </div>
        <div class="collapse navbar-collapse justify-content-center d-lg-block" id="navbarResponsive">
            <ul class="navbar-nav mx-auto d-flex align-items-center">
                <li class="nav-item {{ Request::is('painel-medico') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('painel-medico') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::is('painel-medico/agenda') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('agenda') }}">Agenda</a>
                </li>
                <li class="nav-item {{ Request::is('painel-medico/pacientes') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('pacientes') }}">Pacientes</a>
                </li>
                <li class="nav-item {{ Request::is('painel-medico/consultas') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('consultas') }}">Consultas</a>
                </li>
            </ul>
        </div>
        <div class="d-none d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-flex d-flex align-items-center me-2">
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-primary" href="#" role="button" id="navbarDropdownMenuAvatar" data-bs-toggle="dropdown">
                    <ion-icon name="person-circle-outline" class="icon-usuario"></ion-icon>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li><a class="dropdown-item" href="{{ route('meu-perfil') }}">Meu Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<script src="/js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.11/index.global.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
@endsection