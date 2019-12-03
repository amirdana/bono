<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>تبدیل عکس شما به نقاشی</title>
  </head>

  <body>
    <header>
      <div class="navi">
       <h1 >Bono</h1>
       <ul class="navi-item">
          <li onclick="()=>alert()" >خانه</li>
				  <li>سفارش</li>
          <li>پیگیری سفارش</li>
          <li>نمونه ها</li>
       </ul>
      </div>
      <div data-toggle="tooltip"
      data-placement="top" title="سوالی دارید؟ از ما بپرسید" class="support ">
        <img data-container="body"
         class="" src="srcs/support.svg" alt="online-support">
      </div>  
      <div class="head-bg">
        <div class="row flex-fill ">
            <div class="head-right col-md-6  order-1" data-aos-easing="ease" data-aos="slide-left" 
            data-aos-duration="1000" >
                <div class="promo-cnt">
                <h6> شما با ارزش هستید، خودتان را قاب کنید</h1>
                    <p>با بارگذاری عکس مورد علاقه خود نسخه ی نقاشی شده آن که توسط طراحان ما به صورت اختصاصی برای شما ساخته میشود را به شکل فیزیکی یا غیر فیزیکی دریافت کنید </p>
                    <p>با یک قدم ساده اثر هنری خود را سفارش دهید</p>
                    <button id="call-to"  class="btn btn-lg btn-outline-light mt-5  ">سفارش دهید</button>
                </div>
              </div>
          <div  
          class="head-left col-md-6 ">
            <img src="srcs/New Project (1).png" alt="example" />
          </div>
        </div>
      </div>
      </div>
    </header>

    <section>
      <div class="sec-1 text-center fontff">
          <div class="cntall2">
            <h2 class="mb-5 text-dark" >روند کار چگونه است؟</h2>
            <div class="row flex-fill s2-ct">
                <div class="col-md-4 how-3"   >
                    <img src="srcs/layers.svg" alt="order">
                    <div class="h-cnt">
                    <h4>دریافت</h4>
                      <p>حال میتوانید طراحی خود را دانلود یا در صورت تمایل نسخه فیزیکی آن را دریافت کنید</p>
                </div>
            </div>
          <div class="col-md-4 how-2 " >
            <img src="srcs/graphic-tablet.svg" alt="order">
            <div class="h-cnt">
              <h4>طراحی</h4>
              <p>طراحان گرافیک ما با توجه به عکس شما یک نمونه نقاشی شده از آن را خلق میکنند</p>
            </div>
          </div>
          <div class="col-md-4 how-1"  >
              <img src="srcs/layer.svg" alt="order">
              <div class="h-cnt">
              <h4>انتخاب عکس</h4>
              <p>در این مرحله عکس تکی یا چند نفره مورد علاقه خود را روی سایت بارگذاری میکنید</p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section>
      <div class="sec2">
        <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <h3 class="pb-2 text-dark">از زبان مشتریان</h3>
        <p class="text-dark"><small>خوشحالیم که تونستیم رضایت شما رو جلب کنیم</small> </p>
      </div>
      <div class="q-cnt ">
        <img class="qouti" src="srcs/Frame 3.svg" alt="">
      </div>       
         <div id="carouselExampleIndicators" class="carousel slide slidder " data-ride="carousel">           
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active slidder-t">            
                <div>
                    <img class="sl-inside" src="srcs/girl.svg" alt="">
                </div>
              <div>
              <h4>سپیده همدانی</h4>
              <p>همه چی عالی بود مرسی</p>
           </div>
          
            </div>
            <div class="carousel-item text-center slidder-t">
              <div>
                  <img class="sl-inside" src="srcs/man.svg" alt="">
              </div>
              <div>
                <h4>سپیده همدانی</h4>
                <p>همه چی عالی بود مرسی</p>           
              </div>
          </div>
            <div class="carousel-item text-center slidder-t">
                <div>
                    <img class="sl-inside" src="srcs/girl.svg" alt="">
                </div>
                <div>
                  <h4>سپیده همدانی</h4>
                  <p>همه چی عالی بود مرسی</p>           
                </div>
          </div>
            <div class="carousel-item text-center slidder-t">
                <div>
                    <img class="sl-inside" src="srcs/girl.svg" alt="">
                  </div>
              <div>
              <h4>سپیده همدانی</h4>
              <p>همه چی عالی بود مرسی</p>           </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> 
       </div>
      </div> 
    </section>

    <section>
    <div class="myfaq fontff">
      <h2 class="mb-5 text-dark">سولات متداول</h2>
      <div class="myq  text-right" id="accordion" role="tablist">
      <div class="card ">
        <div class="seccondary">
        <div class="card-header  " role="tab" id="headingOne">
          <h5 class="mb-0">
            <a class="text-dark " data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             زمان تحویل چقدر است؟
            </a>
          </h5>
        </div>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body ">
            اثر شما بعد از ثبت سفارش نهایتا طی دو تا سه روز آماده خواهد شد و قابل دانلود است ، ولی اگر دریافت فیزیکی را هم درخواست کرده بودید حدودا یه هفته برای تهرانی ها و دو هفته برای استان های دیگر زمان اضافه میشود
          </div>
        </div>
      </div>
      <div class="card">
      <div class="">
        <div class="card-header " role="tab" id="headingTwo">
          <h5 class="mb-0">
            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              میشه خودمون فایل رو از سایت دانلود و چاپ کنیم؟
            </a>
          </h5>
        </div>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-body">
            بله، میتونید روی هر جنس ورق چاپ کرده و نیاز به تحویل فیزیکی ندارید ولی اگر به هر دلیلی توانایی چاپ کردن را ندارید ما برای شما انجامش میدیم
          </div>
        </div>
      </div>
      
      <div class="card">
      <div class="seccondary">
        <div class="card-header" role="tab" id="headingThree">
          <h5 class="mb-0">
            <a class="collapsed text-dark" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              چگونه طرح رو چاپ کنیم؟
            </a>
          </h5>
        </div>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="card-body">
          مثل یک پرینت گرفتن معمولی میتوانید روی هر نوع و جنس ورق های سری (آ) و هر نوع دیگری که نسبت های طول به عرض مشابهی دارند طرح خود را چاپ کنید البته بدیهی است که جنس ورق و کیفت چاپ حرفه ای نتیجه بهتری حاصل میکنه          </div>
        </div>
      </div>
      
      </div>
    </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init(
        {
          dataAosEasing:"ease",
          dataAosDuration:"1200"
        }
      );
    </script>
  
</body>
</html>
<?php
if(isset($_SESSION['ip'])==false){
	
	require("hostconf.php");

	$query2='SELECT volume FROM `visits` WHERE `visits`.`id` ='.date('d');
	
	$result2 = mysqli_query($connnect, $query2);
	
	$posts2 = mysqli_fetch_assoc($result2);
	
	mysqli_free_result($result2);
	
	$addup=$posts2['volume']+1;
	
	
	$query2="UPDATE `visits` SET `volume` = $addup WHERE `visits`.`id` =".date('d');
	
	if(mysqli_query($connnect,$query2)){
	
	}else{echo mysqli_error($connnect);};
	
			if(mysqli_query($connnect,$query2)){
	
			}else{echo mysqli_error($connnect);}
	
	mysqli_close($connnect);

	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
	
}