<!DOCTYPE html><html lang="zh-TW" prefix="og: http://ogp.me/ns#"><head><meta charset="UTF-8">

<head>
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
</head>
<title>A1043354-京都一日遊報名網頁</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<?php
$input1=$_GET["input1"];
$input2=$_GET["input2"];
$input3=$_GET["input3"];
$input4=$_GET["input4"];
?>

  <div class="finish" id="fh1" >
    <div class="row">
      <div  class="col-lg-6 col-lg-offset-3">
        <h1>你已經完成報名</h1>
      </div>
    </div><! --/row -->

</div>

<div id="box2">
    <h1>報名資料</h1>
    <div id="box3">
      <form>

  <div class="cc">  姓名 </div>  <div class = "op"><?php echo  $input1 . "</br>";?></div>
  <div class="cc">   信箱</div>  <div class = "op"><?php echo  $input2 . "</br>";?></div>
    <div class="cc"> 電話</div>  <div class = "op"><?php echo  $input3 . "</br>";?></div>
  <div class="cc">   報名人數 </div> <div class = "op"><?php echo  $input4 . "</br>";?></div>
             </form>
</div>
</div>
    </div>
  </div>
