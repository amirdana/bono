<?php 
  session_start();
  $uidd = $_SESSION['orderid'];
  require("hostconf.php");
  $query="SELECT * FROM `customers` WHERE `customers`.`usserid` ='$uidd' ";
  $result = mysqli_query($connnect, $query);
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  $existingid = 0;
  $payed = 0;
  $del = "مشخص نشده";
  foreach($posts as $index ){
    $existingid = $index['usserid'];
    $payed = $index['payedamount'];  
    $del = $index['deltime'];  
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php require("./mynavbar.html") ?>
  <br>
  <br>
  <br>
  <div class="container mt-5">
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr class="text-center">
          <th>توضیحات</th>
          <th>وضعیت سفارش</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center">
          <td><?php echo '<a class="bg-success p-2 mb-2 text-white" href="donefiles/'.$uidd.'.jpeg" download>دانلود فایل شما</a>'?></td>
          <td>لینک دانلود</td>
        </tr>
        <tr class="text-center">
          <td><?php echo $payed ?></td>
          <td>مبلغ پرداخت شده-تومان</td>
        </tr>
        <tr class="text-center">
          <td><?php echo $del ?></td>
          <td>زمان تحویل</td>
        </tr>
        <tr class="text-center">
          <td>لطفا فایل را دانلود کرده و ذخیره کنید </td>
          <td>توضیحات</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>