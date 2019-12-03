<?php
if(isset($_POST['submit'])){

  $fl = $_FILES['file'];
  if($fl['size']>20000000){
    echo '<h1>حجم فایل زیاد است</h1>';
  }else{
  $phone = $_POST['phone'];
 
  if(isset($_POST['delever'])){
    $delever = $_POST['delever'];
  }else{$delever = "off";}

  if(isset($_POST['frame'])){
    $frame = $_POST['frame'];
  }
  else{$frame = "off";};
 
  if(isset($_POST['city'])){
  $city = $_POST['city'];
  $subcity = $_POST['subcity'];
  $addres = $_POST['addres'];
  $zip = $_POST['zip'];
  }else{
    $city = 0;
    $subcity = 0;
    $addres = 0;
    $zip = 0;
  }

  if(isset($_POST['des'])){
    $des = $_POST['des'];
  }else $des = '0';

  $name = $_POST['name'];
  $userid = $phone;
  $fprc = $_POST['fprc'];
  
  $ex = explode('.',$fl['name']);
  $gg =strtolower(end($ex));

  $accepted = ['jpg','png','jpeg','pdf','jpeg 2000','webp','svg','psd','jpeg/jfif'];
  if(in_array($gg,$accepted)){
      $image='uploads/'.$userid.".".$gg;
      move_uploaded_file($fl['tmp_name'],$image);

      require("hostconf.php");

      $query="INSERT INTO `customers`(name,phone,delever,frame,city,subcity,addres,image,usserid,zip,des) VALUES('$name','$phone','$delever','$frame','$city','$subcity','$addres','$image','$userid','$zip','$des')";

    if(mysqli_query($connnect,$query)){
      echo "submited";

    }else{echo mysqli_error($connnect);}

  }else echo "<h1>فرمت عکس مورد قبول نیست</h1>";
}
}

//payment

$MerchantID = '882e0be2-7717-11e9-a693-000c29344814'; //Required
$Amount = $fprc; //Amount will be based on Toman - Required
$Description = $phone; // Required
$Email = 'UserEmail@Mail.Com'; // Optional
$Mobile = '09123456789'; // Optional
$CallbackURL = 'localhost/biz/verify.php'; // Required

$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

$result = $client->PaymentRequest(
[
'MerchantID' => $MerchantID,
'Amount' => $Amount,
'Description' => $Description,
'Email' => $Email,
'Mobile' => $Mobile,
'CallbackURL' => $CallbackURL,
]
);

//Redirect to URL You can do it also by creating a form
if ($result->Status == 100) {
Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
//برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
//Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
} else {
echo'ERR: '.$result->Status;
}


