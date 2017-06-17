<!DOCTYPE html><html lang="zh-TW" prefix="og: http://ogp.me/ns#"><head><meta charset="UTF-8">






<head>
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
</head>
<title>A1043354-京都一日遊報名網頁</title>
<link href="style.css" rel="stylesheet">

<?php
$input1="";
$input2="";
$input3="";
$input4="";
$read="無資料";

if ( isset($_POST["input1"]) )
   $input1 = $_POST["input1"];
if ( isset($_POST["input2"]) )
   $input2 = $_POST["input2"];
if ( isset($_POST["input3"]) )
   $input3 = $_POST["input3"];
if ( isset($_POST["input4"]) )
   $input4 = $_POST["input4"];
?>


<?php
$link = mysqli_connect("localhost","root",
                       "z59815981","test")
     or die("無法開啟MySQL資料庫連接!<br/>");

mysqli_query($link, 'SET NAMES utf8');

if ( isset($_POST["input1"]) ) {

  // 建立MySQL的資料庫連接

  $sql ="INSERT INTO testme (name,mail,phone,people)
  VALUES ( '$input1','$input2','$input3','$input4')";  //新增資料
  mysqli_query($link, $sql);
  $read = "資料已經寫入資料庫";

}

 ?>

  <div class="finish" id="fh1" >
    <div class="row">
      <div  class="col-lg-6 col-lg-offset-3">
        <h1>你已經完成報名</h1>
      </div>
    </div>

</div>

<div id="box2">
    <h1>報名資料</h1>

    <div id="box3">
      <form>
<h2><?php echo "$read"; ?></h2>
  <div class="cc">  姓名 </div>  <div class = "op"><?php echo  $input1 . "</br>";?></div>
  <div class="cc">   信箱</div>  <div class = "op"><?php echo  $input2 . "</br>";?></div>
    <div class="cc"> 電話</div>  <div class = "op"><?php echo  $input3 . "</br>";?></div>
  <div class="cc">   報名人數 </div> <div class = "op"><?php echo  $input4 . "</br>";?></div>
             </form>
</div>
</div>
    </div>
  </div>
