<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <body>
 <?php require("./mynavbar.html") ?>
    <div class="bg-dark pb-2 pt-5">
      <div class="gl-ct pt-5">
        <div class=" gallery">
          <img src="./srcs/hanger1.png" alt="" />
          <button class="btn btn-sm btn-dark" data-toggle="modal" data-target=".bd-example-modal-lg">
            بزرگ نمایی
          </button>

          <div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog"
              aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg mb-5">
              
              <div class="modal-content bg-info">
              
              <img src="./srcs/hanger1.png" alt="" />
              <button type="button" class="btn btn-lg btn-info " data-dismiss="modal">بستن</button>
              </div>
              
            </div>
          </div>
        </div>
        <div class=" gallery2 ">
          <img src="./srcs/hanger2.jpg" alt="" />
          <button class="btn btn-sm btn-dark" data-toggle="modal" data-target=".bd-example2-modal-lg">
           بزرگ نمایی
          </button>

          <div class="modal fade bd-example2-modal-lg" tabindex="-1" role="dialog"
              aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content bg-info">
              <img src="./srcs/hanger2.jpg" alt="" />
              <button type="button" class="btn btn-lg btn-info " data-dismiss="modal">بستن</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="gl-ct">
        <div class=" gallery3 ">
          <img src="./srcs/pexels-photo-1434612.png" alt="" />
          <button class="btn btn-sm btn-dark" data-toggle="modal" data-target=".bd-example3-modal-lg">
          بزرگ نمایی
          </button>

          <div class="modal fade bd-example3-modal-lg" tabindex="-1" role="dialog"
              aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content bg-info">
              <img src="./srcs/pexels-photo-1434612.png" alt="" />
              <button type="button" class="btn btn-lg btn-info " data-dismiss="modal">بستن</button>
              </div>
            </div>
          </div>
        </div>
        <div class=" gallery4 ">
          <img src="./srcs/pexels-photo-1534924.png" alt="" />
          <button class="btn btn-sm btn-dark" data-toggle="modal" data-target=".bd-example4-modal-lg">
          بزرگ نمایی
          </button>

          <div class="modal fade bd-example4-modal-lg" tabindex="-1" role="dialog"
              aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content bg-info">
              <img src="./srcs/pexels-photo-1534924.png" alt="" />
              <button type="button" class="btn btn-lg btn-info " data-dismiss="modal">بستن</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<?php

	
	require("hostconf.php");

	$query2='SELECT volume3 FROM `visits` WHERE `visits`.`id` ='.date('d');
	
	$result2 = mysqli_query($connnect, $query2);
	
	$posts2 = mysqli_fetch_assoc($result2);
	
	mysqli_free_result($result2);
	
	$addup=$posts2['volume3']+1;
	
	
	$query2="UPDATE `visits` SET `volume3` = $addup WHERE `visits`.`id` =".date('d');
	
	if(mysqli_query($connnect,$query2)){
	
	}else{echo mysqli_error($connnect);};
	
			if(mysqli_query($connnect,$query2)){
	
			}else{echo mysqli_error($connnect);}
	
	mysqli_close($connnect);

?>