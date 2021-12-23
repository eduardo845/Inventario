<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <!--<a class="navbar-brand" href="#">{{ $page ?? '' }}</a>-->
            <div id="pantalla-dividida">
       
                <div class="top-left">
                    <div class="img-logo">
                        <img src="{{ asset('assets') }}/img/logo-insaforp.png" alt="" class="img-log">
                    </div>
                    
                </div>
                
            
                <div class="top-right">
                    <div class="menu">
                                <ul class="menu">
                            <li><a href="http://localhost:8000/kardex">KARDEX</a></li>
                            <li><a href="#">Formularios</a>
                            <ul class="submenu">
                                            <li><a href="http://localhost:8000/nuevo">Registro de Datos</a></li>
                                            <li><a href="http://localhost:8000/solicitudPedido">Solicitud de Pedido</a></li>
                                            <li><a href="http://localhost:8000/entradaProductos">Entrada de Productos</a></li>
                                        </ul></li>
                            <li><a href="http://localhost:8000/reporte">Reporte</a></li>
                            <li><a href="#">Salidas</a>
                                <ul class="submenu">
                                <li><a href="http://localhost:8000/salidaUsg">Salidas USG</a></li>
                                    <li><a href="#">Salidas Generales</a>
                                    <ul class="submenu2">
                                            <li><a href="http://localhost:8000/descargas">Unidades Descargadas</a></li>
                                            <li><a href="http://localhost:8000/totalProducto">Total por Unidad</a></li>
                                        </ul></li>
                                    
                                </ul>
                            </li>
                            <li><a href="http://localhost:8000/compras">Compras</a></li>
                            <li><a href="http://localhost:8000/ajuste">Ajustes</a></li>
                            <li><a href="http://localhost:8000/inventario">Inventario</a></li>
                        </ul>
                    </div>
                    
                </div>

                <div class="salir1">
                    <button type="button" class="btn-salir">Salir</button>
                </div>

            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link text-primary">
                       
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('register') }}" class="nav-link">
                       
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('login') }}" class="nav-link">
                       
                    </a>
                     <!--<a href="{{ route('home') }}" class="nav-link text-primary">
                        <i class="tim-icons icon-minimal-left"></i> Home
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('register') }}" class="nav-link">
                        <i class="tim-icons icon-laptop"></i> Register
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="tim-icons icon-single-02"></i> Login
                    </a>-->
                </li>
            </ul>
        </div>
    </div>
</nav>
