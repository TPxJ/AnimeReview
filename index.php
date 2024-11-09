<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <title>AnimeReview</title>
</head>

<body>
    <?php
    include("./navbar.php");
    $s = "";
    if(isset($_GET["search"])){
        $s = $_GET["search"];
    }
    ?>

    <div class="container mx-auto">
        <div class="row">
            <?php
            include("./mysqlconnect.php");
            $result = mysqli_query($conn, "SELECT * FROM `animedata` WHERE `a_name` LIKE '%{$s}%'");
            $resultAssoc = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($resultAssoc as $a) {
                echo '<div class="col-lg-3">';
                echo '<div class="card" style="width: 18rem;">';
                echo '<img src="' . $a["a_img"] . '" class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $a["a_name"] . '</h5>';
                echo '<p class="card-text">' . $a["a_desc"] . '</p>';
                echo '<a class="text-white" href="vote.php?id=' . $a["a_id"] . '"><img style="width:1rem;" src="./IMG/heart.png"> ' . $a["a_star"] . ' Vote</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            ?>
        </div>
    </div>

    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>