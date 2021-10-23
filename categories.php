<?php include('partials-front/menu.php') ?>

       <!-- CAtegories Section Starts Here -->
       <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Arts</h2>
            <?php
            $conn = new mysqli("localhost","root","","art_gallery");
            //display all the categories that are active
            //sql query
            $sql = "SELECT * FROM category WHERE active ='Yes'";

            $res = mysqli_query($conn,$sql);
            //count rows
            $count = mysqli_num_rows($res);

            //check category is availabl or not
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
                            <a href="category-art.html">
                                <div class="box-3 float-container">
                                    <?php
                                        if($image_name == "")
                                        {
                                            //image not available
                                            echo "<div class = 'error'>Image not found</div>";
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
                //not availble
                echo "<div class = 'error'>Category not found</div>";
            }
            
            ?>
          

           

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <?php include('partials-front/footer.php') ?>

