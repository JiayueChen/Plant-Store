<?php
include "./stock/data-resource.php";
include "./web-service/brain.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "./includes/styles.php"; ?>
</head>

<body>
    <header>
        <div class="container">
            <?php include "./includes/navigation.php"; ?>

            <?php include "./includes/masthead.php"; ?>

        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">

                <?php
        if(isset($markup)) {
            echo $markup;}
        ?>

            </div>
        </div>

    </main>

    <?php include "./includes/footer.php"; ?>
    <?php include "./includes/scripts.php"; ?>

</body>

</html>
