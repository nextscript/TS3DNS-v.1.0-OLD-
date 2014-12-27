 <?	error_reporting(0);  $func = $_GET['p']; 
 ?>
 	<? include('logo.inc.php');  ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TS3.CX &mdash; TS3DNS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="http://res.cloudinary.com/fredy007/raw/upload/IWN5/bootstrap.css" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  </head>
   <body style="background:transparent">
  
 
  
  
<div class="container-fluid hidden-xs">
   
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			 <div style="border: 0px solid#888;" class="container-fluid">
			 
							 
							  <table style="border: 0px solid#888;" class="table table-hover">
								<thead>
								  <tr style="border: 0px solid#888;">
									<th style="border: 0px solid#888;"><center>
									
									<?if(!empty($func)){
									
										echo '
										<form id="signupform" class="form-horizontal" method="POST" action="index.php?id=add">
										
										<div class="form-group">
										<label for="email" class="col-md-3 control-label">Username</label>
										<div class="col-md-9">
										<input type="text" class="form-control" name="username" placeholder="Username">
										</div>
										</div>
										
										</div>
										<div class="form-group">
										<label for="firstname" class="col-md-3 control-label">Password</label>
										<div class="col-md-9">
										<input type="password" class="form-control" name="password" placeholder="Password">
										</div>
										</div>
										<div class="form-group">
										<label for="password" class="col-md-3 control-label">Email</label>
										<div class="col-md-9">
										<input type="text" class="form-control" name="mail" placeholder="Email">
										</div>
										</div>
										
										<div class="form-group">
 
										<div class="col-md-offset-9 col-md-3">
										<button type="submit" name=submit value="Create" class="btn btn-default">Create</button>
										<span style="margin-left:8px;"></span>
										</div>
										</div></form>
										
										';
									
									}else{
									
									
									
									?>
									 
									<form id="loginform" class="form-horizontal" method="POST" action="index.php?id=panel">
								<fieldset>
										<div style="margin-bottom: 25px" class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Username">
										</div>
										<div style="margin-bottom: 25px" class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
										</div>
										<div style="margin-top:10px" class="form-group">
										 
										<div class="col-sm-12 controls">
										<button type="submit" name=submit value="Sing In" class="btn btn-default">Sing In</button>
										</div>
								</fieldset>
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
									<a style="float: right;" class="btn btn-primary" href="index.php?id=panel&p=newbie">Sign Up Here</a>
									</div>
									</center></th>
								  </tr>
								</thead>
			
		</div>
	<?	} ?>
		<div class="col-md-2"></div>
	</div>
</div>
</div>
<?

?>