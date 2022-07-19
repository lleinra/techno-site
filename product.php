<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ez Farming Inc.</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <section id="navbar-section">
        <?php
        require_once('./navbar.php');
        ?>
    </section>

    <section id="product-section">
        <?php
        require_once('./water-irrigation.php');
        ?>
    </section>

    <section id="footer-section">
        <?php
        require_once('./footer.php');
        ?>
    </section>
</body>

</html>