<?php include('config/constantes.php'); ?>
<?php include('parcial/menu.php'); ?>


    <?php
        //CHeck whether id is passed or not
        if(isset($_GET['id_categoria']))
        {
            //Category id is set and get the id
            $id_categoria = $_GET['id_categoria'];
            // Get the CAtegory Title Based on Category ID
            $sql = "SELECT nombre_categoria FROM tbl_categoria WHERE id_categoria=$id_categoria";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Get the value from Database
            $row = mysqli_fetch_assoc($res);
            //Get the TItle
            $category_title = $row['nombre_categoria'];
        }
        else
        {
            //CAtegory not passed
            //Redirect to Home page
            header('location:'.SITEURL);
        }
    ?>


            <?php

                //Display all the cateories that are active
                //Sql Query
                $sql2 = "SELECT * FROM tbl_comida WHERE id_categoria=$id_categoria";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //Count Rows
                $count2 = mysqli_num_rows($res2);

                //CHeck whether categories available or not
                if($count2>0)
                {
                    //CAtegories Available
                    while($row2=mysqli_fetch_assoc($res2))
                    {
                        //Get the Values
                        $id_comida = $row2['id_comida'];
                        $nombre_comida = $row2['nombre_comida'];
                        $precio = $row2['precio'];
                        $descripcion = $row2['descripcion'];
                        $imagen = $row2['imagen'];
                        ?>

                        <a <?php echo $id_categoria; ?>">
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
                              else
                              {
                                  //CAtegories Not Available
                                  echo "<div class='error'>Category not found.</div>";
                              }

                          ?>


                      </div>



    <?php include('parcial/footer.php'); ?>
