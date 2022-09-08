<?php include('config/constantes.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-MX" xml:lang="es-MX">
<head>
    <meta charset="UTF-8"/>
    <title>La Occidental - Escuinapa</title>
	<link rel="icon" href="img/occi.ico">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="menu">
        <div class="heading">
            <div class="container">
			<span class="text1">LA OCCIDENTAL</span>
		  </div>
      <div class="menu text-center">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="categoria.php">Categorias</a></li>
                <li><a href="comida.php">Comida</a></li>

            </ul>
      </div>
        </div>

        <?php

            //Display all the cateories that are active
            //Sql Query
            $sql = "SELECT * FROM tbl_comida WHERE activo= 'Si' LIMIT 3";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Count Rows
            $count = mysqli_num_rows($res);

            //CHeck whether categories available or not
            if($count>0)
            {
                //CAtegories Available
                while($row=mysqli_fetch_assoc($res))
                {
                    //Get the Values
                    $id_comida = $row['id_comida'];
                    $nombre_comida = $row['nombre_comida'];
                    $precio = $row['precio'];
                    $descripcion = $row['descripcion'];
                    $imagen = $row['imagen'];
                    ?>

                            <?php
                                if($imagen=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not found.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                     <div class="food-items">
                                         <img src="<?php echo SITEURL; ?>img/<?php echo $imagen; ?>" width=300 height=300>
                                         <div class="details">
                                           <div class="details-sub">
                                            <h5><?php echo $nombre_comida; ?></h5>
                                              <h5 class="precio"><?php echo $precio; ?></h5>
                                          </div>
                                        <p><?php echo $descripcion; ?></p>
                                          <input type="button" onclick="location.href='https://wa.link/leg6s5/';" value="Ordenar" />
                                        </div>
                                                <?php

                                              }
                                          ?>



                                      </div>
                                  </a>

                                  <?php
                              }
                          }

                      ?>


                  </div>

    <br>
    	<h1 class="text-center">UBICACIÓN:</h1>
      <br>
<?php include('parcial/footer.php') ?>
