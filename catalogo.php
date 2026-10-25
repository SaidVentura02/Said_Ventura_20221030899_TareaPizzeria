<?php 
    $pizzaClasicas = [
        ["imagen" => "recursos\pizza-margarita.jpg", "nombre" => "Margarita", "ingredientes" => "Hojas de albahaca", "precioP" => 85.00, "precioM" => 105.00, "precioF" => 125.00, "precioG" => 155.00],
        ["imagen" => "recursos\pepperoni.jfif", "nombre" => "Pepperoni", "ingredientes" => "Rodajas de pepperoni", "precioP" => 99.00, "precioM" => 119.00, "precioF" => 139.00, "precioG" => 169.00],
        ["imagen" => "recursos\hawaiana.webp", "nombre" => "Hawaiana", "ingredientes" => "Piña y jámon", "precioP" => 105.00, "precioM" => 125.00, "precioF" => 145.00, "precioG" => 175.00],
        ["imagen" => "recursos\cuatro-quesos.webp", "nombre" => "Quatro quesos", "ingredientes" => "Mozzarella, gorgonzola, fontina y parmesano", "precioP" => 109.00, "precioM" => 129.00, "precioF" => 149.00, "precioG" => 179.00],
    ];

    $pizzaGourment = [
        ["imagen" => "recursos\prosciutto-di-parma.jfif", "nombre" => "Prosciutto di Parma", "ingredientes" => "Jamón prosciutto di Parma", "precioP" => 110.00, "precioM" => 130.00, "precioF" => 150.00, "precioG" => 180.00],
        ["imagen" => "recursos\\trufada-napolitana.jpg", "nombre" => "Trufada Napolitana", "ingredientes" => "Toques de trufa", "precioP" => 125.00, "precioM" => 145.00, "precioF" => 165.00, "precioG" => 195.00],
        ["imagen" => "recursos\\frutti-di-mare.jpg", "nombre" => "Frutti di Mare", "ingredientes" => "Hierbas y mariscos variados", "precioP" => 132.00, "precioM" => 152.00, "precioF" => 172.00, "precioG" => 202.00],
        ["imagen" => "recursos\carnivora-suprema.webp", "nombre" => "Carnivora Suprema", "ingredientes" => "Embutidos y carnes variadas", "precioP" => 127.00, "precioM" => 147.00, "precioF" => 167.00, "precioG" => 197.00],
    ];

    $especialidades = [
        ["imagen" => "recursos\calzone-res.jpg", "nombre" => "Calzone de Carnes", "ingredientes" => "Queso, tocino y carne sazonada", "precio" => 90.00],
        ["imagen" => "recursos\calzone-vegetariano.webp", "nombre" => "Calzone Vegetariano", "ingredientes" => "Queso y vegetales variado", "precio" => 90.00],
        ["imagen" => "recursos\\focaccia-romero.webp", "nombre" => "Focaccia con Romero", "ingredientes" => "Romero, ajo y vegetales variados", "precio" => 135.00],
        ["imagen" => "recursos\cannelloni.webp", "nombre" => "Cannelloni", "ingredientes" => "Carne sazonada, queso y pasta", "precio" => 110.00],
    ];

    $bebidas = [
        ["imagen" => "recursos\agua.jfif", "nombre" => "Agua", "precio" => 25.00],
        ["imagen" => "recursos\\refrescos.jpg", "nombre" => "Refresco", "precio" => 29.00],
        ["imagen" => "recursos\jugos-naturales.jpg", "nombre" => "Jugo natural", "precio" => 32.00]
    ];

    $postres = [
        ["imagen" => "recursos\\tiramisu.jpg", "nombre" => "Tiramisu casero", "precio" => 120.00],
        ["imagen" => "recursos\cannoli.jfif", "nombre" => "Cannoli sicilianos", "precio" => 65.00]
    ];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Menu</title>
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
            <!--Sección de pizzas clásicas-->
            <section class="py-2">
                <div class="container">
                    <h2>Pizzas clásicas</h2>
                    <div class="row">
                        <?php foreach ($pizzaClasicas as $clasica): ?>
                        <div class="col-12 col-md-4 py-2">
                            <div class="card">
                                <img class="img-fluid img-inicio" src="<?= $clasica["imagen"] ?>" alt="pizza">
                                <div class="card-body">
                                    <h3><?= $clasica["nombre"] ?></h3>
                                    <p><?= $clasica["ingredientes"] ?></p>
                                    <div class="table-responsive">
                                        <table class="table table-striped-columns border">
                                        <thead class="table-dark">
                                            <tr>
                                            <th scope="col">Tamaño</th>
                                            <th scope="col">Precio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Personal</td>
                                                <td>L.<?= number_format($clasica["precioP"],2) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Mediana</td>
                                                <td>L.<?= number_format($clasica["precioM"],2) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Familiar</td>
                                                <td>L.<?= number_format($clasica["precioF"],2) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Gigante</td>
                                                <td>L.<?= number_format($clasica["precioG"],2) ?></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <!--Sección de pizzas gourmet-->
            <section class="py-2">
                <div class="container">
                    <h2>Pizzas gourmet</h2>
                    <div class="row">
                        <?php foreach ($pizzaGourment as $gourmet): ?>
                        <div class="col-12 col-md-4 py-2">
                            <div class="card">
                                <img class="img-fluid img-inicio" src="<?= $gourmet["imagen"] ?>" alt="pizza">
                                <div class="card-body">
                                    <h3><?= $gourmet["nombre"] ?></h3>
                                    <p><?= $gourmet["ingredientes"] ?></p>
                                    <div class="table-responsive">
                                        <table class="table table-striped-columns border">
                                        <thead class="table-dark">
                                            <tr>
                                            <th scope="col">Tamaño</th>
                                            <th scope="col">Precio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Personal</td>
                                                <td>L.<?= number_format($gourmet["precioP"],2) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Mediana</td>
                                                <td>L.<?= number_format($gourmet["precioM"],2) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Familiar</td>
                                                <td>L.<?= number_format($gourmet["precioF"],2) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Gigante</td>
                                                <td>L.<?= number_format($gourmet["precioG"],2) ?></td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?> 
                    </div>
                </div>
            </section>

            <!--Sección de calzones y especialidades al horno-->
            <section class="py-2">
                <div class="container">
                    <h2>Calzones y especialidades al horno</h2>
                    <div class="row"> 
                       <?php foreach ($especialidades as $especial): ?>
                            <div class="col-12 col-md-4 py-2">
                                <div class="card">
                                    <img class="img-fluid img-inicio" src="<?= $especial["imagen"] ?>" alt="pizza">
                                    <div class="card-body">
                                        <h3><?= $especial["nombre"] ?></h3>
                                        <p><?= $especial["ingredientes"] ?></p>
                                        <p>Precio : L.<?= number_format($especial["precio"],2) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <!--Sección de bebidas-->
            <section class="py-2">
                <div class="container">
                    <h2>Bebidas</h2>
                    <div class="row"> 
                       <?php foreach ($bebidas as $bebida): ?>
                            <div class="col-12 col-md-4 py-2">
                                <div class="card">
                                    <img class="img-fluid img-inicio" src="<?= $bebida["imagen"] ?>" alt="pizza">
                                    <div class="card-body">
                                        <h3><?= $bebida["nombre"] ?></h3>
                                        <p>Precio : L.<?= number_format($bebida["precio"],2) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <!--Sección de postres-->
            <section class="py-2">
                <div class="container">
                    <h2>Postres</h2>
                    <div class="row"> 
                        <?php foreach ($postres as $postre): ?>
                            <div class="col-12 col-md-4 py-2">
                                <div class="card">
                                    <img class="img-fluid img-inicio" src="<?= $postre["imagen"] ?>" alt="pizza">
                                    <div class="card-body">
                                        <h3><?= $postre["nombre"] ?></h3>
                                        <p>Precio : L.<?= number_format($postre["precio"],2) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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