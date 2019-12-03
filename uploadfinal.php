<?php

  $fl = $_FILES['uploadfn'];
  $path = 'donefiles/'.$fl['name'];
  $ex = explode('.',$fl['name']);
  $gg =strtolower(end($ex));
  if($gg == 'jpeg'){
    move_uploaded_file($fl['tmp_name'],$path);
    echo "<h1>با موفقیت آپلود شد</h1>";
  }
  else echo '<h1>فرمت فایل را عوض کنید به jpeg</h1>';


