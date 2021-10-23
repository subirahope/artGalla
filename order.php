<?php include('partials-front/menu.php') ?>
<?php
 $conn = new mysqli("localhost","root","","art_gallery");
//check if art id is set or not
    if(isset($_GET['art_id']))
    {
        //get art id and details
        $art_id = $_GET['art_id'];

        $sql = "SELECT * FROM art_piece WHERE id = $art_id";
        $res = mysqli_query($conn,$sql);

        //count rows
        $count = mysqli_num_rows($res);
        //check if data is available or not
        if($count == 1)
        {
            //we have data
            //get data from dbs
            $row = mysqli_fetch_assoc($res);
            
            $title = $row['title'];
            $price= $row['price'];
            $image_name = $row['image_name'];

        }
        else
        {
            //not available
            //redirect to homepage
            header('location:'.SITEURL);
        }
    }
    else
    {
        //redirect to homepage
        header('location:'.SITEURL);
    }

?>

    <!-- art sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method = "POST" class="order">
                <fieldset>
                    <legend>Selected Art</legend>

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
                        <h3><?php echo $title?></h3>
                        <input type="hidden" name = "art_piece" value = "<?php echo $title;?>">
                        <p class="food-price">Ksh<?php echo $price?></p>
                        <input type="hidden" name = "price" value = "<?php echo $price;?>">
                        
                        <div class="order-label">Quantity</div>
                        <input type="number" name="quantity" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Hope Subira" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. +25470000000" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. jkuat@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Juja,Kiambu" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php
            $conn = new mysqli("localhost","root","","art_gallery");
                //check if button is clicked or not
                if(isset($_POST['submit']))
                {
                    //get all the details from form
                    $art_piece = $_POST['art_piece'];
                    $price = $_POST['price'];
                    $quantity = $_POST['quantity'];

                    $total = $price * $quantity;
                    $order_date = date("Y-m-d h:i:sa");
                    $status = "Ordered";//ordered,on delivery,delivered,cancelled
                    $customer_name = $_POST['full-name'];
                    $customer_contact = $_POST['contact'];
                    $customer_email = $_POST['email'];
                    $customer_address = $_POST['address'];


                    //save order in dbs
                    $sql2 = "INSERT INTO order SET
                        art_piece = '$art_piece',
                        price = $price,
                        quantity = $quantity,
                        total = $total,
                        order_date  = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address'

                    ";

                    //echo $sql2;
                    //die();
                    //execute query
                    $res2 = mysqli_query($conn,$sql2);

                    if($res2 == true)
                    {
                        //query executed and order saved
                        $_SESSION['order'] = "<div class = 'success'>Order Placed Successfully</div>";
                        header('location:index.php');
                    }
                    else
                    {
                        $_SESSION['order']= "<div class = 'error'>Failed to place order</div>";
                        header('location:index.php');
                    }

                    

                }
            
            ?>

        </div>
    </section>
    <!-- art sEARCH Section Ends Here -->

    <?php include('partials-front/footer.php') ?>

