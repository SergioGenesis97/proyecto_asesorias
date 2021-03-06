<!--
=========================================================
* Paper Dashboard 2 PRO - v2.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2-pro
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./../../../img//apple-icon.png">
    <link rel="icon" type="image/png" href="./../../../img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="./../../../css/estilos.css">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="./../../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="./../../../css/paper-dashboard.css?v=2.1.1" rel="stylesheet" />

</head>

<body class="">

    <div class="wrapper ">
        <div class="sidebar" data-color="black" data-active-color="info">
        <!--
            Tip 1: You can change the color of the sidebar using: 
            data-color=" default | primary | info | success | warning | danger |"
        -->
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="./../../../img/Escudo U de G.png">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="#" class="simple-text logo-normal">
                    CUValles
                    <!-- <div class="logo-image-big">
                        <img src="../assets/img/logo-big.png">
                    </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="./../../../img/Escudo U de G.png" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                U. de G.
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="http://www.web.valles.udg.mx/">
                                        <span class="sidebar-mini-icon">Of.</span>
                                        <span class="sidebar-normal">Oficial CUValles</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.udg.mx/es/centros-universitarios/cuvalles">
                                        <span class="sidebar-mini-icon">Of.</span>
                                        <span class="sidebar-normal">U. de G. CUValles</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Nav-Menu -->
                <ul class="nav">
                    <li>
                        <a href="./../../">
                            <i class="nc-icon nc-bank text-warning"></i>
                            <p class="text-white">Home</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#alumnos">
                            <i class="nc-icon nc-book-bookmark text-warning"></i>
                            <p class="text-white">
                                Alumnos <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="alumnos">
                            <ul class="nav">
                                <li>
                                    <a href="./../alumnos/show">
                                        <span class="sidebar-mini-icon nc-icon nc-single-02"></span>
                                        <span class="sidebar-normal"> Mostrar Alumnos </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./../alumnos/create">
                                        <span class="sidebar-mini-icon nc-icon nc-simple-add"></span>   
                                        <span class="sidebar-normal"> Agregar Alumnos </span>
                                    </a>
                                </li>
                            </ul><!-- ./nav -->
                        </div><!-- ./collapse -->
                    </li><!-- ./active -->
                    <li>
                        <a data-toggle="collapse" href="#asesorias">
                            <i class="nc-icon nc-vector text-warning"></i>
                            <p class="text-white">
                                Asesorias <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="asesorias">
                            <ul class="nav">
                                <li>
                                    <a href="./../asesorias/show">
                                        <span class="sidebar-mini-icon nc-icon nc-layout-11"></span>
                                        <span class="sidebar-normal"> Mostrar Asesorias </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./../asesorias/create">
                                        <span class="sidebar-mini-icon nc-icon nc-simple-add"></span>
                                        <span class="sidebar-normal"> Agregar Asesorias </span>
                                    </a>
                                </li>
                            </ul><!-- ./nav -->
                        </div><!-- ./collapse -->
                    </li><!-- ./active -->
                    <li>
                        <a data-toggle="collapse" href="#prof">
                            <i class="nc-icon nc-ruler-pencil text-warning"></i>
                            <p class="text-white">
                                Profesores <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="prof">
                            <ul class="nav">
                                <li>
                                    <a href="./../profesores/show">
                                        <span class="sidebar-mini-icon nc-icon nc-single-02"></span>
                                        <span class="sidebar-normal"> Mostrar Profesores </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./../profesores/create">
                                        <span class="sidebar-mini-icon nc-icon nc-simple-add"></span>
                                        <span class="sidebar-normal"> Agregar Profesores </span>
                                    </a>
                                </li>
                            </ul><!-- ./nav -->
                        </div><!-- ./collapse -->
                    </li><!-- ./active -->
                    <li>
                        <a href="./../horario/show">
                            <i class="nc-icon nc-calendar-60 text-warning"></i>
                            <p class="text-white">horario</p>
                        </a>
                    </li>
                    <li>
                        <a href="./../materias/show">
                            <i class="nc-icon nc-single-copy-04 text-warning"></i>
                            <p class="text-white">Mostrar Materias</p>
                        </a>
                    </li>
                </ul><!-- ./Nav-Menu -->
            </div>
        </div>

        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top bg-dark">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-icon btn-round">
                                <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
                                <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
                            </button>
                        </div>
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand text-warning" href="javascript:;">Control de asesorias del CUValles</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control text-white" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split text-warning"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-rotate" href="javascript:;">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            @yield('content')

