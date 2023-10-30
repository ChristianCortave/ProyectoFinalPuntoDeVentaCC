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
                <h1 class="mt-4">Productos</h1>

                <div>
                    <p>
                        <a href="<?php echo base_url(); ?>/unidades/eliminados" class="btn btn-warning">Eliminados
                        </a>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#regionModal"> <i class="fa fa-plus"></i>
                            Agregar Producto
                        </button>
                </div>
                <!-- Modal -->
                <div class="modal" id="regionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="<?=base_url('guardar_productos')?>" method='post'>

                                    <div class="mb-3">
                                        <label for="txtcodigo" class="form-label">Código</label>
                                        <input type="number" class="form-control" id="txtcodigo" name="txtcodigo"
                                            placeholder="codigo" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="txtnombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="txtnombre" name="txtnombre"
                                            placeholder="nombre" required>
                                    </div>¨
                                    <div class="mb-3">
                                        <label for="txtventa" class="form-label">Precio de Venta</label>
                                        <input type="text" class="form-control" id="txtventa" name="txtventa"
                                            placeholder="venta" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="txtcompra" class="form-label">Precio de Compra</label>
                                        <input type="text" class="form-control" id="txtcompra" name="txtcompra"
                                            placeholder="compra" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="txtexistencias" class="form-label">Existencias</label>
                                        <input type="number" class="form-control" id="txtexistencias"
                                            name="txtexistencias" placeholder="existencias" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="txtstock" class="form-label">Stock mínimo</label>
                                        <input type="number" class="form-control" id="txtstock" name="txtstock"
                                            placeholder="stock" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="txtinventario" class="form-label">Inventariable</label>
                                        <input type="text" class="form-control" id="txtinventario" name="txtinventario"
                                            placeholder="inventario" required>
                                    </div>
                                    <div class="mb-3">
                                        <select name=" lst" class="form-control" id="lst">
                                            <?php foreach($resultadocategorias as $dato){ ?>
                                            <option value="<?php echo $dato['id']; ?>"><?php echo $dato['nombre']; ?>
                                            </option>

                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="txtunidad" class="form-label">Id Unidad</label>
                                        <input type="Number" class="form-control" id="txtunidad" name="txtunidad"
                                            placeholder="unidad" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="txtcategoria" class="form-label">Id Categoría</label>
                                        <input type="Number" class="form-control" id="txtcategoria" name="txtcategoria"
                                            placeholder="categoria" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="txxtactivo" class="form-label">activo</label>
                                        <input type="number" class="form-control" id="txxtactivo" name="txxtactivo"
                                            placeholder="activo" required>
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
            <div class="table-responsive">
                <div class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <i class="fas fa-table me-1"></i>
                    Base de datos
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio de Venta</th>
                                <th>Precio de Compra</th>
                                <th>Existencias</th>
                                <th>Stock Mínimo</th>
                                <th>Inventariable</th>
                                <th>Id de Unidad</th>
                                <th>Id de Categoría</th>
                                <th>activo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio de Venta</th>
                                <th>Precio de Compra</th>
                                <th>Existencias</th>
                                <th>Stock Mínimo</th>
                                <th>Inventariable</th>
                                <th>Id de Unidad</th>
                                <th>Id de Categoría</th>
                                <th>activo</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach($resultadoproductos as $dato){ ?>
                            <tr>
                                <td><?php echo $dato['id']; ?></td>
                                <td><?php echo $dato['codigo']; ?></td>
                                <td><?php echo $dato['nombre']; ?></td>
                                <td><?php echo $dato['precio_venta']; ?></td>
                                <td><?php echo $dato['precio_compra']; ?></td>
                                <td><?php echo $dato['existencias']; ?></td>
                                <td><?php echo $dato['stock_minimo']; ?></td>
                                <td><?php echo $dato['inventariable']; ?></td>
                                <td><?php echo $dato['id_unidad']; ?></td>
                                <td><?php echo $dato['id_categoria']; ?></td>
                                <td><?php echo $dato['activo']; ?></td>
                                <td>
                                    <!-- Button trigger modal --><button type="button" class="btn btn-danger"
                                        data-bs-toggle="modal" data-bs-target="#exampleModaldel"><i
                                            class="fa-solid fa-trash"></i></i></button>

                                    <a href="<?=base_url("localizar_modificar_productos/".$dato['id'])?>">
                                        <button class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button> </a>


                            </tr>

                            <?php
                                    }  
                                    ?>
                        </tbody>
                    </table>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModaldel" tabindex="-1" aria-labelledby="exampleModaldel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModaldel">Advertencia</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?=base_url("eliminar_productos/".$dato['id'])?>" method='get'>
                                        ¿Desea Realmente Elimiar el Registro?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin  -->
                </div>
            </div>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Proyectos de Programación <?php echo date ('Y');?>
                        </div>
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