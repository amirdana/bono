<?php
  session_start();
  $uid = $_SESSION['orderid'];
  require("hostconf.php");
  $query="SELECT * FROM `customers` WHERE `customers`.`usserid` ='$uid' ";
  $result = mysqli_query($connnect, $query);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);

  $existingid = 0;
  $payed = 0;
  foreach($posts as $index ){
    $existingid = $index['usserid'];
    $payed = $index['payedamount'];  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>
<div style="overflow-x:hidden;">
<?php
  require('./mynavbar.html');
  
  if($existingid!=0 && $payed!=0):?>
  
    <div class="text-center p-5 mystatus d-flex align-items-center justify-content-center row">
      <div class="col-md-4 d-flex justify-content-center mt-5">
       <img   src="./srcs/check.png" alt="">
      </div>
      <div class="col-md-6">
        <h3>سفارش شما<span class="text-success"> ثبت شده</span> و در حال آماده سازی میباشد</h3>
        <h3 class="mt-5">مبلغ پرداخت شده : <?php echo $payed ?></h3>
      </div>
      
    </div>
  <?php endif?>
  <?php
  if($existingid!=0 && $payed ==0):?>
    <div class="text-center p-5 mystatus d-flex align-items-center justify-content-center row">
      <div class="col-md-4  d-flex justify-content-center my-5">
       <img   src="./srcs/checkfalse.png" alt="">
      </div>
      <div class="col-md-6 ">
        <h3>سفارش شما<span class="text-danger"> ثبت شده</span> ولی پرداخت انجام نشده است</h3>
        <h6 class="mt-5">اگر مبلغی از حساب شما کم شده و در طی 48 ساعت آینده به حسابتان بازگردانده نشد با پشتیبانی تماس بگیرید</h6>
      </div>
      
    </div>


  <?php endif?>
  <?php
  if($existingid == 0):?>

    <div class="text-center p-5 mystatus d-flex align-items-center justify-content-center row">
      <div class="col-md-4  d-flex justify-content-center my-5">
       <img   src="./srcs/checkfalse.png" alt="">
      </div>
      <div class="col-md-6 ">
        <h3>سفارش شما<span class="text-danger"> ثبت نشده</span>  است</h3>
        <h6 class="mt-5">از درست بودن کد پیگیری خود اطمینان حاصل کنید</h6>
        <h6 class="mt-2">اگر با شماره موبایل پیگیری میکنید صفر اول را وارد نکنید</h6>
      </div>
      
    </div>

  <?php endif?>
  </div>
</body>
</html>