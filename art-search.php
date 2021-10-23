<?php include('partials-front/menu.php') ?>

    
    <!-- art sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php
                 //get search key word
                 $search = $_POST['search'];
            ?>
            
            
            <h2>Art pieces on your search <a href="#" class = "text-white">"<?php echo $search;?>"</a></h2>

        </div>
    </section>
    <!-- art sEARCH Section Ends Here -->



    <!-- art MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Art Catalogue</h2>

            <?php
                $conn = new mysqli("localhost","root","","art_gallery");
               
                //query to get art based on search key word
                $sql = "SELECT * FROM art_piece WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
                $res = mysqli_query($conn,$sql);

                //count rows to check if art piece is available
                $count = mysqli_num_rows($res);
                if($count>0)
                {
                    //art available
                    while($row = mysqli_fetch_assoc($res))
                    {
                        //get details
                        $id = $row['id'];
                        $title = $row['title'];
                        $price= $row['price'];
                        $description= $row['description'];
                        $image_name = $row['image_name'];

                        ?>
                        <div class="food-menu-box">
                            <div class="food-menu-img">
                            <?php
                                            //check if image is available or not
                                            if($image_name=="")
                                            {
                                                //not available
                                                echo "<div class = 'error'>Image not available</div>";
                                            }
                                            else
                                            {
                                                //image available
                                                ?>
                                                    <img src="images/art/<?php echo $image_name?>" alt="" class="img-responsive img-curve">
                                                <?php

                                            }
                                        
                                        
                                        ?>
                                
                            </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title;?></h4>
                            <p class="food-price">Ksh.<?php echo $price;?></p>
                            <p class="food-detail">
                                <?php echo $description;?>
                            </p>
                            <br>

                            <a href="order.php ?art_id=<?php echo $id;?>" class="btn btn-primary">Order Now</a>
                        </div>
                        </div>
                        <?php
                    }
                }
                else
                {
                    //not available
                    echo "<div class = 'error'>Art not found</div>";
                }
            ?>

           

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Art Pieces</a>
        </p>
    </section>
    <!-- art Menu Section Ends Here -->

    <?php include('partials-front/footer.php') ?>

</body>
</html>