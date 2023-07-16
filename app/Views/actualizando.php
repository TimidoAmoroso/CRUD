<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container"><br> <br>
        <div class="container-fluid">
            <h1>Actualizar</h1>
            <form action="<?= base_url('factualizar'); ?>" method="POST">
            
            <div class="form-group">
                <input type="number" hidden name="Id" value="<?= $persona['idpersona'] ?>">       
                
                <label for="exampleInputEmail1">Cedula</label>
                <input type="number" class="form-control" id="cedulapersona" name="Cedula" value="<?= $persona['cedulapersona'] ?>" required aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input type="text" class="form-control" id="apellidospersona" name="Apellidos" value="<?= $persona['apellidospersona'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombres</label>
                    <input type="text" class="form-control" id="nombrespersona" name="Nombres" value="<?= $persona['nombrespersona'] ?>" required aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="fechanacimientopersona" name="FechaNacimiento" value="<?= $persona['fechanacimientopersona'] ?>" aria-describedby="emailHelp">

                </div><br>

                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="text" class="form-control" id="correopersona" name="Correo" value="<?= $persona['correopersona'] ?>" aria-describedby="emailHelp">

                </div><br> 

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

</body>

</html>