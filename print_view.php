<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar PDFs con PHP</title>
    <style type="text/css">
        h2{
            color: blue;
        }

        #cajas{
            width: 100%;
        }

        .caja{
            width: 100%;
            height: 150px;
            border: 1px solid black;
            background: #ccc;
            margin-bottom: 5px;
        }

        .roja{
            background: red;
        }
        .azul{
            background: blue;
        }
        .amarilla{
            background: yellow;
        }
        .rosa{
            background: pink;
        }

        #cabecera h1{
            float:left;
        }

        #cabecera img{
            float: right;
        }
    </style>
</head>
<body>
    <?php if(isset($_POST['titulo'])): ?>
        <div id="cabecera">
            <img src="https://html2pdf.fr/img/_langue/es/logo.gif">
            <h1><?=$_POST['titulo']?></h1> 
        </div>
    <?php endif; ?>
    <h2>Más información</h2>

    <div id="cajas">
        <div class="caja roja"></div>
        <div class="caja azul"></div>
        <div class="caja amarilla"></div>
        <div class="caja rosa"></div>
    </div>

    <table border="1">
        <tr>
            <td>Curso de Symfony3</td>
            <td>Desaroollar una red social con PHP y Symfony3</td>
        </tr>
        <tr>
            <td>Curso de Angular 4 - Desde cero hasta profesional</td>
            <td>Desarrollo web con Javascript, Angular, NodeJS y MongoDV</td>
        </tr>
    </table>
</body>
</html>