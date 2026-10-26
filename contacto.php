<?php 
    session_start();
    if (!isset($_SESSION['iniciado']));

    $limpieza = htmlspecialchars(trim($_POST['limpieza'] ?? ''), ENT_QUOTES, 'UTF-8');
    if(!(empty($limpieza))){
        unset($_SESSION['pedidos']);
    }

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Contacto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" type="text/css" href="./css/estilos_pizzeria.css">
    </head>

    <body>

        <!--Barra de navegación-->
        <nav class="navbar navbar-expand-lg py-2 seccion-borde">
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
            <!--Sección de contacto-->
            <section class="py-3">
                <div class="container">
                    <h2>Encuentranos en</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div>
                                <div>
                                    <h4>Tegucigalpa</h4>
                                    <ul>
                                        <li>Blv. Morazán, teléfono: 99XX-XXXX</li>
                                        <li>City Mall, teléfono: 88XX-XXXX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div>
                                <h4>San Pedro Sula</h4>
                                <div>
                                    <ul>
                                        <li>Blv Circunvalación, teléfono: 99XX-XXXX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div>
                                <h4>Comayagua</h4>
                                <div>
                                    <ul>
                                        <li>Plaza Central, teléfono: 99XX-XXXX</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Sección tabla de pedidos-->
            <section class="py-2">
                <div class="container">
                    <h2>Listado de pedidos del cliente</h2>

                    <div class="table-responsive">
                        <table class="table table-striped-columns border">
                        <thead class="table-warning">
                            <tr>
                            <th scope="col">Núm. de pedido</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Detalles del pedido</th>
                            <th scope="col">Total a pagar</th>
                            <th scope="col">Estado del pedido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!(empty($_SESSION['pedidos']))): ?>
                            <?php foreach($_SESSION['pedidos'] as $orden): ?>
                            <tr>
                                <td><?= $orden["codigo"] ?></td>
                                <td><?= $orden["usuario"] ?></td>
                                <td><?= $orden["telefono"] ?></td>
                                <td><?= $orden["cantidad"] ?>X<?= $orden["producto"] ?></td>
                                <td><?= number_format($orden["totalPagar"],2) ?></td>
                                <td><span class="badge rounde-pill bg-success py-1">Confirmado</span></td>
                            <tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                        </table>
                    </div>

                    <?php if(empty($_SESSION['pedidos'])): ?>
                    <div class="d-flex justify-content-center fs-5 py-2">
                        <span class="badge rounded-pill bg-danger">No hay pedidos recientes</span>
                    </div>
                    <?php endif; ?>
                    <!--Boton de limpieza-->
                    <div class="py-2 d-flex justify-content-center">
                        <form action="contacto.php" method="POST">
                            <input type="hidden" name="limpiar">
                            <button type="submit" value="1" name="limpieza" class="btn btn-danger"><i class="bi bi-trash"></i>Eliminar pedidos</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <!--Footer-->
        <footer class="py-5 mt-auto border-top text-light seccion-borde">
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
                            <li><i class="bi bi-instagram"></i><a class="text-light mx-2" href="#">Bellanapolihn.ig</a></li>
                            <li><i class="bi bi-facebook"></i><a class="text-light mx-2" href="#">Bellanapolihn.fb</a></li>
                            <li><i class="bi bi-youtube"></i><a class="text-light mx-2" href="#">Bellanapolihn.yt</a></li>
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