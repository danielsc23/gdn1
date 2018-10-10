<?php
session_start();
require_once("phpscripts/functions.php");
require_once("phpscripts/user.php");

$User = new User();
$error = null;

if (Func::isAdmin()) {
    Func::redirect("./Admin/pages/dashboard/dashboard.html");
}

if (isset($_POST["submit"])) {
    $name = Func::stringpost('username');
    $pwd = Func::stringpost("pwd");
    $u = $User->getUserByLogin($name, $pwd);
    var_dump($u);
    $_SESSION["user"] = $User->getUserByLogin($name, $pwd);
    if (Func::isAdmin()) {
        Func::redirect("./Admin/pages/dashboard/dashboard.html");
    } else {
        $error = "You don't have the credentials to view the page";
    }
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
    <script src="main.js"></script>
</head>
<style type="text/css">
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
        color:#000;
		text-decoration: none;
    }
    
    .brand-logo{
		width: 150px;
		margin-top: 15px; 
	}
 
    section.body{
		min-height: calc(100vh - 130px);
        background: #000000;
        background-size: 100%;
	}

   .container-fluid{
		padding: 0px 50px;
	}

   header h2{
		line-height: 90px;
        color: #000;
        font-family:Montserrat;	
	}

    button{
        background-color: #d4af37;
        font-family: Montserrat-Regular;
        padding-top:10px;
        color:#fff;
    }

    input{
	    font-family: Montserrat-Regular;
		padding-left: 0px !important;
		padding-right: 0px !important;
		font-size: 13px !important;
		border-radius: 0px !important;
		border-left: none !important;
		border-right: none !important;
		border-top: none !important;
	}

    .card{
		margin: 120px 0px;
		border: none;
		padding: 20px;
		width: 390px;
		float: right;
    }
    
    h5{
        font-family:Montserrat-Regular;
    }

    .button-row{
		margin-top: 25px;
	}

    .btn-danger{
		background-color: #b22222; 
		margin-left: 7px;
	}

    .btn{
		border-radius: 50px;
		font-size: 11px;
		color: white;
		padding: 3px 10px;
		margin-bottom: 10px;
	}

   .btn-light-gray{
		background-color: #BCBDC0; 
		margin-right: 7px;
	}
	.btn-dark{
		background-color: #000; 
		margin-left: 7px;
	}

    .btn:hover{
		color: white;
	}

    footer{
		height: 40px;
		background: white;
		line-height: 40px;
        font-size: 13px;
        font-family:Montserrat-Regular;
    }
    
    span.organisation-name{
		margin-left: 15px;
    }
    
    footer a, footer a:hover{
		color: black;
		margin-left: 15px;
	}
</style>
<body>
  <!--<header>
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <h2><a href="login.php">GDNEVENTS</a></h2> 
              </div>
          </div>
      </div>
  </header>-->
  <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h2><a href="index.php"></a>GDNEVENTS</h2>
                </div>
            </div>
        </div>
    </header>
  <section class="body">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-2 col-md-3"></div>
              <div class="col-sm-8 col-md-5 col-12">
                  <div class="card">
                      <h5 class="text-right">Admin Login</h5>
                      <form action="login.php" method="post">
                          <div class="form-group">
                              <input type="text" name="username" class="form-control" placeholder="username" autocomplete="off">
                          </div>
                          <div class="form-group">
                              <input type="password" name="pwd" class="form-control" placeholder="password">
                          </div>
                          <div class="row button-row">
                              <div class="col-sm-12">
                                  <button class="btn btn-danger pull-right" name="submit" value="Login">Login</button>
                                  <a class="btn btn-dark" href="signup.php">Sign Up</a>
                                  <a class="btn btn-light-gray" href="forgotpassword.php">Forgot password</a>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <footer>
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6">
                Copyright 2018 <span class="organisation-name">GDN EVENTS</span>
              </div>
              <div class="col-sm-6">
                  <span class="pull-right">
                      All Rights Reserved
                      <a href="#">Terms and Conditions</a>
                  </span>
              </div>
          </div>
      </div>
  </footer>
  <!--<div class="login-box">
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="username" autocomplete="off">
        <input type="password" name="pwd" placeholder="password">
        <input type="submit" name="submit" class="login-button" value="Login">
    </form>
</div>-->
<?php if ($error) {?>
    <div class="error">
        <?php echo $error;?>
    </div>
    <?php }?>
</body>
</html>