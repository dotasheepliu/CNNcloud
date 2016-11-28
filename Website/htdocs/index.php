<!DOCTYPE html>
<html>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
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

    <body>
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

    <div id = "upload">
        <div>
            <form action="upload_file.php" method="post"
                  enctype="multipart/form-data">
                <label for="file">Upload your image here (image size = 227*227):</label>
                <br>
                <br>
                <input type="file" name="file" id="file" /> 
                <br />
                <br>
                <input type="submit" name="submit" value="Submit" />
            </form>
            
            <h3>The image you upload is: </h3>
            <img src="/upload/test.png"/>

            <h3> the top 5 rank are: </h3>
            <?php
                $myfile = fopen("result.txt", "r") or die("will show you the result soon");
            while(!feof($myfile))
                echo fgets($myfile) . "<br>";
            //echo fread($myfile,filesize("result.txt"));
            fclose($myfile);
            ?>
        </div>
    </div>
        
    <div id = "information">
        <?php
        $namefile = fopen("name.txt", "r") or die("the item is not choosing yet");
        $name = fgets($namefile);
        ?>
        <h2> What is <?php echo $name;?> ? </h2>

        <div>
        <iframe marginheight="50px" src="https://en.wikipedia.org/wiki/<?php echo $name;?>" 
        frameborder="0" width="700" height="550" marginwidth="100"></iframe>
        </div>
    </div>
        
    </body>   
</html>