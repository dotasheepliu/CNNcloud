<!DOCTYPE html>
<html>
    
<head>
<style>
#header {
    background-color:cadetblue;
    color:azure;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:azure;
    height:600px;
    width:180px;
    float:left;
    padding:5px;	      
}
#upload {
    width:300px;
    float:left;
    padding:20px;	 	 
}
#information {
    width:700px;
    float:right;
    padding:0px;	       
}
</style>
</head>

<div id = "header">
<h1 align="center"> This is T11-PangCloud Presentation for ImageNet/Cifar10 </h1>
</div>

<div id="nav">
<a href="index.php">ImageNet Model Domo</a>
<br>
<a href="cifar10.php">Cifar10 Explaination</a>
<br>
<a href="about_us.php">About Us</a>
<br>
</div>
    
<br>
       
<h1> The PangCloud member are transforming this image to the server... </h1>
<meta http-equiv="refresh" content="11;url=index.php" HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<!--
-->
<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {

 	  if (file_exists("upload/" . "test.png"))
      {
      }
      /*   echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		echo "Type: " . $_FILES["file"]["type"] . "<br />";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
 		*/
	  move_uploaded_file($_FILES["file"]["tmp_name"],
	  "upload/" . "test.png");
	  //echo "Stored in: " . "upload/" . "test.png";
      
    }
  }
else
  {
  echo "Invalid file";
  } 
  echo exec('source test.sh');
?>
<div align="center">
	<img alt="there is no image yet"  align="middle" src="/upload/test.png"/>
</div>
</html>