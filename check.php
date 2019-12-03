<?php
if(isset($_POST['infubtn'])){
  require("hostconf.php");
  $infuid = $_POST['infucode'];
  $queryc = "SELECT * FROM `discount` WHERE `discount`.`infulencer` = '$infuid'";
  $result = mysqli_query($connnect, $queryc);
  $posts = mysqli_fetch_array($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  $fans = $posts['fans'];
  


  mysqli_close($connnect);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="./bootstrap.min.css" />
  <title>Document</title>
</head>
<body class="text-center p-">
  <div style="height:100vh" class=" d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-black-50 mb-3">Influencer's panel</h1>
    <h6 class="text-black-50 mb-5">Check You'r ad Status</h6>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input name="infucode" class="btn btn-outline-info " type="text" placeholder="کد خود را وارد کنید">
      <button name="infubtn" class="btn btn-outline-info">check</button>
    </form>
    <?php
      if(isset($_POST['infubtn'])){
          echo "<h2 class='text-black-50 mt-5'>"."تعداد افرادی که با کد شما خرید کرده اند"."</H2>";
          echo "<h2 class='text-success mt-2'>".$fans ."</H2>";
          if($posts ==""){
            echo "<h2 class='text-danger mt-2'>"."کد اشتباه است" ."</H2>";
          }
      }
    ?>
 
  </div>
</body>
</html>