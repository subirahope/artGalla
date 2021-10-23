<?php include('partials-front/menu.php') ?>


    <!-- art sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Art.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- art sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Arts</h2>

            <a href="category-art.html">
            <div class="box-3 float-container">
                <img src="images/3d.jpg" alt="3D" class="img-responsive img-curve">

                <h3 class="float-text text-black">3D</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/Hand Holding Pen.jpg" alt="Hand" class="img-responsive img-curve">

                <h3 class="float-text text-black">Modern Art</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/Modern Sculptures Tips - ArtHunter.jpg" alt="Sculptures" class="img-responsive img-curve">

                <h3 class="float-text text-black">Sculpture</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

     <!-- art MEnu Section Starts Here -->
     <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Art Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sunset.jpg" alt="Sunset Image" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sunset</h4>
                    <p class="food-price">$20.3</p>
                    <p class="food-detail">
                        Inspired by sunsets on a beach
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sculpture.jpg" alt="Sculpture" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sculpture</h4>
                    <p class="food-price">$20.3</p>
                    <p class="food-detail">
                        Inspired by the feminine structure.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sculpture.jpg" alt="Sculpture" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sculpture</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Inspired by the feminine structure.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sculpture.jpg" alt="Sculpture" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sculpture</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Inspired by the feminine structure.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sunset.jpg" alt="Sunset" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sculpture</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Inspired by the feminine structure.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sculpture.jpg" alt="Sculpture" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sculpture</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Inspired by the feminine structure..
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>


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