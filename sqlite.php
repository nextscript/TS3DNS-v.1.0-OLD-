 <?
	error_reporting(0);
	 include("includes/c1.config.inc.php");
  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TS3.CX &mdash; TS3DNS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="http://res.cloudinary.com/fredy007/raw/upload/IWN5/bootstrap.css" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  </head>
 <body style="background:transparent">
  

   
 <div class="container-fluid">
	<div class="row">
	<div class="col-md-2"></div>
		<div class="col-md-8">
			 <div class="container-fluid">
 <?php
  
try {
    // Use database file "HomeAutomation.sql3" or create a new one if not exists:
    $db = new PDO('sqlite:databases/db1.sqlite');
	
	$user= $_POST["username"];
	$email= $_POST["mail"];
	
	$result1 = $db->prepare("SELECT * FROM members WHERE email=:email");
	$result1->execute(array(':email' => $email));
	
	$result2 = $db->prepare("SELECT * FROM members WHERE username=:user");
	$result2->execute(array(':user' => $user));
	
			if(empty($_POST["username"] ))
            {
			echo '<p>
			
			
			<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid">
			<div class="alert alert-danger" role="alert">REQUEST USERNAME</div>
			</div><div class="col-md-2"></div></div></div>
			
			</p>
						';
						
			echo '<div style="border: 0px solid#888;" class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			 <div style="border: 0px solid#888;" class="container-fluid">
			 
							 
							  <table class="table table-hover">
								<thead>
								  <tr style="border: 0px solid#888;">
									<th style="border: 0px solid#888;"><center><form id="signupform" class="form-horizontal" method="POST" action="index.php?id=add">
										
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
										</div></form><div class="col-md-2"></div>

</div>';
				exit;
			}
			
			if(empty($_POST["password"] ))
            {
			echo '<p>
			
							
			<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid">
			<div class="alert alert-danger" role="alert">REQUEST PASSWORD</div>
			</div><div class="col-md-2"></div></div></div>
					
				
						</p>
						';
						
			echo '<div style="border: 0px solid#888;" class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			 <div style="border: 0px solid#888;" class="container-fluid">
			 
							 
							  <table class="table table-hover">
								<thead>
								  <tr style="border: 0px solid#888;">
									<th style="border: 0px solid#888;"><center><form id="signupform" class="form-horizontal" method="POST" action="index.php?id=add">
										
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
										</div></form><div class="col-md-2"></div>

</div>';
				exit;
			}
			
			if(empty($_POST["mail"] ))
            {
			echo '<p>
			
			<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid">
			<div class="alert alert-danger" role="alert">REQUEST EMAIL</div>
			</div><div class="col-md-2"></div></div></div>
			
			</p>
						';
						
			echo '<div style="border: 0px solid#888;" class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			 <div style="border: 0px solid#888;" class="container-fluid">
			 
							 
							  <table class="table table-hover">
								<thead>
								  <tr style="border: 0px solid#888;">
									<th style="border: 0px solid#888;"><center><form id="signupform" class="form-horizontal" method="POST" action="index.php?id=add">
										
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
										</div></form><div class="col-md-2"></div>

</div>';
				exit;
			}
            
	
		if ($result1->fetchColumn() > 0) {
  
			if(!isset($_POST["username"] ))
            {
			}else{
			echo '<p>
			
			<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid">
			<div class="alert alert-danger" role="alert">Username is already used!</div>
			</div><div class="col-md-2"></div></div></div>		
				
				
				
				</p>
						';
			echo '<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			 <div style="border: 0px solid#888;" class="container-fluid">
			 
							  <table class="table table-hover">
								<thead>
								  <tr >
									<th><center><form id="signupform" class="form-horizontal" method="POST" action="index.php?id=add">
										
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
										</div></form><div class="col-md-2"></div>
	</div>
</div>';
			exit;
            }
		
		}
		
		if($result2->fetchColumn() > 0){
			
			if(!isset($_POST["mail"] ))
            {
			}else{
			echo '<p>
			
			<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid">
			<div class="alert alert-danger" role="alert">Email is already used!</div>
			</div><div class="col-md-2"></div></div></div>			
				
						</p>
						';
			echo '<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			 <div style="border: 0px solid#888;" class="container-fluid">

							  <table class="table  table-hover">
								<thead>
								  <tr >
									<th><center><form id="signupform" class="form-horizontal" method="POST" action="index.php?id=add">
										
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
										</div></form><div class="col-md-2"></div>
	</div>
</div>';
            }
			exit;
		}

	
	$table = "main.members";
		$id="";
		$username = $_POST['username'];
		$mail_a = $_POST['mail'];
		$pw = md5(md5($_POST['password']));
		$user_delete = '0';
		$time = date('Y-m-d H:m:s');;
		$perm = '2';

	
// Prepare INSERT statement to SQLite3 file db
    $insert = ("INSERT INTO members (username, password, email, user_geloescht, letzter_login, permissions) 
                VALUES (:username, :password, :mail, :delete, :time, :permissions);");
    $stmt = $db->prepare($insert);
 
    // Bind parameters to statement variables
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $pw);
	$stmt->bindParam(':mail', $mail_a);
	$stmt->bindParam(':delete', $user_delete);
    $stmt->bindParam(':time', $time);
	$stmt->bindParam(':permissions', $perm);	

	$stmt->execute();
	
}

catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
  
  echo '<p>
		
			<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid">
			<div class="alert alert-success" role="alert">Your Account is ready to use!</div>
			</div><div class="col-md-2"></div></div></div>				
				
					
				
					</p>
						';
			include("login.php");
  
?> 
 	</div>
				</div>
			</div>
		
   </div>






    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tipsy/1.0.2/jquery.tipsy.js"></script>
   
	<!-- Formula -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.tipsy/1.0.2/jquery.tipsy.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<script type="application/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="application/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="application/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.js"></script>
 
  </body>
</html>
