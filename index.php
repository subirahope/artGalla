<?php include('partials-front/menu.php');?>


  <!-- art search Section Starts Here -->
  <section class="food-search text-center">
        <div class="container">
            
            <form action="art-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Art.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- art search Section Ends Here -->

    <?php
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset ($_SESSION['order']);
        }
    
    ?>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Arts</h2>
        <br><br>

            <?php
            $conn = new mysqli("localhost","root","","art_gallery");
            //create sql query to display categories from dbs
            $sql = "SELECT * FROM category WHERE  active = 'Yes' AND  featured = 'Yes' ORDER BY id DESC LIMIT 3";

            $res = mysqli_query ($conn,$sql);
            
            //count rows to check whether the category is available or not
            $count = mysqli_num_rows($res);

            if($count>0)
            {
                    //categories available
                    while($row = mysqli_fetch_assoc($res))
                    {
                        //get vals
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        
                        ?>
                            <a href="category-arts.php?category_id = <?php echo $id;?>">
                                <div class="box-3 float-container">

                        <?php
                                //check whether image is available or not
                                if($image_name == "")
                                {
                                    //display message
                                    echo "<div class = 'error'>Image not available</div>";
                                }
                                else
                                {
                                    //image available
                        ?>
                                    <img src="images/category1/<?php echo $image_name?>" alt="" class="img-responsive img-curve">
                                    <?php
                                }
                                ?>
                                    

                                    <h3 class="float-text text-black"><?php echo $title;?></h3>
                                </div>
                            </a>

                        <?php
                    }
            }
            else
            {
                    //categories not available
                    echo "<div class = 'error'>Category not added</div>";
            }
            ?>
            
            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- art MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Art Catalogue</h2>

           
            <?php
                    
                $conn = new mysqli("localhost","root","","art_gallery");
                //create sql query to display art pieces from dbs
                $sql2 = "SELECT * FROM art_piece WHERE  active = 'Yes' AND  featured = 'Yes'  LIMIT 6";

                $res2 = mysqli_query ($conn,$sql2);
                
                //count rows to check whether the art piece is available or not
                $count2 = mysqli_num_rows($res2);

                if($count2>0)
                {
                        //art piece available
                        while($row = mysqli_fetch_assoc($res2))
                        {
                            //get vals
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
                        //categories not available
                        echo "<div class = 'error'>Art piece not available</div>";
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