<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
<!-------------------------------------------------AQUI EMPIEZA EL CARRUSEL------------------------------------------------------------------->
<?php
 include('config.php');
 session_start();
 ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    $query = $connection->prepare("SELECT URLposter FROM peliculas WHERE fechaCartele<= curdate() and Fechafincartelera>= curdate()");
                    $query->execute();
                    echo('<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>');
                        for ($i=1; $i < $query->rowCount()+1; $i++) { 
                            echo(' <li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>');
                        }
                ?>
            </ol>
            <div class="carousel-inner" id="carrusel">
                <div class="carousel-item active">
                    <img class="d-block w-100 imagen" src="https://cdn.pixabay.com/photo/2017/07/13/23/11/cinema-2502213_1280.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block textoCarrucel">
                        <h2>Nada como el cine</h2>
                    </div>
                </div>
                <?php
                    $stmt = $connection->query("SELECT titulo,URLposter,URLtrailer FROM peliculas WHERE fechaCartele<= curdate() and Fechafincartelera>= curdate()");
                    while ($row = $stmt->fetch())
                    {
                        echo('
                        <div class="carousel-item">
                            <img class="d-block w-100 imagen" src="'.$row["URLposter"].'" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block textoCarrucel">
                                <h2>'.$row["titulo"].'</h2>
                                <a id="Trailer" href="'.$row["URLtrailer"].'" class="btn-primary" target="_blank">Trailer</a>
                                </div>
                        </div>
                        ');
                    }
                   
                ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        <!-------------------------------------------------AQUI TERMINA EL CARRUSEL------------------------------------------------------------------->
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>