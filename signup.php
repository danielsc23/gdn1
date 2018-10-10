<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
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
        color:#d4af37;
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
	.card{
		margin: 80px 0px;
		border: none;
		padding: 20px;
	}

    header h2{
		line-height: 90px;
        color: #000;
        font-family:Montserrat;	
	}
    .button-row{
				margin-top: 25px;
			}
			.btn{
				border-radius: 50px;
				font-size: 12px;
				color: white;
				padding: 3px 12px;
				margin-bottom: 10px;
			}
			.btn:hover{
				color: white;
			}
			.btn-danger{
				background-color: #b22222; 
				margin-left: 10px;
			}
			.btn-light-gray{
				background-color: #BCBDC0; 
				margin-right: 10px;
			}
			.btn-dark-gray{
				background-color: #888B8D; 
				margin-left: 10px;
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

<style type="text/css">
    p{font-family: GothamRoundedLight;}
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
  .signup-card{
      padding: 40px;
  }
  
</style>
<body>
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
                <div class="col-sm-8 col-md-6 col-12">
                    <div class="card signup-card">
                        <h5 class="text-right">SIGN UP</h5>
                        <br/>
                        <div class="form-group">
                            <input type="text" class="form-control" id="user_name" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email_address" placeholder="Email Address"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Retype Password">
                        </div>
                        <div class="row button-row">
                            <div class="col-sm-12">
                                <a href="login.php" class="btn btn-danger pull-right">Go To Login</a>
                               
                            </div>
                        </div>
                    </div>
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
</body>
</html>