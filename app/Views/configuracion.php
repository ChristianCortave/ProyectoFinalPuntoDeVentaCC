<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Punto de Venta C.C.</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- barra de navegación-->
        <a class="navbar-brand ps-3" href="index.html">Inicio</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Perfil</a></li>
                    <li><a class="dropdown-item" href="#!">Cambiar contraseña</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
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
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-basket-shopping"
                                    style="color: #f2d831;"></i></div>
                            Productos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseProductos" aria-labelledby="headingProductos"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url('verproductos'); ?>">Productos</a>
                                <a class="nav-link" href="<?php echo base_url('verunidades'); ?>">Unidades</a>
                                <a class="nav-link" href="<?php echo base_url('vercategorias'); ?>">Categorías</a>
                            </nav>
                        </div>

                        <!-- Barra lateral Clientes -->
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleCollapse('collapseClientes')">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"
                                    style="color: #fff824;"></i></div>
                            Clientes
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseClientes" aria-labelledby="headingClientes"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url('verclientes'); ?>">Clientes</a>
                            </nav>
                        </div>

                        <!-- Barra lateral Compras -->
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleCollapse('collapseCompras')">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-truck" style="color: #ffdf0f;"></i>
                            </div>
                            Compras
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseCompras" aria-labelledby="headingCompras"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Nueva compra</a>
                                <a class="nav-link" href="<?php echo base_url(); ?>/unidades">Compras</a>
                            </nav>
                        </div>

                        <!-- Barra lateral Configuración -->
                        <a class="nav-link" href="javascript:void(0);"
                            onclick="toggleCollapse('collapseConfiguracion')">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"
                                    style="color: #fff824;"></i></div>
                            Administración
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseConfiguracion" aria-labelledby="headingConfiguracion"
                            data-bs-parent="#sidenavAccordion">
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
                        
                        <div class="sb-sidenav-footer">
                            <div class="small">Desarrollador:</div>
                            Christian Cortave
                        </div>
            </nav>
        </div>
    </div>
    </div>

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



    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Unidades</h1>

                <div>
                    <p>
                        <a href="<?php echo base_url(); ?>/unidades/eliminados" class="btn btn-warning">Eliminados
                        </a>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#regionModal"> <i class="fa fa-plus"></i>
                            Agregar Unidad
                        </button>
                </div>
                <!-- Modal -->
                <div class="modal" id="regionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Unidad</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="<?=base_url('guardar_unidades')?>" method='post'>


                                    <div class="mb-3">
                                        <label for="txtnombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="txtnombre" name="txtnombre"
                                            placeholder="nombre" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="txtnombre_corto" class="form-label">Nombre corto</label>
                                        <input type="text" class="form-control" id="txtnombre_corto"
                                            name="txtnombre_corto" placeholder="nombre corto" required>
                                    </div>


                                    <div class="mb-3">
                                        <label for="txxtactivo" class="form-label">activo</label>
                                        <input type="number" class="form-control" id="txxtactivo" name="txxtactivo"
                                            placeholder="activo" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="txtfecha_alta" class="form-label">Fecha de
                                            alta</label>
                                        <input type="date" class="form-control" id="txtfecha_alta" name="txtfecha_alta"
                                            placeholder="fecha alta" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="txtfecha_edit" class="form-label">Correo
                                            edit</label>
                                        <input type="date" class="form-control" id="txtfecha_edit" name="txtfecha_edit"
                                            placeholder="fecha edit" required>
                                    </div>
                                    <input type="submit" class="form-control btn btn-success" id="btn_guardar"
                                        name='btn_guardar' value='Guardar'>

                            </div>




                            </form>
                            </p>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cerrar
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <!--  fin -->
            
            <!-- las cajas de texto  -->
            <h2>Información de la Tienda</h2>
    <form action="procesar_tienda.php" method="POST">
        <div style="display: flex; justify-content: space-between; width: 80%; margin: 0 auto;">
            <!-- Columna izquierda -->
            <div style="width: 45%;">
                <b><label for="nombre_tienda">Nombre de la tienda:</label></b><br>
                <input type="text" id="nombre_tienda" name="nombre_tienda" value="<?=$data['valor'] ?>"><br><br>

                <b><label for="telefono_tienda">Teléfono de la tienda:</label></b><br>
                <input type="text" id="telefono_tienda" name="telefono_tienda" value="<?=$data['telefono'] ?>" ><br><br>

                <b><label for="direccion_tienda">Dirección de la tienda:</label></b><br>
                <input type="text" id="direccion_tienda" name="direccion_tienda" value="<?=$data['direccion'] ?>"><br>
            </div>

            <!-- Columna derecha -->
            <div style="width: 45%;">
                <b><label for="codigo_tienda">Código de tienda:</label></b><br>
                <input type="text" id="codigo_tienda" name="codigo_tienda" value="<?=$data['valor'] ?>"><br><br>

                <b><label for="correo_tienda">Correo electrónico de la tienda:</label></b><br>
                <input type="text" id="correo_tienda" name="correo_tienda" value="<?=$data['email'] ?>"><br><br>

                <b><label for="leyenda_tienda">Leyenda de la tienda:</label></b><br>
                <input type="text" id="leyenda_tienda" name="leyenda_tienda" value="<?=$data['leyenda'] ?>"><br>
            </div>
        </div>

        <br>
        <input type="submit" value="Guardar">
    </form>
    </div>
    </div>
    </div>
    </main>
    </div>
    </div>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Proyectos de Programación <?php echo date ('Y');?> </div>
                <div>
                    <a href="#">Elaborado por: Christian Orlando Cortave Garcia</a>
                    &middot;
                    <a href="#">Carnet &amp; 201403445</a>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>



</body>




</html>