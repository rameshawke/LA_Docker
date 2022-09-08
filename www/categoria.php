<?php include_once('config/constantes.php') ?>
<?php include('parcial/menu.php'); ?>


            <?php

                //Display all the cateories that are active
                //Sql Query
                $sql = "SELECT * FROM tbl_categoria WHERE activo='Si'";

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
                        $id_categoria = $row['id_categoria'];
                        $nombre_categoria = $row['nombre_categoria'];
                        $img_cat = $row['img_cat'];
                        $descripcion = $row['descripcion'];
                        ?>

                        <a href="<?php echo SITEURL; ?>categoria-comida.php?id_categoria=<?php echo $id_categoria; ?>">
                                <?php
                                    if($img_cat=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not found.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                         <div class="food-items">
                                             <img src="<?php echo SITEURL; ?>img/<?php echo $img_cat; ?>" width=300 height=300>
                                             <div class="details">
                                               <div class="details-sub">
                                                <h5><?php echo $nombre_categoria; ?></h5>
                                              </div>
                                            <p><?php echo $descripcion; ?></p>
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
