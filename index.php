<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: login.html'); // Redirect to login if not authenticated
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRoots - Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .hero {
            background-image: url('https://www.example.com/path-to-image.jpg');
            height: 50vh;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            font-size: 2em;
        }

        .hero h1 {
            font-size: 4em;
            margin: 0;
        }
        .hero img{
            width: 50%;
            height: 90%;
            object-fit: cover;
        
        }
        .nav {
            display: flex;
            justify-content: center;
            gap: 50px;
            background-color: #0a7d34;
            padding: 10px;
        }

        .nav a {
            text-decoration: none;
            color: #FCF5EF;
            font-size: 1.2em;
        }

        .intro {
            text-align: center;
            padding: 50px;
            background-color: #FCF5EF;
        }

        .products-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .products-section .box {
            flex-basis: 30%;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #0a7d34;
            color: #FCF5EF;
        }
        button {
            display: block;
            background-color: #FF7235;
            border-color: #FF7235;
            color: #FCF5EF;
            padding: 5px 10px;
            border-radius: 5px;
            text-align: center;
            /* Flexbox approach: */
            display: flex;
            justify-content: center;
        }
        h2
        {
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="img\download-transformed-removebg-preview.png" alt="EcoRoots Logo">
        </div>
        <h1>EcoRoots - Eco-Friendly Products</h1>
        <a href="cartt.html"><img src="cart.svg" alt="Cart" id="cart-icon"></a>
    </header>

    <div class="hero">
        <h1>Welcome to EcoRoots!</h1>
           <img src="img\eco.jpg" alt='img'>
    </div> 

    <div class="nav">
        <a href="aboutus.html">About Us</a>
        <a href="plantables.html">Plantables</a>
        <a href="sustainable.html">Sustainable Living</a>
    </div>

    <div class="intro">
       
        <h2> Why EcoRoots?</h2>
        <p>At EcoRoots, we believe in providing eco-conscious individuals with products that are good for the planet and good for you. From plantable items to sustainable living tools, we are committed to making a difference.</p>
    </div>
    <div class="container">
        <div class="box">
            <img src="https://i0.wp.com/theaffordableorganicstore.com/wp-content/uploads/2021/06/Cow-Dung-Powder-100gms.jpg?w=300&ssl=1"alt="">
            <h3>Cow Dung Powder (100gms) </h3>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>₹19</p>
            <button onclick="addToCart('Cow Dung Powder (100gms)', 19)">Add to Cart</button>
        </div>

        <div class="box">
            <img src="https://www.happygroeco.com/wp-content/uploads/2024/05/IMG_20220629_161204_226-300x300.webp"alt="">
            <h3>Plantable Color Pencils (10pcs)</h3>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p>₹120</p>
            <button onclick="addToCart('Plantable Color Pencils (10pc)', 120)">Add to Cart</button>
        </div>

        <div class="box">
            <img src="https://www.happygroeco.com/wp-content/uploads/2024/05/NewsPaper-in-Box-300x300.jpeg.webp"alt="">
            <h3>Plantable Newspaper Pencils (10pcs)</h3>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>₹120</p>
            <button onclick="addToCart('Plantable Newspaper Pencils (10pc)', 120)">Add to Cart</button>
        </div>

        <div class="box">
            <img src="https://www.happygroeco.com/wp-content/uploads/2024/05/Pens_1-300x300.jpg.webp"alt="">
            <h3>Plantable Pens (10pcs) </h3>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>₹150</p>
            <button onclick="addToCart('Plantable Pens (10pcs) ', 150)">Add to Cart</button>
        </div>
    </div>

    <footer>
        <p> &copy; 2024 EcoRoots. All rights reserved.</p>
    </footer>
</body>
</html>
