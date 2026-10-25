<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Inicio Bella Napoli</title>
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

        <!--Header o Hero banner-->
        <header class="py-3" id="hero-body">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4" id="hero-verde">
                        <div>
                            <h1>Difruta del tradicional sabor italiano!</h1>
                            <p>
                                Somo una prestigiosa cadena de restaurantes dedicados a la elaboración de
                                pizzas de manera tradicional a horno de leña. 
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" id="hero-blanco">
                        <div>
                            <h1>Ahora más cerca de ti!</h1>
                                <p>
                                    Ahora puedes encontrarnos en la web donde podras conocer más de nosotros y 
                                    realizar tus pedidos a domicilio.
                                </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" id="hero-rojo">
                        <div>
                            <h1>Arma tu pizza a tu gusto!</h1>
                                <p>
                                    Ahora te invitamos desde nuestro portal web a que pruebes nuestro nuevo
                                    sistema donde podras armar tu pizza a tu gusto y recibirla a domicilio. 
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--Main-->
        <main>
            <!--Especiales del día-->
            <section class="py-3" id="seccion-principal-del-dia">
                <div class="container">
                    <h2>Conoce nuestras especialidades del día</h2>
                    <div class="row">
                        <div class="col-12 col-md-4 py-2">
                            <div class="card">
                                <img class="img-fluid img-inicio" src="./recursos/pizza-margarita.jpg" alt="pizza margarita">
                                <div class="card-body">
                                    <h3>Pizza margarita</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 py-2">
                            <div class="card">
                                <img class="img-fluid img-inicio" src="./recursos/trufada-napolitana.jpg" alt="pizza trufada napolitana">
                                <div class="card-body">
                                    <h3>Trufada Napolitana</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 py-2">
                            <div class="card">
                                <img class="img-fluid img-inicio" src="./recursos/carnivora-suprema.webp" alt="pizza carnivora">
                                <div class="card-body">
                                    <h3>Carnivora Suprema</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Promociones-->
            <section class="py-3" id="seccion-promociones-del-dia">
                <div class="container">
                    <h2>Promociones del día</h2>
                    <div class="row">
                        <div class="col-12 col-md-4 py-2">
                            <div class="card">
                                <div><span class="badge rounded-pill bg-warning m-2 fs-6">Promoción</span></div>
                                <img class="img-fluid img-inicio" src="./recursos/cuatro-quesos.webp" alt="pizza cuatro quesos">
                                <div class="card-body">
                                    <h3>Pizza 4 quesos-mediana</h3>
                                    <ul>
                                        <li>Cuatro quesos tamaño mediano</li>
                                        <li>Incluye 4 refrescos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 py-2">
                            <div class="card">
                                <div><span class="badge rounded-pill bg-danger m-2 fs-6">50% DE DESCUENTO</span></div>
                                <img class="img-fluid img-inicio" src="./recursos/hawaiana.webp" alt="pizza hawaiana">
                                <div class="card-body">
                                    <h3>Pizza hawaiana-familiar</h3>
                                    <ul>
                                        <li>Hawaiana tamaño familiar a mitad de precio</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Testimonios-->
            <section class="py-3" id="seccion-testimonios">
                <div class="container">
                    <h2>Descubre que opinan nuestros clientes</h2>
                    <div class="card py-2">
                        <div class="card-body">
                            <p class="fs-4">
                                "Todo mi familia disfruta de comer en Bella Napoli.
                                La comida es deliciosa, y la atención del personal
                                es la mejor."
                            </p>
                        </div>
                    </div>
                    <div class="card py-2">
                        <div class="card-body">
                            <p class="fs-4">
                                "Siempre disfruto de comer en Bella Napoli, amo su
                                pizza y el toque tradicional la vuelve mil veces mejor
                                que otros restaurante de pizza.
                                Siempre que hay fiestas o reuniones recomiendo venir a Bella Napoli."
                            </p>
                        </div>
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