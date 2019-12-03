<?php
  session_start();
  if(isset($_POST['submit'])){
  $_SESSION['pass'] = $_POST['password'];

  if($_SESSION['pass'] == 'a80809090' || $_SESSION['pass'] == 'inf1'){
    header("Location: storeorders.php");
  }
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
<body  class="text-center d-flex flex-column justify-content-center aling-items-center">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <h1 class="text-black-50">ادمین</h1>
    <input class="btn btn-outline-info" type="text" name="password">
    <input class="btn btn-outline-info" type="submit" name="submit">
  </form>
  <form action="uploadfinal.php" method="POST" enctype="multipart/form-data">
  <h1 class="mt-5 text-black-50 mb-3">ارسال فایل نهایی</h1>
 
  <input class="btn btn-outline-info" type="file" name="uploadfn">
  <input class="btn btn-outline-info p-2" type="submit" name="submit">
    
  </form>
</body>
</html>

