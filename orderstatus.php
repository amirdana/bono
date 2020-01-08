<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
 
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title> بونو - پیگیری سفارش</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>
    <?php require("./mynavbar.html") ?>
    <div class="orderstats text-center">
      
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-signin">
    <h2>bono</h2>
    <h5 class=" mb-3 font-weight-normal">کد پیگری یا شماره موبایل خود را (بدون صفر اول) وارد کنید</h5>
        <?php
          if(isset($_POST['sub'])){
          $ordernum = $_POST['stat'];
            if(file_exists('donefiles/'.$ordernum.'.jpeg')){
               echo '<a class="bg-success p-2 mb-2 text-white" href="donefiles/'.$ordernum.'.jpeg" download>دانلود فایل شما</a>';
               session_start();
               $_SESSION['orderid'] = $ordernum;
               header("Location: ready.php");
                
            }else{
              session_start();
              $_SESSION['orderid'] = $ordernum;
              header("Location: nready.php");
            }
                          
        }
        ?>
      <input name="stat" type="number" id="inputEmail" class="form-control text-center" placeholder="8891***" required autofocus>
      
      <button name="sub" class="btn btn-lg btn-info btn-block mt-3 " type="submit">پیگیری</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    </form>
    
    </div>
  </body>
</html>
