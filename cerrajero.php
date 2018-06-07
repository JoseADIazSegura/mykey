<?php
/**
* Llamado al header.php
*/
require('header.php')

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>

<body>
    <!-- Container principal del cuerpo de la pagina -->
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <!-- Mensaje de bienvenida al usuario de tipo cerrajero -->
                        <h3 class="panel-title">Bienvenido seleccione su estado</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="cerrajero.php" id="estado">

                            <!-- diferentes estados del cerrajero -->
                            <div class="form-group">
                                <select name="tipoDoc" class="form-control input-sm">
                                    <option>Libre</option>
                                    <option>En servicio</option>
                                    <option>Apagado</option>
                                </select>
                                <br>
                                <button type="submit" class="btn btn-info btn-block">Cambiar estado</button>
                            </div>
                            <input type="hidden" name="token" id="token" value="estado" />

                        </form>
                        <div id="msg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
