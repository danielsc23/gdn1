<?php
require_once("phpscripts/imagecrud.php");
$img = new Imagecrud();
$left = $img->getImagePathByPosition("left");
$right = $img->getImagePathByPosition("right");
$center = $img->getImagePathByPosition("center");

if ($left == null) {
    $left = "Moet_Bottle_Left.png";
}
if ($right == null) {
    $right = "Moet_Bottle_Right.png";
}
if ($center == null) {
    $center = "moet-logo.png";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel="stylesheet" type="text/css">
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="style/style.css" />
    <script src="main.js"></script>
</head>
<body style="background:url(imgupload/<?php echo $left;?>) left bottom no-repeat, url(imgupload/<?php echo $right;?>) right bottom no-repeat, #fafafa;">
    <!--<a href="./login.php">Login As Admin</a>-->
    <div class="outer-div"></div>
        <div class="header"><style>
            .tt-query, .txtbox, .selbox{background: !important}
            .formError .formErrorContent, .formError .formErrorArrow div {background: !important}
        </style>
    <div class="logo">
        <a href="index.php">
            <img src="imgupload/<?php echo $center;?>" border="0"/>
        </a>
        <div class="clear"></div>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
    <script>
        $(document).ready(function(){
            var height=$(window).height();
            $('body').css('minHeight', height+'px');
        });
    </script></div>
    <div class="sep-line"></div>
    <div class="middle-inner" style="padding-top: 30px; padding-bottom: 30px;">
        <form id="frmregister" name="frmregister" >
            <div class="btncenter-div1 pad10">
                <h1>Let’s keep in touch! </h1>
            </div>
            <div class="txtbox-div left">
                <input type="text" name="txtname" id="txtname" value="" class="txtbox validate[required]" autocomplete="off" placeholder="Name"/>
            </div>
            <div class="txtbox-div right">
                <input type="text" name="txtemail" id="txtemail" value="" class="txtbox validate[required,custom[email]]" autocomplete="off" placeholder="Email"/>
            </div>
            <div class="clear"></div>
            <div class="txtbox-div left">
                <input type="text" name="dob" id="dob" class="txtbox validate[required]" placeholder="Date of Birth"/>
            </div>
            <div class="txtbox-div right">
                <input type="text" class="txtbox" name="txtcontact" id="txtcontact" value="" autocomplete="off" placeholder="Contact Number"/>
            </div>
            <div class="clear"></div>
            <div class="txtbox-div left">
                <input type="text" class="txtbox" name="ig_handle" id="ig_handle" value="" placeholder="IG handle"/>
            </div> 
            <div class="clear"></div>
            <div class="btncenter-div2">
                <input type="submit" class="button btn-new" value="SUBMIT" id="singinbtn" style="background: black !important; border-color: gold !important; color: white !important; cursor: pointer !important;" />
            </div>
         </form>
    </div>
</div>
</body>
</html>