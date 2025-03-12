
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PCasing Website</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<?php include ('includes/header.php');?>
        <!--Home-->
        <section class="home" id="home">
            
            <div class="content">
                <h2>Lastest and most <span>Fasionalable</span> casing for you</h2>
                <p>Best phone cases of 2023</p>
                <a href="#items" class="btns">Shop now</a>
            </div>
        </section>
       
        <!--About-->
        <section class="about" id="about">

            <h1 class="heading"><span>About</span> </h1>
            <div class="container">
                <br><h2>Why choose us?</h2>
                <br><p>At CaSing., we value quality, durability, and affordability. We use only the best materials to create phone cases that can withstand drops, scratches, and everyday wear and tear. We offer a wide range of designs, from classic solid colors to trendy patterns and prints, so you can find a case that suits your personal style.</p><br>
                <a href="about.php" class="btns">Learn more</a><br>
            </div>

        </section>

        <!--Items-->
        <section class="items" id="items">

            <h1 class="heading">Our <span>Products</span></h1>
            <div class="items">
                <div class="wrapper">
                        <div class="box">
                            <img src="images/socialMedia.jpg" alt="">
                            <h3>Iphone Case</h3>
                            <div class="price"> RM12 - RM17</div>
                            <a href="/asgm/item/item.php" class="btns">Shop now</a>
                        </div>
                        <div class="box">
                            <img src="images/pearlearring.jpg" alt="">
                            <h3>Samsung Case</h3>
                            <div class="price"> RM12 - RM18</div>
                            <a href="/asgm/item/item.php" class="btns">Show now</a>
                        </div>
                        <div class="box">
                            <img src="images/abstractface.jpg" alt="">
                            <h3>Huawei Case</h3>
                            <div class="price"> RM10 - RM16</div>
                            <a href="/asgm/item/item.php" class="btns">Show now</a>
                        </div>
                        <div class="box">
                            <img src="images/whiteswirl.jpg" alt="">
                            <h3>Iphone Case</h3>
                            <div class="price"> RM10 - RM19</div>
                            <a href="/asgm/item/item.php" class="btns">Shop now</a>
                        </div>

                    
                    </div>
                </div>

            

            

        </section>
    
    
        

        <script src="js/script.js"></script>
    </body>
    <?php include ('includes/footer.php');?>

    
    </html>