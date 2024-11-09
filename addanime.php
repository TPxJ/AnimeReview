<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/index.css ">
  <title>Add New Anime</title>
</head>

<body>
  <center><h1 class="text-white">Add New Anime</h1></center>
  <form style="margin: 2rem;" action="" method="post">
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label text-white">Name</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control bg-dark text-white" name="a-name">
      </div>
    </div>
    <div class="row mb-3 ">
      <label for="inputPassword3" class="col-sm-2 col-form-labe text-white">Describtion</label>
      <div class="col-sm-10 ">
        <textarea type="text" class="form-control bg-dark text-white" name="a-desc"></textarea>
      </div>
    </div>  
    <div class="row mb-3 ">
      <label for="inputPassword3" class="col-sm-2 col-form-labe text-white">IMAGE(Link)</label>
      <div class="col-sm-10 ">
        <input type="text" class="form-control bg-dark text-white" name="a-img">
      </div>
    </div>  
    <button type="submit" class="btn btn-success" name="submit">Add</button>
  </form>
  <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php


if(isset($_POST['submit']))
{
  include("mysqlconnect.php");

  $sql = "INSERT INTO `animedata`(`a_name`, `a_desc`, `a_img`, `a_star`) VALUES ( '{$_POST["a-name"]}' ,'{$_POST["a-desc"]}' , '{$_POST["a-img"]}', 0 )";
  $add = mysqli_query($conn , $sql);

  if($add){
    header("Location:index.php");
  }
}


?>

