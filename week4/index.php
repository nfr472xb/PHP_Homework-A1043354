<!DOCTYPE html><html lang="zh-TW" prefix="og: http://ogp.me/ns#"><head><meta charset="UTF-8">

  <form action="midterm_1.php" method="get">
<head>

  <link href="style.css" rel="stylesheet">
</head>
<title>第一題 - 優惠計算</title>


<?php
$price  = 0;
$price_mod  = 0  ;
if ( isset($_GET["price"]) ){

$price=$_GET["price"];

$price_mod ;

if ($price>=100000) {
  $price_mod = $price*0.6;
} elseif ($price>=50000) {
  $price_mod = $price*0.8;
} else {
  $price_mod = $price*0.9;
}
}
date_default_timezone_set("Asia/Taipei");

//取得現在時間，用字串的形式
$tempDate = date("Y-m-d H:i:s");


$time = date("H");

$class = "red";


if ($time>6 and $time<18) {
  $class = "black";
}



?>




  <div class="finish" id="fh1" >
    <div class="row">
      <div  class="col-lg-6 col-lg-offset-3">
        <h1>倒數時鐘</h1>
      </div>
    </div><! --/row -->

</div>

<div class="container">
  <div class="row">
  <div id="box2">
    <h1>目前時間</h1>
    <div id="box4">

      <fieldset class="nowtime">
      <?php
      //$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

        echo date('Y年');

        switch(date('F'))
        {
          case 'January':
            echo "一月";
            break;

          case 'February':
            echo "二月";
            break;

          case 'March':
            echo "三月";
            break;

          case 'April':
            echo "四月";
            break;

          case 'May':
            echo "五月";
            break;

          case 'June':
            echo "六月";
            break;

          case 'July':
            echo "七月";
            break;

          case 'August':
            echo "八月";
            break;

          case 'September':
            echo "九月";
            break;

          case 'October':
            echo "十月";
            break;

          case 'November':
            echo "十一月";
            break;

          case 'December':
            echo "十二月";
            break;
        }
        echo date('d日');

        echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
        date_default_timezone_set('Asia/Taipei');
        echo date('H時i分s秒');

      echo "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp" . "&nbsp";
      switch(date('l'))
      {
        case 'Monday':
          echo "星期一";
          break;

        case 'Tuesday':
          echo "星期二";
          break;

        case 'Wednesday':
          echo "星期三";
          break;

        case 'Thursday':
          echo "星期四";
          break;

        case 'Friday':
          echo "星期五";
          break;

        case 'Saturday':
          echo "星期六";
          break;

        case 'Sunday':
          echo "星期日";
          break;
      }
      ?>
      </fieldset>


 

    </div>
</div>

<div id="box2">
  <h1>距離今年結束還有</h1>


  <fieldset class="rest-time">
  <?php
  $resttime = mktime(0, 0, 0, 12, 31, date('Y',time())) - time();

  $day =		(int) ($resttime / (86400));
  $hours = 	(int) (($resttime%86400) / 3600);
  $minutes = 	(int) (($resttime%3600) / 60);
  $seconds =	($resttime%60);

  echo "剩餘時間: " . $day . " 日 " . $hours . " 時 " . $minutes . " 分 " . $seconds . " 秒";
  ?>
  </fieldset>
  <br>
  <br>

  <fieldset class="picture-align">


    每月顯示不同圖片

  <br>

  <div class="text-align">
  <?php
  echo "<br>";

    if (date('n')==1)
    {
      echo "一月";
    }
    else if (date('n')==2)
    {
      echo "二月";
    }
    else if (date('n')==3)
    {
      echo "三月";
    }
    else if (date('n')==4)
    {
      echo "四月";
    }
    else if (date('n')==5)
    {
      echo "五月";
    }
    else if (date('n')==6)
    {
      echo "六月";
    }
    else if (date('n')==7)
    {
      echo "七月";
    }
    else if (date('n')==8)
    {
      echo "八月";
    }
    else if (date('n')==9)
    {
      echo "九月";
    }
    else if (date('n')==10)
    {
      echo "十月";
    }
    else if (date('n')==11)
    {
      echo "十一月";
    }
    else if (date('n')==12)
    {
      echo "十二月";
    }
    echo "<br>";
  ?>
  </div>


  <?php
    if (date('n')==1)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2017/03/P7041300.jpg" class="picture-internal-size">';
    }
    else if (date('n')==2)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2017/03/P7040058.jpg" class="picture-internal-size">';
    }
    else if (date('n')==3)
    {
      echo '<img src="schoolday.jpg" class="picture-internal-size">';
    }
    else if (date('n')==4)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2017/02/P7040129.jpg" class="picture-internal-size">';
    }
    else if ((date('n')+2)==5)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2017/03/IMG_0220-2.jpg" class="picture-internal-size">';
    }
    else if (date('n')==6)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2015/01/IMG_1374.jpg" class="picture-internal-size">';
    }
    else if (date('n')==7)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2016/11/P7021064.jpg" class="picture-internal-size">';
    }
    else if (date('n')==8)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2014/09/IMG_4382.jpg" class="picture-internal-size">';
    }
    else if (date('n')==9)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2015/01/IMG_2353.jpg" class="picture-internal-size">';
    }
    else if (date('n')==10)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2015/10/PA240540.jpg" class="picture-internal-size">';
    }
    else if (date('n')==11)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2014/12/IMG_0464.jpg" class="picture-internal-size">';
    }
    else if (date('n')==12)
    {
      echo '<img src="http://mmtstock.com/wp-content/uploads/2017/03/P1241112.jpg" class="picture-internal-size">';
    }
  ?>
  </div>
  </fieldset>



</div>
    </div>
  </div>


    </div>
  </div>
