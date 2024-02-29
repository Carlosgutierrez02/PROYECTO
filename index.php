<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./image/caho_logo.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/login.js"></script>
    <title>Inventory Software</title>
</head>

<body class="body">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 d-md-block d-none">
                <img class="img2" src="./image/logo sin letras vacio.png" alt="">
            </div>
            <div class="col-12 col-md-6 caja_login">
                <div class="caja">
                    <form class="form" id="loginForm">
                        <div class="text-center">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #114578;"></i>

                            <span class="aho">A.H.OCAMP</span>

                        </div>
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"></h5>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="username" required
                                placeholder="name@example.com" style="background-color: rgba(231, 231, 231, 0.952);
                                border-radius: 15px;
                                border: none;">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" required
                                placeholder="Password" style="background-color: rgba(231, 231, 231, 0.952);
                                border-radius: 15px;
                                border: none;">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="text-center">
                            <button id="loginButton" class="btn btn-primary" type="submit">LOGIN</button>

                        </div>
                        <p data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="text-center"
                            style="color: white; cursor: pointer; margin-top: 5px;">REGISTRO</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <audio id="loginSound" preload="auto" style="display: none;">
        <source src="error1.mp3" type="audio/mpeg">
    </audio>
    <script>
        document.getElementById("loginButton").addEventListener("click", function () {
            // Obtén el elemento de audio por su ID
            var sound = document.getElementById("loginSound");
            // Reinicia la reproducción del sonido al principio para que se pueda reproducir nuevamente
            sound.currentTime = 0;
            // Reproduce el sonido
            sound.play();
        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">REGISTRO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: left;">
                    <form id="creación">
                        <div class="mb-3">
                            <label for="nombre" class="form-label" style="color:black;">Ingrese su nombre</label>
                            <input type="text" name="Nombre" class="form-control" id="nombre"
                                placeholder="Nombre completo">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color:black;">Ingrese su primer
                                apellido</label>
                            <input type="text" name="apellido" class="form-control" id="apellido"
                                placeholder="Primer apellido">
                        </div>
                        <div class="mb-3">
                            <label for="documento" class="form-label" style="color:black;">Digite su documento de
                                identidad</label>
                            <input type="number" name="Documento" class="form-control" id="documento"
                                placeholder="Documento">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color:black;">Ingrese su correo
                                electrónico</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Correo electrónico">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label" style="color:black;">Cree una contraseña segura</label>
                            <input type="password" name="crea una contraseña" class="form-control" id="pass"
                                placeholder="Crea una contraseña">
                        </div>
                        <div class="mb-3">
                            <label for="rol" class="form-label" style="color:black;">Asigna un rol</label>
                            <select name="rol" id="rol" class="form-select">
                                <option value="1">admin</option>
                                <option value="2">teacher</option>
                                <option value="3">director</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label" style="color:black;">Define un status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="activo">activo</option>
                                <option value="inactivo">inactivo</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p type="" class="text-center" data-bs-dismiss="modal"
                        style="color: black; cursor: pointer; margin-top: 14px;">Cerrar</p>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>