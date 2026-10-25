<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Arma tu pizza</title>
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
            <!--Sección personalización de pizza-->
            <section class="py-3">
                <div class="container p-2 border shadow-lg rounded-2">
                    <div>
                        <h2>Arma tu pizza a tu gusto</h2>
                    </div>

                    <form action="#" method="post" enctype="multipart/form-data">
                        <!--Tipo de masa-->
                        <div class="p-2">
                            <h4>Tipo de masa</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipoMasa" id="masa-trad" checked>
                                <label class="form-check-label" for="masa-trad">Tradicional italiana</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipoMasa" id="masa-delgada">
                                <label class="form-check-label" for="masa-delgada">Delgada</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipoMasa" id="masa-crocante">
                                <label class="form-check-label" for="masa-crocante">Crocante</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipoMasa" id="masa-queso">
                                <label class="form-check-label" for="masa-queso">Rellena de queso</label>
                            </div>
                        </div>
                        <!--Tipo de salsa-->
                        <div class="p-2 w-50">
                            <h4>Salsa base</h4>
                            <select class="form-select" name="tipoSalda" id="tipo-salsa">
                                <option selected>Pomodoro clasica</option>
                                <option>Salsa blanca Alfredo</option>
                                <option>Pesto genovas</option>
                                <option>Barbacoa dulce</option>
                            </select>
                        </div>
                        <!--Tipo de queso-->
                        <div class="p-2 w-50">
                            <h4>Tipo de queso principal</h4>
                            <select class="form-select" name="tipoQueso" id="tipo-queso">
                                <option selected>Mozzarella fresco</option>
                                <option>Queso parmesano reggiano</option>
                                <option>Queso provolone</option>
                            </select>
                        </div>
                        <!--Ingredientes extras-->
                        <div class="p-2">
                            <h4>Ingredientes adicionales</h4>
                            <div class="row">
                                <div col>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check-pepperoni">
                                        <label class="form-check-label" for="check-pepperoni">Pepperoni</label>
                                    </div>
                                </div>
                                <div col>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check-jamon">
                                        <label class="form-check-label" for="check-jamon">Jamon de pavo</label>
                                    </div>
                                </div>
                                <div col>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check-champinon">
                                        <label class="form-check-label" for="check-champinon">Champiñones frescos</label>
                                    </div>
                                </div>
                                <div col>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check-pimiento">
                                        <label class="form-check-label" for="check-pimiento">Pimientos morrones</label>
                                    </div>
                                </div>
                                <div col>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check-aceitunas">
                                        <label class="form-check-label" for="check-aceitunas">Aceitunas negras</label>
                                    </div>
                                </div>
                                <div col>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check-albahaca">
                                        <label class="form-check-label" for="check-albahaca">Albahaca fresca</label>
                                    </div>
                                </div>
                                <div col>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check-tocinata">
                                        <label class="form-check-label" for="check-tocinata">Tocineta ahumada</label>
                                    </div>
                                </div>
                                <div col>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="check-carne">
                                        <label class="form-check-label" for="check-carne">Carne molida artesanal</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Boton pedido de pizza-->
                        <div class="py-2 d-flex justify-content-center">
                            <button type="button" class="btn btn-success"><i class="bi bi-basket px-1"></i>Realizar pedido</button>
                        </div>

                    </form>
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