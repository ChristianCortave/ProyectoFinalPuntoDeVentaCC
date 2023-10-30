<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modificar Categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- nuevos-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
    <!--fin-->
</head>

<body>
    <div class="container">
        <div class="row">
           <center><h1>Modificar Categorias</h1></center> 
            <div class="col-md-8 border border-danger">
            <center>
                <form action="<?=base_url('modificar_categorias')?>" method='post'>
                    <div class="mb-3">
                        <label for="txt_id" class="form-label">
                            <h3>Unidad id</h3>
                        </label>
                        <input type="number" class="form-control" id="txt_id" name="txt_id" placeholder="id" value="<?=$data['id'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtnombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="txtnombre" name="txtnombre" placeholder="nombre"
                            value="<?=$data['nombre'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txxtactivo" class="form-label">
                            <h3>Activo</h3>
                        </label>
                        <input type="number" class="form-control" id="txxtactivo" name="txxtactivo" placeholder="activo" value="<?=$data['activo'] ?>">
                    </div>


                    <div class="mb-3">
                        <label for="txtfecha_alta" class="form-label">Fecha de alta</label>
                        <input type="date" class="form-control" id="txtfecha_alta" name="txtfecha_alta"
                            placeholder="fecha alta" value="<?=$data['fecha_alta'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="txtfecha_edit" class="form-label">Fecha edit</label>
                        <input type="date" class="form-control" id="txtfecha_edit" name="txtfecha_edit"
                            placeholder="fecha edit" value="<?=$data['fecha_edit'] ?>">
                    </div>
                    
                    <div class="mb-3">

                        <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name='btn_guardar'
                            value='guardar'>
                    </div>


                </form>
                </center>

            </div>



        </div>



    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>