
<!DOCTYPE html><html lang="zh-TW" prefix="og: http://ogp.me/ns#"><head><meta charset="UTF-8">


<head>

  <link href="style.css" rel="stylesheet">
</head>
<title>檔案上傳</title>


  <div class="finish" id="fh1" >
    <div class="row">
      <div  class="col-lg-6 col-lg-offset-3">
        <h1>檔案上傳</h1>
      </div>
    </div>

</div>

<div class="container">
  <div class="row">
  <div id="box2">
    <h1>選擇檔案</h1>


		<?php

			if (isset($_POST["size"]))
			{
				$num = $_POST["size"];

				echo "<form action='' method='post' enctype='multipart/form-data'>";
				echo "選擇上傳檔案(檔名須為英文)";
				echo "<br><br>";
				for ($i=0; $i<$num; $i++)
				{
					echo "<input type='file' name='file[]'><br><br>";
				}
				echo "<input type='submit' value='上傳'>";
				echo "&nbsp;";
				echo "&nbsp;";
				echo "</form>";
			}

			if (isset($_FILES['file']))
			{

				$i=count($_FILES["file"]["name"]);

		   		for ($j=0 ; $j<$i ; $j++)
		   		{
		      		copy($_FILES["file"]["tmp_name"][$j], $_FILES["file"]["name"][$j]);
		      		if (copy($_FILES["file"]["tmp_name"][$j], $_FILES["file"]["name"][$j]))
					{
						if ($j==($i-1))
						{
							echo "上傳成功" . "<br><br>";

						}
					}
					else
					{
						echo "上傳失敗" . "<br><br>";

					}
		   		}

		   	}
		?>



		<form action="index.php" method="post" class="form login">

		<input type="submit" value="回上頁">
				</form>

</div>


    </div>
  </div>


    </div>
  </div>
