<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>PAGINA PROYECTO</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
    </head>
    <body class="container">
        <h1>PAGINA PROYECTO</h1>
        <hr>
                <form action="index.php?controller=tarea&action=crea&&idUsuario=1" method="post">
                    <h3>Crear Tarea</h3>
                    <hr/>
                    Nombre: <input type="text" name="nombre" class="form-control"/>
                    Fecha de Vencimiento: <input type="date" name="FechaVencimiento" class="form-control"/>
                    Realizado: <select name="realizado" class="form-control">
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                               </select>
                    <input type="submit" value="Crear" class="btn btn-success"/>   
                </form>
        <footer>
            <hr/>
           Reto_3 - HERRAMIENTA COLABORATIVA - David Ramirez - <a href="#">dramirez.es</a> - Copyright &copy; <?php echo  date("Y"); ?>
        </footer>
    </body>
</html>