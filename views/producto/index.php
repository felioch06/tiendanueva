<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/all/css/style.css">
    <title>Index Principal</title>
</head>
<body>
    <nav class="nav-color">
        <ul>
            <li><a href="?class=Index&view=index">INICIO</a></li>
            <li><a href="?class=Fabricantes&view=index">FABRICANTES</a></li>
            <li><a href="?class=Categorias&view=index">CATEGORIAS</a></li>
            <li><a href="?class=Productos&view=index">PRODUCTOS</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>FABRICANTE</th>
                        <th>CATEGORIA</th>
                        <th>NOMBRE PRODUCTO</th>
                        <th>FECHA DE VENCIMIENTO</th>
                        <th>C-R-U-D</th>
                    </tr>

                    <?php foreach(parent::consulta() as $r): ?>
                    <tr>
                        <td><?php echo $r->id_producto ?></td>
                        <td><?php echo $r->nombre_fabricante?></td>   
                        <td><?php echo $r->nombre_categoria ?></td>
                        <td><?php echo $r->nombre_producto ?></td>
                        <td><?php echo $r->fecha_vencimiento ?></td>
                        <td>
                            <a class="btn btn-danger" href="">Eliminar</a>
                            <a class="btn btn-success" href="">Editar</a>
                            <a class="btn btn-info" href="">Detalles</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>