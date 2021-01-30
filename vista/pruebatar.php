<?php 
include 'partials/head.php';
include 'partials/menu.php';
include '../global/config.php';
include '../global/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <title>Cursos gratuitos</title>
    <link rel="shortcut icon" href="Img/learning.png">
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
        <div id="banner">
    <div class="slide">
    <ul>   
        <li><img src="Img/php-y-mysql-3_14.jpg" alt="" width="70%" height="400px"></li>
        <li><img src="Img/cursocss.jpg" alt="" width="100%"  height="400px"></li>
        <li><img src="Img/cursos-de-diseño-web-con-html5-tecgurus-mexico.jpg" alt="" width="70%"  height="400px"></li>
        <li><img src="Img/cursos-de-programacion-web.png" alt="" width="100%" height="400px"></li>
        <li><img src="Img/desarrollo web movil cursos gratis.jpg" alt="" width="100%" height="400px"></li>
        <li><img src="Img/cursos-gratuitos-de-diseno-web.jpg" alt="" width="100%" height="400px"></li>
        <li><img src="Img/f6.jpg" alt="" width="100%" height="400px"></li>
    </ul>
    </div>
</div>

<a class="btn btn-success" href="cursosp.php"> Cursos Premium</a>
<p class="separador">|</p>
<a class="btn btn-success" href="Cursosg.php"> Cursos Gratuitos</a>

   <center> <h3 class="titulop">Cursos Gratuitos <hr></h3></center>

<div class="containertar">
<?php
$sentencia=$pdo->prepare("SELECT * FROM `tblproductos` ");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaProductos);
?>
<?php foreach($listaProductos as $producto){?>
   <div class="card">
           <img  
        
           src="<?php echo $producto['Imagen'];?>">
          <h4><?php echo $producto['Nombre'];?></h4>
          <h5> $ <?php echo $producto['Precio'];?></h5>
           <b> Sergio Flores Martínez</b>
           <center>
           <fieldset class="val-fieldset"><span class="valoracion val-45"></span></fieldset></center>
        <br>
            <a href="tarjetajsdesde0.php">Ver Curso</a> |
            <a href="<?php echo $producto['Tarpresentacion'];?>" title="Añadir al carrito">🛒</a>
       </div>
       <?php } ?>  
   
   
    </div>
<footer></footer>

</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>

</html>

<?php include 'partials/footer.php';?>