<?php
 
if(isset($_POST['dissub'])){

		require("hostconf.php");

		$query='SELECT * FROM `discount`';
		
		$result = mysqli_query($connnect, $query);
		
		$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
		mysqli_free_result($result);
		$istrue = 0;
		$istrue1 = [];

		foreach($posts as $pers => $val){
			array_push($istrue1 , $val['infulencer']) ;
			if(in_array(htmlentities($_POST['off']),$istrue1) ){$istrue = -20000;};
		
		}
		mysqli_close($connnect);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="./bootstrap.min.css">
    <title>Checkout example for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
  </head>

  <body class="bg-light">
	<?php require("./mynavbar.html")?>
    <div class="container pt-5 fontff">
      <div class="py-5 text-center mt-2">
        <h2>ثبت سفارش</h2>
      </div>
      <div class="row text-right">
        <div class="col-md-4 ml-auto  mb-4">
          <ul class="list-group mb-3">
							<li class="list-group-item text-success d-flex justify-content-between lh-condensed">
									<span class=" text-success">96,000</span>
								<div class="">
									<h6 class="my-0">قیمت فعلی</h6>
									<small class="text-muted">بیست درصد تخفیف</small>
								</div>
							</li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
								<span class="text-muted"><strike>120,000</strike> </span>
              <div>
                <h6 class="my-0">قیمت اصلی-تومان</h6>
                <small class="text-muted">بدون تخفیف</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
								<span class="text-muted" id="delever">0</span>
								<div>
									<h6 class="my-0"> تحویل فیزیکی </h6>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
								<span class="text-muted" id="frame">0</span>
								<div>
									<h6 class="my-0"> خرید قاب </h6>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
								<span class="text-danger" id="discount"><?php if(isset($_POST['dissub'])){echo $istrue;} else echo '0'?></span>
              <div class="text-danger">
                <h6 class="my-0">کد تخفیف</h6>
                <small>در بخش زیر وارد کنید</small>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
								<strong id="total">96000</strong>
              <strong>جمع کل </strong>
						</li>
          </ul>
					<div id="demo">
					</div>
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="card p-2 ">
            <div class="input-group">
              <input name="off" type="text" class="form-control text-right" placeholder="کد تخفیف">
              <div class="input-group-append">
                <button name="dissub" type="submit" class="btn btn-info">اعمال</button>
              </div>
            </div>
					</form>
					<hr>
        </div>
        <div class="col-md-8 order-md-1">
          <form  method="POST" action="purch.php"  enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="name">نام و نام خانوادگی</label>
                <input name="name" type="text" class="form-control text-right" id="name" placeholder="امیر کیانی" value="" required>
                <div class="invalid-feedback">
                  لطفا نام خود را وارد کنید
                </div>
              </div>
            </div>
						<div class="mb-3">
              <label for="email">ایمیل<span class="text-muted"></span></label>
              <input name="myemail" type="email" class="form-control text-right" id="email" placeholder="amirkiani@gmail.com" required>
              <div class="invalid-feedback">
                ایمیل خود را وارد کنید
              </div>
						</div>
            <div class="mb-3">
              <label for="phone">شماره موبایل - بدون صفر اول<span class="text-muted"></span></label>
              <input name="phone" type="number" class="form-control text-right" id="phone" placeholder="933*******" required>
              <div class="invalid-feedback">
                شماره موبایل خود را وارد کنید
              </div>
						</div>
            
						<div class="custom-control custom-checkbox ">
								<input							
									name="delever"
									type="checkbox"
									class="custom-control-input"
									id="customCheck3"									
								/>
								<label onclick="delever()" class="custom-control-label mt-3" for="customCheck3"> تمایل به دریافت فیزیکی دارید؟ - 25 هزار تومان</label>
									</label
								>
							</div>
							<div class="custom-control custom-checkbox mb-5">
								<input
									name="frame"
									type="checkbox"
									class="custom-control-input"
									id="customCheck2"									
								/>
								<label onclick="frame()" class="custom-control-label mt-3" for="customCheck2">تمایل به دریافت قاب عکس دارید؟ - 50 هزار تومان</label>
									</label
								>
							</div>
						<div class="row">
								<div  class="col-md-3 mb-3">
										<label for="zip">کد پستی (اختیاری)</label>
										<input disabled name="zip" type="text" class="form-control text-right" id="zip" placeholder="برای تحویل فیزیکی">
										<div class="invalid-feedback">
											Zip code required.
										</div>
									</div>
								<div class="col-md-5 mb-3">
									<label  for="subcity">شهر</label>
									<input disabled type="text" name="subcity" class="form-control d-block w-100 text-right" id="subcity" placeholder="برای تحویل فیزیکی" required/>																		
									<div class="invalid-feedback">
										شهر خود را وارد کنید
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label  for="city">استان</label>
									<input disabled type="text" name="city" class="form-control d-block w-100 text-right" id="city" placeholder="برای تحویل فیزیکی" required/>
									<div class="invalid-feedback">
											استان خود را وارد کنید
									</div>
								</div>
							</div>
            <div class="mb-3">
              <label for="address"> آدرس پستی</label>
              <input disabled type="text" name="addres" class="form-control text-right" id="address" placeholder="برای تحویل فیزیکی" required>
              <div class="invalid-feedback">
                آدرس خود را وارد کنید
              </div>
            </div>
            <div class="mb-3">
              <label for="des"> توضیحات - اختیاری</label>
              <input type="text" name="des" class="form-control text-right" id="des"  >             
            </div> 
            <hr class="mb-4">         
							<div class="row mt-3 text-right">						
									<div class="col-12">
										<p class="m-0 mb-3">برای بارگذاری عکس روی بخش زیر کلیک یا فایل را (درگ / دراپ) کنید *</p>
									</div>
								</div>
								<div class="row ">
									<div class="col-12  ">
										<input required class="form-control btn btn-outline-info  pb-5 p-3 " type="file" name="file">
										<div class="invalid-feedback">
												عکس خود را آپلود کنید
											</div>
									</div>				
								</div>
										<input readonly  id="fprc" class="bg-dark" type="hidden" name="fprc">
							</div>			
            		</div>
            <button class="btn btn-success btn-lg btn-block mt-5" type="submit" name="submit">ثبت سفارش - انتقال به درگاه پرداخت</button>
          </form>
        </div>
      </div>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2019 Bonzo</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
		<script>
			const delever = () =>{
			
			if(document.getElementById("customCheck3").checked == false ){
				document.getElementById("city").removeAttribute("disabled");
				document.getElementById("subcity").removeAttribute("disabled");
				document.getElementById("address").removeAttribute("disabled");
				document.getElementById("zip").removeAttribute("disabled");
			}
			else{
				if(document.getElementById("customCheck2").checked == false){
				document.getElementById("city").setAttribute("disabled", "");
				document.getElementById("subcity").setAttribute("disabled", "");
				document.getElementById("address").setAttribute("disabled", "");
				document.getElementById("zip").setAttribute("disabled", "");
				}
			}

			if(document.getElementById("delever").innerHTML == '0'){
				document.getElementById("delever").innerHTML = '25000'
				
					
			}
				else {document.getElementById("delever").innerHTML = '0'
			
				}
				document.getElementById("total").innerHTML = 96000 + Number(document.getElementById("delever").innerHTML)+Number(document.getElementById("frame").innerHTML)+Number(document.getElementById("discount").innerHTML)
			}

			const frame = () =>{
				if(document.getElementById("customCheck2").checked == false ){
				document.getElementById("city").removeAttribute("disabled");
				document.getElementById("subcity").removeAttribute("disabled");
				document.getElementById("address").removeAttribute("disabled");
				document.getElementById("zip").removeAttribute("disabled");
			}
			else{
				if(document.getElementById("customCheck3").checked == false){
				document.getElementById("city").setAttribute("disabled", "");
				document.getElementById("subcity").setAttribute("disabled", "");
				document.getElementById("address").setAttribute("disabled", "");
				document.getElementById("zip").setAttribute("disabled", "");
				}
			}
			if(document.getElementById("frame").innerHTML == '0'){
				document.getElementById("frame").innerHTML = '50000'
				
			}
				else {document.getElementById("frame").innerHTML = '0'}
				document.getElementById("total").innerHTML = 96000 + Number(document.getElementById("delever").innerHTML)+Number(document.getElementById("frame").innerHTML)+Number(document.getElementById("discount").innerHTML)

			}
			window.addEventListener("load", () => {
				document.getElementById("total").innerHTML = 96000 + Number(document.getElementById("delever").innerHTML)+Number(document.getElementById("frame").innerHTML)+Number(document.getElementById("discount").innerHTML)

			}
			)
		</script>
		

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
					
					if(document.getElementById("customCheck3").checked == true || document.getElementById("customCheck2").checked == true){
						location.reload();
					
					}
					
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {

							if(document.getElementById("customCheck2").checked == true ){
								document.getElementById("frame").innerHTML = '50000'
							}else{document.getElementById("frame").innerHTML = '0'}
							
							if(document.getElementById("customCheck3").checked == true ){
								document.getElementById("delever").innerHTML = '25000'
							}else{document.getElementById("delever").innerHTML = '0'}
							document.getElementById("total").innerHTML = 96000 + Number(document.getElementById("delever").innerHTML)+Number(document.getElementById("frame").innerHTML)+Number(document.getElementById("discount").innerHTML)
							

							document.getElementById("fprc").value = Number(document.getElementById("total").innerHTML);
							if(document.getElementById("phone").value.charAt(0)==0 && document.getElementById("phone").value != ''){
								event.preventDefault();
								event.stopPropagation();
								alert("صفر اول شماره موبایل را پاک کنید")
							}

              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
		
	</body>

 
</html>

<?php

	
	require("hostconf.php");

	$query2='SELECT volume2 FROM `visits` WHERE `visits`.`id` ='.date('d');
	
	$result2 = mysqli_query($connnect, $query2);
	
	$posts2 = mysqli_fetch_assoc($result2);
	
	mysqli_free_result($result2);
	
	$addup=$posts2['volume2']+1;
	
	
	$query2="UPDATE `visits` SET `volume2` = $addup WHERE `visits`.`id` =".date('d');
	
	if(mysqli_query($connnect,$query2)){
	
	}else{echo mysqli_error($connnect);};
	
			if(mysqli_query($connnect,$query2)){
	
			}else{echo mysqli_error($connnect);}
	
	mysqli_close($connnect);

?>
