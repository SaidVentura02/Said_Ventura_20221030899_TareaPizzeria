<?php 
    session_start();


   $nombre = htmlspecialchars(trim($_POST['inputNombre'] ?? ''), ENT_QUOTES, 'UTF-8');
   $rtn = htmlspecialchars(trim($_POST['inputRTN'] ?? ''), ENT_QUOTES, 'UTF-8');
   $telefono = htmlspecialchars(trim($_POST['inputTel'] ?? ''), ENT_QUOTES, 'UTF-8');
   $email = htmlspecialchars(trim($_POST['inputEmail'] ?? ''), ENT_QUOTES, 'UTF-8');
   $direccion = htmlspecialchars(trim($_POST['inputDir'] ?? ''), ENT_QUOTES, 'UTF-8');

   $detalles = htmlspecialchars(trim($_POST['inputProducto'] ?? ''), ENT_QUOTES, 'UTF-8');

   $cantidad = intval(htmlspecialchars(trim($_POST['inputCantidad'] ?? ''), ENT_QUOTES, 'UTF-8'));
   $precioEntrega = intval(htmlspecialchars(trim($_POST['inputEntrega'] ?? ''), ENT_QUOTES, 'UTF-8'));
   $pago = htmlspecialchars(trim($_POST['inputPago'] ?? ''), ENT_QUOTES, 'UTF-8');

   $_SESSION['iniciado'] = true;

   if(!(empty($nombre))){
    $arrayDetalles = explode("-", $detalles);
    $producto = $arrayDetalles[0];
    $precio = intval($arrayDetalles[1]);

    $subtotal = $precio * $cantidad;

    if($cantidad >= 3){
        $subtotal = $subtotal - ($subtotal * 0.10);
    }

    $impuestoAgregado = $subtotal * 0.15;
    $total = $subtotal + $impuestoAgregado;
    $total = $total + $precioEntrega;
    $total = number_format($total, 2);
    
    $cod = random_int(111, 999);

   $orden = ["codigo" => "COD-".$cod, "usuario" => $nombre, "telefono" => $telefono, "producto" => $producto, "cantidad" => $cantidad, "totalPagar" => $total];
   $_SESSION['pedidos'][] = $orden;
   }
   
   

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Pedidos</title>
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
            <!--Sección del formulario de pedido-->
            <section class="py-3">
                <div class="container p-2 border shadow-lg rounded-2">
                    <div>
                        <h2>Ingresa tus datos para completar tu compra</h2>
                    </div>

                    <form action="pedidos.php" method="post">
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
                                <input type="text" class="form-control" name="inputRTN" id="input-rtn" minlength="14" maxlength="14" placeholder="0801XXXXXXXXXX" pattern="[0-9]{14}" required>
                            </div>
                        </div>
                        <!--Telefono-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-tel" class="form-label">Número telefonico</label>
                                <input type="text" class="form-control" name="inputTel" id="input-tel" minlength="8" maxlength="8" placeholder="996699XX" pattern="[0-9]{8}" required>
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
                        <!--Selección de producto-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-producto" class="form-label">Seleccione el producto</label>
                                <select class="form-select" name="inputProducto" id="input-producto" required>
                                    <option value="Margarita Personal-85">Pizza margarita personal</option>
                                    <option value="Margarita Mediana-105">Pizza margarita mediana</option>
                                    <option value="Margarita Familiar-125">Pizza margarita familiar</option>
                                    <option value="Margarita Gigante-155">Pizza margarita gigante</option>
                                    <option value="Pepperoni Personal-99">Pizza pepperoni personal</option>
                                    <option value="Pepperoni Mediana-119">Pizza pepperoni mediana</option>
                                    <option value="Pepperoni Familiar-139">Pizza pepperoni familiar</option>
                                    <option value="Pepperoni Gigante-169">Pizza pepperoni gigante</option>
                                    <option value="Hawaiana Personal-105">Pizza hawaiana personal</option>
                                    <option value="Hawaiana Mediana-125">Pizza hawaiana mediana</option>
                                    <option value="Hawaiana Familiar-145">Pizza hawaiana familiar</option>
                                    <option value="Hawaiana Gigante-175">Pizza hawaiana gigante</option>
                                    <option value="4 Quesos Personal-109">Pizza 4 quesos personal</option>
                                    <option value="4 Quesos Mediana-129">Pizza 4 quesos mediana</option>
                                    <option value="4 Quesos Familiar-149">Pizza 4 quesos familiar</option>
                                    <option value="4 Quesos Gigante-179">Pizza 4 quesos gigante</option>
                                    <option value="Calzone de carne-90">Calzone de carne</option>
                                    <option value="Calzone vegetariano-90">Calzone vegetariano</option>
                                    <option value="Focaccia con romero-135">Focaccia con romero</option>
                                    <option value="Cannelloni-110">Cannelloni</option>
                                    <option value="Agua-25">Agua</option>
                                    <option value="Refresco-29">Refresco</option>
                                    <option value="Jugo natural-32">Jugo natural</option>
                                    <option value="Tiramisu casero-120">Tiramisu casero</option>
                                    <option value="Cannoli sicilianos-65">Cannoli sicilianos</option>
                                </select>
                            </div>
                        </div>
                        <!--Selección de cantidad-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-cantidad" class="form-label">Cantidad deseada</label>
                                <input type="number" class="form-control" name="inputCantidad" id="input-cantidad" min="1" required>
                            </div>
                        </div>
                        <!--Modalidad de entrega-->
                        <div class="p-2 w-50">
                            <div class="mb-3">
                                <label for="input-entrega" class="form-label">Modalidad de entrega</label>
                                <select class="form-select" name="inputEntrega" id="input-entrega" required>
                                    <option value="0">Para comer en restaurante</option>
                                    <option value="0">Para llevar</option>
                                    <option value="45">Envio a domicilio - costo extra de L.45.00</option>
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
                            <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-factura"><i class="bi bi-piggy-bank-fill px-1"></i>Realizar compra</button>
                        </div>

                    </form>
                </div>
            </section>

            <!--Sección de factura digital-->
            <?php if(!(empty($nombre))): ?>
            <section class="py-4 d-flex justify-content-center">
                <div class="container p-2 border w-50 shadow-lg rounded-2">
                    <div class="bg-success w-100 text-light">
                        <div class="text-center">
                            <h4 class="fw-bold">Última factura registrada</h4>
                        </div>
                    </div>
                    <div class="text-center fs-5 border">
                        <h5 class="fw-bold fs-2">Factura digital</h5><br>
                        <p>Cliente: <?= $nombre ?></p><br>
                        <p>Teléfono: <?= $telefono ?></p><br>
                        <p>Producto: <?= $producto ?></p><br>
                        <p>Cantidad: <?= $cantidad ?></p><br>
                        <p>Total a pagar: <?= number_format($total, 2) ?></p><br>
                    </div>
                </div>
            </section>
            <?php endif; ?>

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