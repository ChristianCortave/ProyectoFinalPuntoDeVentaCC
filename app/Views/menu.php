<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- barra de navegación-->
            <a class="navbar-brand ps-3" href="index.html">Inicio</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Perfil</a></li>
                        <li><a class="dropdown-item" href="#!">Cambiar contraseña</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    
                    <!-- Barra lateral Productos -->
                    <a class="nav-link" href="javascript:void(0);" onclick="toggleCollapse('collapseProductos')">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-basket-shopping" style="color: #f2d831;"></i></div>
                        Productos
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProductos" aria-labelledby="headingProductos" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('verproductos'); ?>">Productos</a>
                            <a class="nav-link" href="<?php echo base_url('verunidades'); ?>">Unidades</a>
                            <a class="nav-link" href="<?php echo base_url('vercategorias'); ?>">Categorías</a>
                        </nav>
                    </div>
                    
                    <!-- Barra lateral Clientes -->
                    <a class="nav-link" href="javascript:void(0);" onclick="toggleCollapse('collapseClientes')">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group" style="color: #fff824;"></i></div>
                        Clientes
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseClientes" aria-labelledby="headingClientes" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('verclientes'); ?>">Clientes</a>
                        </nav>
                    </div>

                    <!-- Barra lateral Compras -->
                    <a class="nav-link" href="javascript:void(0);" onclick="toggleCollapse('collapseCompras')">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-truck" style="color: #ffdf0f;"></i></div>
                        Compras
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseCompras" aria-labelledby="headingCompras" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Nueva compra</a>
                            <a class="nav-link" href="<?php echo base_url(); ?>/unidades">Compras</a>
                        </nav>
                    </div>

                    <!-- Barra lateral Configuración -->
                    <a class="nav-link" href="javascript:void(0);" onclick="toggleCollapse('collapseConfiguracion')">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group" style="color: #fff824;"></i></div>
                        Administración
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseConfiguracion" aria-labelledby="headingConfiguracion" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('verconfiguracion'); ?>">Configuración</a>
                        </nav>
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('verusuarios'); ?>">Usuarios</a>
                        </nav>
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('vercajas'); ?>">Cajas</a>
                        </nav>
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('verroles'); ?>">Roles</a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
 
<script>
function toggleCollapse(collapseId) {
    var collapse = document.getElementById(collapseId);
    if (collapse.classList.contains('show')) {
        collapse.classList.remove('show');
    } else {
        collapse.classList.add('show');
    }
}
</script>


                    <div class="sb-sidenav-footer">
                        <div class="small">Desarrollador:</div>
                        Christian Cortave
                    </div>
                </nav>
            </div>