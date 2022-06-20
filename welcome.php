<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEAF now</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/plant website/productstyple.css">
    
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    

</head>
<body>
    
<!-- header section starts  -->
<div class="card" id="pdf">
<header>

<a href="#" class="logo"><i class="fas fa-seedling"></i> LEAF now</a>

<nav class="navbar">
    <ul>
        <li><a href="#">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="doante.html">donate</a></li>
        <li><a href="logout.php">log out</a></li>
        <li><h1><?php echo "Welcome ". $_SESSION['username']?>! </h1></li>
       <li><div class="col-md-12 text-right mb-3">
            <button class="btn" id="download"> download pdf</button>
        </div></li> 
        

    </ul>
</nav>

<div class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="content">

    <h1>Life Is Short <br>Buy More Plants</h1>
    <p>"Plants want to grow; they are on your side as long as you are reasonably sensible."-Anne Wareham<br>
        "A beautiful plant is like having a friend around the house"-Beth Ditto
    </p>
    

</div>

</section>

<!-- home section ends -->
<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> <i class="fas fa-quote-left"></i> our services <i class="fas fa-quote-right"></i> </h1>
    
    <div class="box-container">
    
        <div class="box">
            <i class="fas fa-seedling"></i>
            <h3>Buy Plants</h3>
            <p>Happiness is buying NEW Palnts</p>
            <a href="product.html"><button class="btn">Buy</button></a>
        </div>

    
        <div class="box">
            <i class="fas fa-donate"></i>
            <h3>Donate</h3>
            <p>Its not how much you give,but how much we put in to giving</p>
            <a href="doante.html"><button class="btn">Donate</button></a>
        </div>
    
    
    
    </div>
    
    </section>
    
    <!-- service section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <i class="fas fa-quote-left"></i> about us <i class="fas fa-quote-right"></i> </h1>

<div class="row">

    <div class="image">
        <img src="Imageshome/home2.jpg" alt="img">
    </div>

    <div class="content">
        <h3>together we can save the planet</h3>
        <p>Ever since industrialisation started the care for plants has made it to our least priority
            list, Even though mankind requires plants to balance the food chain that he's a part of,
            but the plant enthusiasts are everywhere, be it big metropolitan cities or rural areas.
            </p>
        <p>so we aim to bring in a platform that can connect these plant/nature enthusiasts and
            help them exchange/sell them plants or donate seeds/plants as part of the green
            initiative that we started 2 years back.
            </p>
        
    </div>

</div>


</div>
<section class="footer">

<div class="box-container">

    <div class="box">
        <a href="#" class="logo"><i class="fas fa-seedling"></i>LEAF Now</a>
        
    </div>


</div>

<h1 class="credit">created by <span>TEAM ALPHA</span> </h1>

</section>

<!-- footer section ends -->

<script src="main.js"></script>

</body>
</html>