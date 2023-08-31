<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tim Hortons">
    <meta name="description" content="Home of Canada's favourite coffee. Find the Tim Hortons closest to you and start your Tims journey.">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="script/script.js" defer></script>
    <title>HomePage | Tim Hortons</title>
</head>
<body>
    <header>
        <?php include("includes/navbar.php"); ?>
    </header>
    <main class="landing-page">
        <!-- There is no visible H1 heading on the homepage, but we will include a hidden h1 element for SEO purposes -->
        <h1 class="hidden">Canada's Favourite Coffee</h1>
        <section class="carousel-container">
            <div class="carousel">
                <a href="products.php#product-item5" title="Order our new Dream Cookies™ now.">
                    <!-- Since the hero image file is intrinsically quite big, a srcset is added to allow the browser to load smaller files for smaller viewports -->
                    <img 
                        srcset="images/carousel-dreamcookies-320w.jpg 320w, images/carousel-dreamcookies-400w.jpg 400w, 
                                images/carousel-dreamcookies-750w.jpg 750w, images/carousel-dreamcookies-1000w.jpg 1000w" 
                        sizes="(max-width: 350px) 320px, (max-width: 450px) 400px, 
                                (max-width: 800px) 750px, 1000px" 
                        src="images/carousel-dreamcookies-1000w.jpg" 
                        alt="Soft and chewy on the inside, the new Dream Cookies™ are freshly baked throughout the day."
                    >
                </a>
            </div>
            <!-- The 2nd and 3rd carousel image is hidden by default, and will be shown upon clicking the respective buttons -->
            <div class="carousel">
                <a href="products.php#product-item1" title="Order our freshly brewed coffee now.">
                    <img 
                        srcset="images/carousel-freshcoffee-320w.jpg 320w, images/carousel-freshcoffee-400w.jpg 400w, 
                                images/carousel-freshcoffee-750w.jpg 750w, images/carousel-freshcoffee-1000w.jpg 1000w" 
                        sizes="(max-width: 350px) 320px, (max-width: 450px) 400px, 
                                (max-width: 800px) 750px, 1000px" 
                        src="images/carousel-freshcoffee-1000w.jpg" 
                        alt="Tim Hortons' original blend is brewed every 20 minutes and made with 100% ethically-sourced*, premium arabica beans."
                    >
                </a>             
            </div>
            <div class="carousel">
                <a href="products.php#product-item2" title="Order our new Sparkling Quenchers now.">
                    <img 
                        srcset="images/carousel-quenchers-320w.jpg 320w, images/carousel-quenchers-400w.jpg 400w, 
                                images/carousel-quenchers-750w.jpg 750w, images/carousel-quenchers-1000w.jpg 1000w" 
                        sizes="(max-width: 350px) 320px, (max-width: 450px) 400px, 
                                (max-width: 800px) 750px, 1000px" 
                        src="images/carousel-quenchers-1000w.jpg" 
                        alt="The new quenchers are crafted with sparkling water and served over ice for a lightly bubbly, refreshing experience."
                    >
                </a>                
            </div>
            <div class="carousel-btn-container">
                <button type="button" class="carousel-btn"></button>
                <button type="button" class="carousel-btn"></button>
                <button type="button" class="carousel-btn"></button>
            </div>
        </section>
        <section class="promotion">
            <h2>Latest Offers</h2>
            <!-- TODO: add the href for each offer -->
            <div class="promo-container">
                <div class="promo-wrapper">
                    <figure>
                        <img src="images/promo-freedrink.jpg" alt="Free cold drinks for new Tims Rewards members">
                        <figcaption>Sign up for Tims Rewards to enjoy a complimentary cold drink.</figcaption>
                    </figure>
                    <a class="learn-more" href="#" alt="Learn more about the offer details">Learn more</a>
                </div>
                <div class="promo-wrapper">
                    <figure>
                        <img src="images/promo-happyhour.jpg" alt="Buy 1 get 1 for happy hour drinks">
                        <figcaption>Buy 1 get 1 free offers on all cold drinks from 2 to 5pm.</figcaption>
                    </figure>
                    <a class="learn-more" href="#" alt="Learn more about the offer details">Learn more</a>
                </div>
                <div class="promo-wrapper">
                    <figure>
                        <img src="images/promo-doublepoints.jpg" alt="Earn double points on every order during July 22-23">
                        <figcaption>Earn 2X Tims Rewards points on every order this weekend.</figcaption>
                    </figure>    
                    <a class="learn-more" href="#" alt="Learn more about the offer details">Learn more</a>
                </div>
            </div>     
        </section>
        <section class="map">
            <h2>Find Us</h2>
            <div class="map-container">
                <iframe frameborder="0" referrerpolicy="no-referrer-when-downgrade" allowfullscreen loading="lazy"
                        src="https://www.google.com/maps/d/u/0/embed?mid=1UePWm_uvRYTeWg9OKvLjpN8B1p8kPf0&ehbc=2E312F&z=12">   
                </iframe>
            </div>
        </section>
    </main>
    <footer>
        <?php include("includes/footer.php"); ?>
    </footer>
</body>
</html>