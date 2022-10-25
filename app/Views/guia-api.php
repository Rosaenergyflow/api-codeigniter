<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guia api tienda</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <style>
        html,body{
            width:100vw;
        }
        .container{
            width:100%;
        }
        h1{
            text-align:center;
            font-family: Roboto;
            border-bottom:1px solid #ccc;
            margin-left: 2rem;
            margin-right: 2rem;
            margin-bottom: 1rem;
        }
        ul {
            list-style: none;
        }
        .ruta h3{
            color: #F2668B;
        }
        .ruta{
            margin-left: 5rem;
            width:100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Guia de la api:</h1>
        <ul>
            <li>
                <div class="ruta">
                    <h3>Datos de todo el almacen:</h3>
                    <div>
                        /almacen
                    </div>
                </div>
                <div class="ruta">
                    <h3>Datos de 1 producto del almacen:</h3>
                    <div>
                        /almacen/{id}
                    </div>
                </div>
                <div class="ruta">
                    <h3>Crear o introducir 1 producto del almacen:</h3>
                    <div>
                        /almacen/create
                    </div>
                </div>
            </li>
        </ul>
    </div>

</body>

</html>
