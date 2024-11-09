<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>
    <br>
    <center>
        <h1>Anime Dashboard</h1>
    </center>

    <div class="mx-3">
        <table class="table table-sm text-white">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2">Action</th>
                </tr>

            </thead>
            <?php
            include("./mysqlconnect.php");
            $result = mysqli_query($conn, "SELECT * FROM `animedata` WHERE 1");
            $resultAssoc = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($resultAssoc as $a){
            echo '<tr>';
            echo '<td><img style="height: 5rem;" src="'. $a["a_img"] .'" alt=""></td>';
            echo '<td>'. $a["a_id"] .'</td>';
            echo '<td width="50%">'. $a["a_name"] .'</td>';
            echo '<td width="10%">';
            echo '<button type="button" class="btn btn-success">Edit</button>';
            echo '</td>';
            echo '<td width="10%">';
            echo '<button type="button" class="btn btn-danger">Delete</button>';
            echo '</td>';
            echo '</tr>';
            }
            ?>

        </table>
    </div>


    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>