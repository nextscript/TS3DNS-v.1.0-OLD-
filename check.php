

 <?
	error_reporting(0);


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
  <body>
  

   
 <div class="container-fluid">
	<div class="row">
	
		<div class="col-md-12">
			 <div class="container-fluid">
<?
	 include("includes/c1.config.inc.php");
  session_start();
		
			if( isset($_POST["do"]) &&  $_POST["do"] == "insert")
			{
				//Pflichtfeldkontrolle
	
				$error_msg = "";
				
					if($_POST["ip"] == "")
					{
					$error_msg .= '<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
					<div class="col-md-8"><div class="container-fluid">
					<div class="alert alert-danger" role="alert">Please enter your IP Address!</div>
					
					</div><div class="col-md-2"></div></div></div>';
					}
					
					if($_POST["port"] == "")
					{
					$error_msg .= '<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
					<div class="col-md-8"><div class="container-fluid">
					<div class="alert alert-danger" role="alert">Please enter your Port!</div>
					
					</div><div class="col-md-2"></div></div></div>';
					}
					
					if ($error_msg == "")
					{
							
						if(isset($_POST['submit1'])) 
							{ 
													
							
								try {
								
								global $dnsid;
								global $domain;
								
								$dns = 1;
								$srv = 1;
								$user = $_SESSION["username"];
								$por= $_POST["port"];
								$ipnr = $_POST["ip"];
								$dm = $domain;
								
									$db = new PDO('sqlite:databases/db2.sqlite');
									$insert = ("INSERT INTO ts3dns (username, dns_id, subname, domain, portnr, ipnr, srv_id) 
												VALUES (:username, :dnsid, :subn, :domain, :port, :ip, :srvid);");
									
									$stmt = $db->prepare($insert);
								 
		
									// Bind parameters to statement variables
									$stmt->bindParam(':username', $user);
									$stmt->bindParam(':dnsid', $dns);
									$stmt->bindParam(':subn', $_SESSION["subname"]);
									$stmt->bindParam(':domain',$domain);
									$stmt->bindParam(':port', $por);
									$stmt->bindParam(':ip', $ipnr);	
									$stmt->bindParam(':srvid', $srv);	

									$stmt->execute();
									
									
									
									}
										catch(PDOException $p)
										{
											print 'Exception : '.$p->getMessage();
										}
										
										
										header('Location: success.php');
				

										//echo $_POST["ip"];
							}
					}	
			}
	
		if ($_SESSION["login"] == 0)
        {  
		}else{
		$dbc = new SQLite3('databases/db2.sqlite');
		$check = $dbc->querySingle("SELECT * FROM ts3dns WHERE subname='".$_POST["subname"]."'", false);
					
			if($check != 0){
			include("data.php");
			echo '<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid"><div class="alert alert-danger" role="alert">Subname is not available!</div></div><div class="col-md-2"></div></div></div>';
			
			}elseif(empty($_POST["subname"])){
			include("data.php");
			
			if(!isset($_POST['submit1'])){
			if(!isset($_POST['submit'])){
			}
			echo '<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid"><div class="alert alert-warning" role="alert">Please enter Subname!</div></div><div class="col-md-2"></div></div></div>';
			
		
					if($error_msg != "")
					{
						echo $error_msg;

					}
					
					
			
		}else{
			
			}
			
			}else{
			include("data.php");

  
 
			
			if (!preg_match('/^[0-9a-z]+$/i', $_POST["subname"])) {
				echo '<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid"><div class="well">Must not contain any special characters!</div></div></div>
			<div class="col-md-2"></div></div></div>';
			}else{
			
			echo '
			<div class="container-fluid"><div class="row"><div class="col-md-2"></div>
			<div class="col-md-8"><div class="container-fluid">
			<div class="well"><p>'.$_POST["subname"].'.'.$domain.'  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></p>
			<form class="form-horizontal"  method="POST" action="index.php?id=check">
	
			 <table border="0" cellpadding="0" cellspacing="4">
					 <fieldset>
					 
					 <div class="form-group has-success">
						  <label class="control-label" for="inputSuccess1">IP Address:</label>
						  <input type="text" class="form-control" name="ip"  placeholder="192.168.1.100">
					</div>
					 
					 <div class="form-group has-success">
						  <label class="control-label" for="inputSuccess1">Port:</label>
						  <input type="text" class="form-control" name="port" placeholder="9987">
					</div>
					
						<div class="form-group">
							<input type="hidden" name="do" value="insert">
							<input type="hidden" name="sub" value="'.$_POST["subname"].'">
							<button type="submit" name="submit1" value="save" class="form-control">Create Now</button>
							 </fieldset>
						</div>
				
					</table>

		
			</form></div></div></div>
			<div class="col-md-2"></div></div></div>
			
			';  
			}
			 //print_r($_GET);
		$_SESSION["sub"]= $_POST["sub"];
		
		}
	 }

//echo $_POST["subname"];
	 

?>				</div>
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
