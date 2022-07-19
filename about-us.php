<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ez Farming Inc.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about-us.css">
    <script src="script.js" defer></script>
</head>

<body>
    <section id="navbar-section">
        <?php
        require_once('./navbar.php');
        ?>
    </section>

    <section id="mission-vision-section">
        <div class="mission-vision">
            <div class="tabs">
                <div class="tab active">
                    <button class="tab-btn">
                        Our Mission
                    </button>
                </div>
                <div class="tab">
                    <button class="tab-btn">
                        Our Vision
                    </button>
                </div>
            </div>
            <div class="content">
                <p class="tab-content active">Ez Farming Inc. Introduce new technologies to facilitate the work of farmers. In other words, we want to modernize the routine or the way of farming to multiply their yields at the same time increase their profits.</p>
                <p class="tab-content">While we're working we are still learning and from that knowledge our services may improve, so that we can easily achieve all our goals for our clients.
                </p>
            </div>
        </div>
    </section>

    <section id="about-us-section">
        <div class="about-us">
            <h1>Ez Farming Inc.</h1>
            <div class="info">
                <p>
                    &emsp;&emsp; Ez Farming Inc. is a company that innovates and develops
                    agricultural technologies. Our company offers machines, devices and
                    services to modernize farming and agricultural operations. We developed
                    evaporative cooling system storage to help farmers in their crops. Ez
                    Farming Inc. was founded in year 2018 and is based in Sta. Maria, Bulacan.
                </p>
                <p>
                    &emsp;&emsp; Ez Farming Inc. has one and only goal, to make farming
                    easier. With this goal in mind, our team thinks of machines
                    that can replace farming activities which requires manual
                    attention with automated alternatives.
                </p>
                <p>
                    &emsp;&emsp; At Ez Farming Inc., we value our farmers' health and
                    time. We aim to provide easier alternatives for our farmers
                    and create a more relaxing and convenient atmosphere in their
                    farms. Our company made its mission to boost the productivity
                    of crops without having to put much more effort and time. Ez
                    Farming Inc. has the means and technology and we want to and
                    will make this available for our farmers and hope to
                    contribute to our agricultural industry.
                </p>
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