<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ez Farming Inc.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <script src="script.js" defer></script>
</head>

<body>
    <section id="navbar-section">
        <?php
        require_once('./navbar.php');
        ?>
    </section>

    <section id="featured-product-section">
        <div class="featured-product">
            <h1>AUTOMATED DRIP HYDRATING SYSTEM</h1>
            <p>Also works well for farmlands with hard unfertile
                soil, arid soil depleted from drought and can also
                be used for soil situated in different terrains.</p>
            <a href="product.php">BUY THE PRODUCT</a>
        </div>
    </section>

    <section id="featured-service-section">
        <div class="top-section">
            <h1>Our Services Include</h1>
        </div>
        <div class="bottom-section">
            <div class="featured-service">
                <h3>PEST CONTROL</h3>
                <p>Provides great quality of pest management and
                    control regarding crop infestations and animal
                    repellents ensuring the safety and quality of
                    your crops.</p>
                <a href="services.php">GO TO SERVICES</a>
            </div>
            <img src="pest-control.jpg" alt="pest-control.jpg">
        </div>
    </section>

    <section id="reviews-section">
        <h1>Read some reviews of our product!</h1>
        <div class="reviews">
            <div class="card">
                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="username">Iamy Ourf Ather</div>
                <p class="comment">Great product.</p>
            </div>
            <div class="card">
                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="username">Bill Buttlicker</div>
                <p class="comment">Customer service
                    was not aggressive, not hostile, and definitely not
                    difficult.
                </p>
            </div>
            <div class="card">
                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                </div>
                <div class="username">Anonymous</div>
                <div class="comment">Amazing to have watered plants
                    upon waking up. Never thought I could grow
                    anything. Now I don't need to travel far just
                    to get myself some vegetables.</div>
            </div>
            <div class="card">
                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="username">Juan Pedro</div>
                <p class="comment">We have this farmland that just
                    wastes space and I thought we'll never use it
                    ever. This is an amazing idea.</p>
            </div>
            <div class="card">
                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="username">your username</div>
                <p class="comment">Very easy to install and use..
                    10/10 would order again.
                </p>
            </div>
            <div class="card">
                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="username">Engr. Santos</div>
                <p class="comment">This product is absolutely amazing!
                    Farming has never been easier and I have more time for
                    myself. Would definitely recommend this.
                </p>
            </div>
            <div class="card">
                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                </div>
                <div class="username">Jose Dela Cruz</div>
                <p class="comment">
                    Very nice customer service and fast delivery.
                </p>
            </div>
            <div class="card">
                <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="username">A</div>
                <p class="comment">Very nice.
                </p>
            </div>
        </div>
    </section>

    <section id="uses-section">
        <h1>ACTIVATE VIA REMOTE OR LET THE MACHINE DO ITS JOB</h1>
        <div class="uses">
            <div class="use">
                <div class="title">
                    <div class="icon"><svg viewBox="0 0 20 20">
                            <use xlink:href="./all.svg#gg-remote" />
                        </svg></div>
                    <p>REMOTE ACCESS</p>
                </div>
                <div class="description">Activate the device
                    remotely by sending a message. The device will
                    pick up the message and will act as a switch
                    to turn the sprinklers on.</div>
            </div>
            <div class="use">
                <div class="title">
                    <div class="icon"><svg viewBox="0 0 20 20">
                            <use xlink:href="./all.svg#gg-bot" />
                        </svg></div>
                    <p>MOIST DETECTOR</p>
                </div>
                <div class="description">The device has a built-in
                    moist level detector. Once the device detected
                    the lack of moisture, the device will
                    automatically activate the sprinklers.</div>
            </div>
        </div>
    </section>

    <section id="footer-section">
        <?php
        require_once('footer.php');
        ?>
    </section>
</body>

</html>