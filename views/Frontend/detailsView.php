<?php include "partials/head.php" ?>
<body>
<div class="custom-container">
        <div class="custom-product-details">
            <div class="custom-product-images">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="http://localhost:8080/image/kks_beach.jpg" alt="Product Image 1">
                            <div class="custom-swiper-button-prev"><</div>
                            <div class="custom-swiper-button-next">></div>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://localhost:8080/image/kks_beach.jpg" alt="Product Image 2">
                            <div class="custom-swiper-button-prev"><</div>
                            <div class="custom-swiper-button-next">></div>
                        </div>
                        <div class="swiper-slide">
                            <img src="http://localhost:8080/image/kks_beach.jpg" alt="Product Image 3">
                            <div class="custom-swiper-button-prev"><</div>
                            <div class="custom-swiper-button-next">></div>
                        </div>
                        <!-- Add more images as needed -->
                    </div>
                </div>
            </div>
            
            <div class="custom-product-info">
                <h1 class="custom-product-title"><?php echo $name ?></h1>
                <b><?php  ?></b>
                <p class="custom-product-price"><?php echo $price  ?></p>
                <p class="custom-product-description"><?php echo $description ?></p>
                <a href="#" class="custom-buy-now-button">Buy Now</a>
            </div>
        </div>
        <div class="custom-related-products">
            <h2>Related Products</h2>
            <div class="custom-related-product">
                <img src="related-product1.jpg" alt="Related Product 1">
                <div class="custom-related-product-info">
                    <h3 class="custom-related-product-title">Related Product 1</h3>
                    <p class="custom-related-product-price">$49.99</p>
                </div>
            </div>
            <div class="custom-related-product">
                <img src="related-product2.jpg" alt="Related Product 2">
                <div class="custom-related-product-info">
                    <h3 class="custom-related-product-title">Related Product 2</h3>
                    <p class="custom-related-product-price">$59.99</p>
                </div>
            </div>
            <div class="custom-related-product">
                <img src="related-product3.jpg" alt="Related Product 3">
                <div class="custom-related-product-info">
                    <h3 class="custom-related-product-title">Related Product 3</h3>
                    <p class="custom-related-product-price">$69.99</p>
                </div>
            </div>
            <!-- Add more related products as needed -->
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.custom-swiper-button-next',
                prevEl: '.custom-swiper-button-prev',
            },
        });
    </script>
</body>
</html>
