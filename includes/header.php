
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PCasing Website</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">


    <!--Header-->
    <header class="header">
        <a href ="/Casing/index.php" class="logo">CaSing<span>.</span></a>

        <nav class="navbar">
            <ul>
                <li><a href="/Casing/index.php">Home</a></li>
                <li><a href="/Casing/index.php #about">About</a></li>
                <li><a href="/Casing/item/item.php">Items</a>
                    <ul>
                        <a href="/Casing/item/item.php">Iphone</a>
                        <a href="/Casing/item/item.php">Samsung</a>
                        <a href="/Casing/item/item.php">Huawei</a>
                        <a href="/Casing/item/item.php">OnePlus</a>
                    </ul></li>
            <li><a href="/Casing/contact">Contacts us</a></li>
            <li><a href="">Account</a>
                <ul>
                    <a href="/Casing/login.php">Client</a>
                    <a href="/Casing/loginAdmin.php">Admin</a>
                </ul></li>
            </ul>
            
        </nav>

        <div class="icons">
            <a href="#" ><i class='bx bx-menu'></i></a>
            <a href="#"><i class='bx bx-search' ></i></a>
            <a href="/Casing/Wishlist/index.php" ><i class='bx bx-heart'></i></a>
            <a href="/Casing/Cart/index.php" ><i class='bx bx-cart' ></i></a>
            <a href="#" ><i class='bx bx-user'></i></a>
        </div>

        <form action="" class="search_form">
            <input type="search" id="search" placeholder="Searching...">
            <label for="search" class="bx bx-search"></label>
        </form>

        <div class="showUser">
        <?php
        session_start();
        $conn= new mysqli('localhost','root','','casing');
        if ($conn->connect_error)
            die("Connection failed: ".$conn->connect_error);
      
            if( isset($_SESSION['id']) && isset($_SESSION['email']))
            {
                echo "Welcome ".$_SESSION['email'];
                echo "<br><br> <a href='./logout.php' class='btns'>Logout</a>";

            }
            else{
                echo "Please login to your account";
            }
            ?>
        </div>
            
        
        
        
    
    
</header>
<script src="./js/script.js"></script>
<script src="./item/script.js"></script>