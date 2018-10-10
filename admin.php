<?php
session_start();
require_once("phpscripts/functions.php");

if (!Func::isAdmin()) {
    Func::redirect("login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <script src="main.js"></script>
</head>
<style type="text/css">
.btn{
    background-color:#d4af37;
}

@font-face {
		font-family: Montserrat;
		src: url('font/Montserrat-Bold.ttf');
    }

    @font-face{
        font-family: Montserrat-Regular;
        src: url('font/Montserrat-Regular.ttf');
    }
    
    header{
		background: #fff;
		width: 100%;
        height: 90px;
    }
    
    header a, header a:hover{
        color:#d4af37;
		text-decoration: none;
    }
    
    .brand-logo{
		width: 150px;
		margin-top: 15px; 
    }
    header h6{
		line-height: 90px;
        color: #d4af37;
        font-family:Montserrat;	
    }
    body{
        background-image: url(images/moet-pronunciation-header.jpg) ; 
        background-size: 100%;
        
    }
    span.organisation-name{
		margin-left: 15px;
    }
    footer a, footer a:hover{
		color: black;
		margin-left: 15px;
	}
    
    footer{
		height: 40px;
		background: white;
		line-height: 40px;
        font-size: 13px;
        font-family:Montserrat-Regular;
    }
</style>
<body>
<header>
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <h6><a href="./phpscripts/logout.php">Logout</a></h6> 
              </div>
              <div class="col-sm-6">
                  <img class="pull-right brand-logo" src="imgupload/moet-logo.png"/>
              </div>
          </div>
      </div>
  </header> 
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="card w-75"style="float:right;">
                <div class="card-body">
                    <h5 class="card-title"> Left Bottle</h5>
                    <p class="card-text">Ensure that the image used is within the 
                        same size as the current bottle on the page.</p>
                    <form action="phpscripts/upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                       <label for="Select">Select Image To Upload:</label>
                       <input type="file"  name="fileToUpload">
                       <input type="hidden" name="position" value="left">
                       <input type="submit" value="Upload" name="submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title">Right Bottle</h5>
                    <p class="card-text">Ensure that the image used is within the 
                        same size as the current bottle on the page.
                    </p>
                    <form action="phpscripts/upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Select">Select Image To Upload:</label>
                        <input type="file" name="fileToUpload">
                        <input type="hidden" name="position" value="right">
                        <input type="submit" value="Upload" name="submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<br><br>
    <div class="row">
        <div class="col-sm-8">
            <div class="card w-40"style="float:right;">
                <div class="card-body">
                <h5 class="card-title">Center Logo</h5>
                    <p class="card-text">This is for the center logo
                    </p>
                    <form action="phpscripts/upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Select">Select Image To Upload:</label>
                        <input type="file" name="fileToUpload">
                        <input type="hidden" name="position" value="center">
                        <input type="submit" value="Upload" name="submit">
                    </div>
                    </form>
                </div>
            </div>
         </div>
    </div>
</body>
<?php
if(isset($_SESSION['didupload'])){
    if($_SESSION['didupload']){
        echo '<script type="text/javascript">alert("The file has been uploaded!");</script>';
        unset($_SESSION['didupload']);
    }
    else{
        echo '<script type="text/javascript">alert("An error occured somewhere. Try again or contact the admin");</script>';
        unset($_SESSION['didupload']);
    }
}
else{

}

if(isset($_SESSION['wrongext'])){
    echo '<script type="text/javascript">alert("The file is not allowed please upload a JPEG or PNG!");</script>';
    unset($_SESSION['wrongext']);
}
elseif(isset($_SESSION['largefile'])) {
    echo '<script type="text/javascript">alert("This file is more than 2MB. Sorry, it has to be less than or equal to 2MB!");</script>';
    unset($_SESSION['largefile']);
}

?>
</html>