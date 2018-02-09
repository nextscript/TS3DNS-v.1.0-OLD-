<? error_reporting(0); ?>
<!DOCTYPE HTML>
<html lang="en-US">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title>TS3DNS Creator</title>

	
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
	
</head> 



<div style="position:relative; top:20px;" class="container-fluid">
  <div class="row">
	
	<div class="col-xs-3"></div>
	<div class="col-xs-6" ><img src="http://ts3dnspanel.tk/img/logo.svg" width="250" height="80" alt="TS3DNS" />
	
	<nav class="navbar navbar-inverse" role="navigation" style="padding: 0px;  border-radius: 0px;">
  <div class="container-fluid">
   <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
<?
$filename = 'lockinstall';

		if (file_exists($filename)) {
		echo '<li><a href="index.php?id=demo"><span class="glyphicon glyphicon-eye-open"></span> Demo</a></li>';
		}else{
		}
		
?>
        
		
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	</div>
	<div class="col-xs-3"></div>

  </div>
</div>

