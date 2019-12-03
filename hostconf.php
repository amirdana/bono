<?php
$connnect = mysqli_connect('localhost','root','a80809090','purch');
if(mysqli_connect_errno()){
  echo "failed". mysqli_connect_errno();
}