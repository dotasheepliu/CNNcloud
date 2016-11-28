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
   #pdf {
        line-height:30px;
        height:600px;
        width:180px;
        float:left;
        padding:5px;	      
    }
   #description {
        line-height:30px;
        height:400px;
        width:350px;
        float:right;
        padding:50px;	      
    }
    p {text-indent:50px; font-size:25px;}
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

    <div id = "pdf">    
        <iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/332475725/content?start_page=1&view_mode=scroll&access_key=key-sh1wDORYAE8r9I8aS2pf&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7068965517241379" scrolling="no" id="doc_24525" width="600" height="800" frameborder="0"></iframe>
    </div>
    <div id = "description">
        <p>Since Cifar10 only contains 10 classes, we didn't implement the model like the ImageNet model. In this page, we are going to show you our research done on the PartialDenseNet CNN. We change the model based on the densenet, the speed of the training is faster and the accuracy is still higher than 90%.</p>
    </div>

    </body>   
</html>