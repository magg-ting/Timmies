<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Set the character encoding for the document -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tim Hortons">
    <meta name="description"
        content="Home of Canada's favourite coffee. Find the Tim Hortons closest to you and start your Tims journey.">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans&family=Poppins&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="script/script.js" defer></script>
    <title>Menu | Tim Hortons</title>
</head>

<body>
    <header>
         <!-- Header section of the webpage -->

        <?php include("includes/navbar.php"); ?>
    </header>

    <main class="products-page">

        <!-- Main content of the webpage -->
        <h1>Menu</h1>

        <!-- Form for the menu section -->
        <form id="menu" action="#" method="post">

            <!-- Main container for arranging content -->
            <ul class='main-container'>

                <!-- First Column of 4 Images -->
                <div class="product-section">

                    <!-- Product 1 -->
                    <li class="product-item" id="product-item1">
                        <figure class="product-image-container">
                            <img src="images/product-coffee-320w.jpg" alt="Product-Coffee">
                        </figure>
                        <div class="product-info">
                            <p>Brewed Coffee - small size</p>
                            <p>$1.59</p>
                            <label for="product-1" class="add-to-cart-label">
                                Add to Cart
                                <input type="checkbox" class="add-to-cart-checkbox" id="product-1" name="product-1">
                            </label>
                        </div>
                    </li>

                    <!-- Product 2 -->
                    <!-- ... (similar structure for other products) ... -->
                    <li class="product-item" id="product-item2">
                        <figure class="product-image-container">
                            <img src="images/Blackberry Yuzu Sparkling Quencher.jpg"
                                alt="Blackberry Yuzu Sparkling Quencher">
                        </figure>
                        <div class="product-info">
                            <p>Blackberry Yuzu Sparkling Quencher</p>
                            <p>$3.29</p>
                            <label for="product-2" class="add-to-cart-label">
                                Add to Cart
                                <input type="checkbox" class="add-to-cart-checkbox" id="product-2" name="product-2">
                            </label>
                        </div>
                    </li>

                    <!-- Product 3 -->
                    <!-- ... (similar structure for other products) ... -->
                    <li class="product-item" id="product-item3">
                        <figure class="product-image-container">
                            <img src="images/Orange Ginger Sparkling Quencher.jpg"
                                alt="Orange Ginger Sparkling Quencher">
                        </figure>
                        <div class="product-info">
                            <p>Orange Ginger Sparkling Quencher</p>
                            <p>$3.29</p>
                            <label for="product-3" class="add-to-cart-label">
                                Add to Cart
                                <input type="checkbox" class="add-to-cart-checkbox" id="product-3" name="product-3">
                            </label>
                        </div>
                    </li>

                    <!-- Product 4 -->
                    <!-- ... (similar structure for other products) ... -->
                    <li class="product-item" id="product-item4">
                        <figure class="product-image-container">
                            <img src="images/Double Chocolate Donut.jpg" alt="Double Chocolate Donut">
                        </figure>
                        <div class="product-info">
                            <p>Double Chocolate Donut</p>
                            <p>$1.49</p>
                            <label for="product-4" class="add-to-cart-label">
                                Add to Cart
                                <input type="checkbox" class="add-to-cart-checkbox" id="product-4" name="product-4">
                            </label>
                        </div>
                    </li>
                </div>

                <!-- Second Column of 4 Images -->
                <div class="product-section">

                    <!-- Product 5 -->
                    <!-- ... (similar structure for other products) ... -->
                    <li class="product-item" id="product-item5">
                        <figure class="product-image-container">
                            <img src="images/Dream Cookie with M&M Minis.jpg" alt="Dream Cookie with M&M Minis">
                        </figure>
                        <div class="product-info">
                            <p>Dream Cookie with M&M Minis</p>
                            <p>$2.29</p>
                            <label for="product-5" class="add-to-cart-label">
                                Add to Cart
                                <input type="checkbox" class="add-to-cart-checkbox" id="product-5" name="product-5">
                            </label>
                        </div>
                    </li>

                    <!-- Product 6 -->
                    <!-- ... (similar structure for other products) ... -->
                    <li class="product-item" id="product-item6">
                        <figure class="product-image-container">
                            <img src="images/Reese’s Minis Dream Cookie with pecans.jpg"
                                alt="Reese’s Minis Dream Cookie with pecans">
                        </figure>
                        <div class="product-info">
                            <p>Reese’s Minis Dream Cookie with pecans</p>
                            <p>$2.29</p>
                            <label for="product-6" class="add-to-cart-label">
                                Add to Cart
                                <input type="checkbox" class="add-to-cart-checkbox" id="product-6" name="product-6">
                            </label>
                        </div>
                    </li>

                    <!-- Product 7 -->
                    <!-- ... (similar structure for other products) ... -->
                    <li class="product-item" id="product-item7">
                        <figure class="product-image-container">
                            <img src="images/Rocky Road Dream Cookie with pecans.jpg"
                                alt="Rocky Road Dream Cookie with pecans">
                        </figure>
                        <div class="product-info">
                            <p>Rocky Road Dream Cookie with pecans</p>
                            <p>$2.29</p>
                            <label for="product-7" class="add-to-cart-label">
                                Add to Cart
                                <input type="checkbox" class="add-to-cart-checkbox" id="product-7" name="product-7">
                            </label>
                        </div>
                    </li>

                    <!-- Product 8 -->
                    <!-- ... (similar structure for other products) ... -->
                    <li class="product-item" id="product-item8">
                        <figure class="product-image-container">
                            <img src="images/product-coffee-320w.jpg" alt="Product-Coffee">
                        </figure>
                        <div class="product-info">
                            <p>Brewed Coffee - medium size</p>
                            <p>$1.83</p>
                            <label for="product-8" class="add-to-cart-label">
                                Add to Cart
                                <input type="checkbox" class="add-to-cart-checkbox" id="product-8" name="product-8">
                            </label>
                        </div>
                    </li>
                </div>
            </ul>

            <!-- Centered button for checkout -->
            <button type="submit" class="checkout-button" value="Submit">Proceed to Checkout</button>
        </form>
    </main>

    <!-- Footer section of the webpage -->
    <footer>
        <?php include("includes/footer.php"); ?>
    </footer>
</body>

</html>