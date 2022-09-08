<?php include_once('config/constantes.php') ?>
<?php include('parcial/menu.php'); ?>



<?php

    //Display all the cateories that are active
    //Sql Query
    $sql = "SELECT * FROM tbl_comida WHERE activo= 'Si'";

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
                                      <h5 class="precio">$<?php echo $precio; ?></h5>
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

<br><br>
<h1 class="text-center">UBICACIÓN:</h1>
<br>
<div class="map-responsive">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1838.611758998951!2d-105.7830602521839!3d22.83121854669109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f1d976bfb7899%3A0x461b1e2ffc2710c5!2sLa%20occidental!5e0!3m2!1ses!2smx!4v1660492930178!5m2!1ses!2smx" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<br>
