<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />


    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="css/style.css" />

    <title>E-Shop</title>
</head>

<body>

    <!-- Header -->
    <?php include "includes/common/header.php"; ?>

    <!-- HomeContent Dynamically -->
    <?php 
    ///Code...
        if(isset($_GET['product'])){
            include "includes/product.php";
        
        }else if(isset($_GET['cart'])){
            include "includes/cart.php";

        }else{
            include "includes/home_content.php"; 
        }
    ?>

    <!-- Footer -->
    <?php include "includes/common/footer.php"; ?>

    <!-- PopUP -->
    <?php include "includes/popup.php"; ?>

</body>

<!-- Glide Carousel Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
<!-- Animate On Scroll -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JavaScript -->
<script src="js/products.js"></script>
<script src="js/index.js"></script>
<script src="js/slider.js"></script>

</html>