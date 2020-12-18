<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/icon.png" />
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="row" id="custome-nav">
            <div class="col-6" id="logo">
                <img src="img/logo.png" alt="centro-card">
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a class="fab fa-whatsapp icons align-middle" href="https://wa.me/50223821100"></a>
                <a class="fab fa-facebook icons align-middle" href="https://www.facebook.com/JRCentrocar"></a>
                <a class="fab fa-instagram icons align-middle" href="https://www.instagram.com/JRCentrocar/"></a>
            </div>
        </div>
    </nav>
    <div id="banner">
    </div>
    <section>
        <p class="text-center text1 mt-3">Llena el siguiente</p>
        <p class="text-center text2">formulario</p>
        <p class="text-center text3 mt-5">Usaremos tus datos para contactarte y ampliarte más información</p>
    </section>
    <section>
        <div class="form">
            <form action="email.php" method="post">
                <div class="form-group">
                    <label for="selectSucursal">Sucursal mas cercana</label>
                    <select class="form-control form-control1 mb-3 border border-dark shadow-none" id="selectSucursal" name="sucursal" required="">
                        <option>Seleccione</option>
                        <option>Sucursal Zona 5</option>
                        <option>Sucursal Zona 10</option>
                        <option>Sucursal Zona 15</option>
                    </select>
                    <input class="form-control mb-3 border border-dark shadow-none" type="text" placeholder="Nombre" name="nombre" required="">
                    <input class="form-control mb-3 border border-dark shadow-none" type="email" placeholder="Correo" name="correo" required="">
                    <input class="form-control mb-3 border border-dark shadow-none" type="number" placeholder="Teléfono" name="telefono" required="">
                    <input class="form-control mb-3 border border-dark shadow-none" type="text" placeholder="Medida de llanta" name="medidallanta" required="">
                    <input class="form-control mb-3 border border-dark shadow-none" type="text" placeholder="Vehiculo que posees" name="vehiculo" required="">
                    <div class="col text-center">
                        <button class="btn btn-custom" name="submit" id="enviar"> Enviar </button>
                    </div>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>