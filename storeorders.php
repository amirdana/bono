<?php
session_start();
$mypass = $_SESSION['pass'];
if( $mypass == 'a80809090' || $mypass == 'inf1'){
  require("hostconf.php");
$time =  date("Y/m/d");
$time10 =  date("m");

$query='SELECT * FROM `customers`';
$query10="SELECT `customers`.`payedamount` FROM  `customers` WHERE date = '$time' ";
$query20="SELECT `customers`.`payedamount` FROM  `customers` WHERE date LIKE '%-$time10-%'";
$query30="UPDATE `visits` SET `volume`=0";
$query31="UPDATE `visits` SET `volume2`=0";
$query32="UPDATE `visits` SET `volume3`=0";

$result = mysqli_query($connnect, $query);
$result10 = mysqli_query($connnect, $query10);
$result20 = mysqli_query($connnect, $query20);

//removing visits data here in 10pm every first day of month
if(date("d/ha")=="01/10pm"){
 mysqli_query($connnect, $query30);
 mysqli_query($connnect, $query31);
 mysqli_query($connnect, $query32);
}

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
$posts10 = mysqli_fetch_all($result10, MYSQLI_ASSOC);
$posts20 = mysqli_fetch_all($result20, MYSQLI_ASSOC);



mysqli_free_result($result);
mysqli_free_result($result10);
mysqli_free_result($result20);


$tsales = 0;
foreach($posts as $index=>$val ){$tsales = $val['payedamount']+ $tsales;}
$dsales = 0;
foreach($posts10 as $index=>$val ){$dsales = $val['payedamount']+ $dsales;}
$msales = 0;
foreach($posts20 as $index=>$val ){$msales = $val['payedamount']+ $msales;}

mysqli_close($connnect);
}else header("location:ap.php")

?>

<?php
require("hostconf.php");
$query2='SELECT * FROM `visits`';
$result2 = mysqli_query($connnect, $query2);
$posts2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
mysqli_free_result($result2);

$an = [];//visits for index page for each day get pushed to this array by the order of day
foreach($posts2 as $index2=>$val2 ){array_push($an,$val2['volume']);}
mysqli_close($connnect);
?>

<?php
require("hostconf.php");
$query3='SELECT * FROM `visits`';
$result3 = mysqli_query($connnect, $query3);
$posts3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
mysqli_free_result($result3);

$an2 = [];//visits for order_page page for each day get pushed to this array by the order of day
foreach($posts3 as $index3=>$val3 ){array_push($an2,$val3['volume2']);}
mysqli_close($connnect);

?>

<?php
require("hostconf.php");
$query4='SELECT * FROM `visits`';
$result4 = mysqli_query($connnect, $query4);
$posts4 = mysqli_fetch_all($result4, MYSQLI_ASSOC);
mysqli_free_result($result4);

$an3 = [];//visits for sampels page for each day get pushed to this array by the order of day
foreach($posts4 as $index4=>$val4 ){array_push($an3,$val4['volume3']);}
mysqli_close($connnect);
?>

<?php

if(isset($_POST['cupponbtn'])){
  require("hostconf.php");
  $cupponid = $_POST['thecuppon'];
  $queryc = "INSERT INTO `discount`(`infulencer`) VALUES('$cupponid')";
  mysqli_query($connnect, $queryc);
  mysqli_close($connnect);
  header("location:storeorders.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="./bootstrap.min.css">
    <style>
    
    .body{
      transition-duration:1000s;
    }
      .storbg {
        background: #1e1e2e;
      }
      .visitors {
        
          background: #27293d;
          border-radius: 5px;
          min-height: 160px;
          
      }
      .mycan {
            width: 100%;
            height: 400px;
            padding-bottom: 20px;
      }
      .myboxes {
        background: #27293d;
        min-height: 200px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
     .cuppon{
      
       background:#27293d;
       border-radius:10px;
     }
    </style>
  <title>Document</title>
</head>
<body class="storbg">
 
  <div class="flex-column d-flex justify-content-center p-5">
  <div class="row d-flex justify-content-between">
  
    <div class="col-md-12 visitors mt-2" >
      <div class="mycan">
    <canvas id="myChart"></canvas>
    </div>
    </div>
   

  </div>
  
  <?php if($_SESSION['pass'] == 'a80809090'):?>

    <div class="row d-flex justify-content-center  ">
    <div class="cuppon  mt-5 p-2">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="thecuppon" class="btn btn-outline-secondary text-white" type="text" placeholder="Enter Cuppon">
        <button class="btn btn-outline-danger" name="cupponbtn">submit</button>
      </form>
      <form class="mt-2" method="" action="">
        <input name="" class="btn btn-outline-secondary text-white" type="text" placeholder="Enter">
        <button class="btn btn-outline-danger" name="">submit</button>
      </form>
    </div>
  </div>

  <div class="row  mt-5 d-flex justify-content-between ">
      <div class="col-md-3 myboxes text-white mt-3">
        <div class="row ">
          <h2>Total</h2>
        </div>
        <div class="row ">
          <h1><?php if($_SESSION['pass'] == 'a80809090')  echo $tsales?> <span>T</span></h1>
        </div>
        
      </div>
      <div class="col-md-3 myboxes text-white  mt-3">
      <div class="row ">
          <h2>Monthly</h2>
        </div>
        <div class="row ">
          <h1 ><?php if($_SESSION['pass'] == 'a80809090')  echo $msales?> <span>T</span> </h1>
        </div>

      </div>
      <div class="col-md-3 myboxes text-white  mt-3">
      <div class="row ">
          <h2>Daily</h2>
        </div>
        <div class="row ">
          <h1 ><?php if($_SESSION['pass'] == 'a80809090')  echo $dsales?> <span>T</span></h1>
        </div>

      </div>
      <div class="col-md-2 myboxes text-white  mt-3">
      <div class="row ">
         
          <h1 class="text-white"><?php echo date('Y-m-d')?></h1>
        </div>
        <div class="row ">
        <h4><?php echo date("h:i:sa")  ?></h4>
        </div>
        <div class="row mt-2 ">
        <button class="btn btn-sm btn-outline-danger" onclick="countdown()">CountDown</button>
        </div>

      </div>      
  </div>
  <?php endif?>
  
  <?php foreach(array_reverse($posts) as $ins):?>
    <div >
      <div class="row mt-5 d-flex justify-content-around">
        <div class="col-md-3 order-box">
          <?php echo ($_SESSION['pass'] == 'a80809090')? '<h6>'.$ins['city'].' , '.$ins['subcity'].' '.$ins['addres'].' , '.$ins['zip'].'</h6>': ''?>
          <div>
          <a target="_blank" href="<?php echo $ins['image']  ?>"> عکس کاربر</a>
          <a class=" <?php if(file_exists('donefiles/'.$ins['phone'].'.jpeg')){echo 'bg-success';} ?>" target="_blank" href="<?php echo "/biz/donefiles/".$ins['phone'].'.jpeg'  ?>">فایل نهایی</a>
          </div>
        </div>
        <div class="col-md-3 order-box">
        
          <h4>تحویل : <?php echo ($ins['delever']=="on")? "بله" : "خیر" ?> </h4>
          <h4>قاب : <?php echo ($ins['frame']=="on")? "بله" : "خیر" ?> </h4>
        </div>
        <div class="col-md-3 order-box">
          <div>
          <h4><?php echo $ins['name'] ?></h4>
          
          <h6><?php echo ($_SESSION['pass'] == 'a80809090')?  $ins['phone'] : '' ?></h6>
          
          </div>
          <p><?php echo $ins['des'] ?></p>
         
        </div>
        <div class="col-md-3 order-box text-dark <?php echo ($ins['payed']=="yes")? "success" : "failed";  ?>">
         
          <h1><?php echo $ins['id'] ?> ID</h1>
          <h3><?php  echo ($ins['payed']=="yes")? "پرداخت شد" : "ناموفق" ?></h3>
        </div>
      </div>
    </div>
  <?php endforeach ?>
 
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script>
   
  var ctx = document.getElementById('myChart').getContext('2d');
  var chart = new Chart(ctx, {
    type: 'bar',

    // The data for our dataset
    data: {
        labels: [<?php  for($i=1;$i<=31;$i++) echo $i.',' ?>],
        datasets: [{
            label: 'Home',
            backgroundColor:'rgb(211,70,177)',
            borderColor: 'rgb(211,70,177)',
            data: [<?php foreach($an as $value){echo $value.',';}?>]
        }, {
          label: "check",
          borderColor: "rgb(5,100,180)",
          backgroundColor:'rgb(146,55,124)',
          data: [<?php foreach($an2 as $value){echo $value.',';}?>]
        }, {
          label: "samp",
          borderColor: "rgb(1,135,205,0.2)",
          backgroundColor:'rgb(94,33,79)',
          data: [<?php foreach($an3 as $value){echo $value.',';}?>]
        }]
      },

    // Configuration options go here
    options: {
      responsive:true,
      maintainAspectRatio:false,
      duration:2000,
      
    }
});
</script>

<script>
  countdown = () =>{
   
  }
</script>

</body>
</html>
