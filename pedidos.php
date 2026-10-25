<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Pedidos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body>

        <!--Barra de navegación-->
        <nav class="navbar navbar-expand-lg py-2 bg-danger">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-light">Bella Napoli</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#seccion-navbar" aria-controls="seccion-navbar"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse px-3 fw-bold fs-5" id="seccion-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link px-3 mx-2 badge rounded-pill bg-success" href="./index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link px-3 mx-2 badge rounded-pill bg-success" href="./catalogo.php">Menu</a></li>
                        <li class="nav-item"><a class="nav-link px-3 mx-2 badge rounded-pill bg-success" href="./arma_pizza.php">Arma tu pizza</a></li>
                        <li class="nav-item"><a class="nav-link px-3 mx-2 badge rounded-pill bg-success" href="./pedidos.php">Pedidos</a></li>
                        <li class="nav-item"><a class="nav-link px-3 mx-2 badge rounded-pill bg-success" href="./contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section class="py-3">
                <div class="container p-2 border shadow-lg rounded-2">
                    <div>
                        <h2>Ingresa tus datos para completar tu compra</h2>
                    </div>

                    <form action="#" method="post" enctype="multipart/form-data">
                        <!--Nombre y apellido-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-nombre" class="form-label">Nombre y apellido</label>
                                <input type="text" class="form-control" name="inputNombre" id="input-nombre" minlength="5" placeholder="Nombre y apellido" required>
                            </div>
                        </div>
                        <!--RTN-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-rtn" class="form-label">RTN</label>
                                <input type="text" class="form-control" name="inputRTN" id="input-rtn" minlength="14" maxlength="14" placeholder="0801XXXXXXXXXX">
                            </div>
                        </div>
                        <!--Telefono-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-tel" class="form-label">Número telefonico</label>
                                <input type="text" class="form-control" name="inputTel" id="input-tel" minlength="8" maxlength="8" placeholder="996699XX" required>
                            </div>
                        </div>
                        <!--Correo electronico-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="inputEmail" id="input-email" placeholder="correo@electronico.com">
                            </div>
                        </div>
                        <!--Dirección-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-dir" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="inputDir" id="input-dir" placeholder="colonia x, sector x, calle x" required>
                            </div>
                        </div>
                        <!--Modalidad de entrega-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-entrega" class="form-label">Modalidad de entrega</label>
                                <select class="form-select" name="inputEntrega" id="input-entrega" required>
                                    <option>Para comer en restaurante</option>
                                    <option>Para llevar</option>
                                    <option>Envio a domicilio</option>
                                </select>
                            </div>
                        </div>
                        <!--Método de pago-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-pago" class="form-label">Método de pago</label>
                                <select class="form-select" name="inputPago" id="input-pago" required>
                                    <option>Efectivo</option>
                                    <option>Tarjeta de credito/debito</option>
                                    <option>Transferencia ACH</option>
                                </select>
                            </div>
                        </div>
                        <!--Boton de compra-->
                        <div class="py-2 d-flex justify-content-center">
                            <button type="button" class="btn btn-success"><i class="bi bi-piggy-bank-fill"></i>Realizar compra</button>
                        </div>

                    </form>
                </div>
            </section>
        </main>

        <!--Footer-->
        <footer class="py-5 mt-auto border-top text-light bg-danger">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-md-4">
                        <h4>Horarios de atención</h4>
                        <ul>
                            <li><a>Lunes a Viernes: 7am a 8pm</a></li>
                            <li><a>Sabados y Domingo: 9am a 9pm</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4>Nuestras redes sociales</h4>
                        <ul>
                            <li><i class="bi bi-instagram"></i><a class="text-light mx-2" href="#">Instagram</a></li>
                            <li><i class="bi bi-facebook"></i><a class="text-light mx-2" href="#">Facebook</a></li>
                            <li><i class="bi bi-youtube"></i><a class="text-light mx-2" href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <p>Copyright © 2026 Pizzeria Bella Napoli. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>