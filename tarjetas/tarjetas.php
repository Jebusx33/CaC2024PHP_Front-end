<?php 
    $cantidadTarjeta=0;  
   
          
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icons8-carrito-de-compras-emoji-96.png" type="image/x-icon">
    <title>Registro - Market</title>
    <link rel="stylesheet" href="./css/styleTarjeta.css">
    <link rel="stylesheet" href="../css/barNav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--https://fontawesome.com/v4/icons/-->
    <script src="https://kit.fontawesome.com/f7fb471b65.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container">
            <a class="marketLogo" href="../index.html">
				<h1>Market <i class="fa fa-shopping-cart" aria-hidden="true"></i></h1> 
			</a>
            <nav>
                <ul>
                    <li><a href="../index.html">Inicio</a></li>
                    <li><a href="#">Novedades</a></li>
                    <li><a href="#">Catálogo</a></li>
                    <li>
                        <a  href="../LoginCAC/index.html">Inicia Sesión</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container" id="formRegister">
            <form action="tarjetas.php" method="POST" id="formulario" enctype="multipart/form-data">
                <h2 class="RegistroTitulo">Ingresar Tarjetas</h2><br>
                <div>
                    <input type="text" placeholder="Titulo" id="titulo" class="estiloInput" name="titulo">
                </div>
                <div>
                    <input type="text" placeholder="Descripcion" id="descripcion" class="estiloInput" name="descripcion">
                </div>
                <div>
                    <input type="number" placeholder="0" class="estiloInput" id="tarjetas" name="tarjetas">
                </div>
                <div>
                    <input class="botonRegistro" type="submit" value="Mostrar">
            </form>
        </div>
    </section>
    <section class="section-with-bg">
        <div class="container">
            <h2>Sección de Tarjetas</h2>
            <p>En esta sección podras ver las tarjetas Ingresadas.</p><br>             
             

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php
 $titulo = $_POST['titulo'];
 $descripcion = $_POST['descripcion'];
 $tarjetas = $_POST['tarjetas'];   
$cantidadTarjeta = (int)$tarjetas;
for ($i=0; $i < $cantidadTarjeta; $i++) { 
echo '
<div class="col">
    <div class="card h-100">
      <img src="../img/DBZ.webp" class="card-img-top" id="img-tarjeta" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$titulo.'e</h5>
        <p class="card-text">'.$descripcion.'</p>
      </div>
    </div>
  </div>

  ';

}
?>

</div>


        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Jesús Arias. Todos los derechos reservados.</p>
        </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
