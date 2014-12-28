 <?
	error_reporting(0);
	 
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="http://res.cloudinary.com/fredy007/raw/upload/IWN5/bootstrap.css" />
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  </head>
    <body style="background:transparent">
  

   
 <div class="container-fluid">
	<div class="row">
	
		<div class="col-md-12">
			 <div class="container-fluid">
				
				<?
 include("includes/c1.config.inc.php");
 function umlautepas($string){
  $upas = Array("ä" => "ae", "ü" => "ue", "ö" => "oe", "Ä" => "Ae", "Ü" => "Ue", "Ö" => "Oe"); 
  return strtr($string, $upas);
  }
session_start();
									$_SESSION["subname"]= $_POST["subname"];
									if(isset($_POST['submit1']))
									{
									$_SESSION["sub"]= $_POST["sub"];
									$_SESSION["sub"]= $_POST["sub"];
									$_SESSION["port"] = $_POST["port"];
									$_SESSION["ip"] = $_POST["ip"];
									$_SESSION["domain"] = $_POST["domain"];
									
									$_SESSION["dnsid"] = 1;
									$_SESSION["srvid"] = 1;
									}else{
									}
									
$domain_n= $domain;

try {

$db = new PDO('sqlite:databases/db1.sqlite');
$user= $_POST["username"];
$pass= md5(md5($_POST["password"]));

 
		
$result = $db->prepare("SELECT * FROM members WHERE username=:user AND password=:pass");
$result->execute(array(':user' => $user, ':pass' => $pass));


 if ($result->fetchColumn() > 0) {
  
		$_SESSION["username"] = $_POST["username"];
		$_SESSION["login"] = 1;
        $_SESSION["pass"] = $_POST["password"];		
		
  }else
            {
			if(!isset($_POST["username"] ))
            {
			}else{
			echo '
			<div class="container-fluid"><div class="row"><div class="col-md-3"></div>
			<div class="col-md-6"><div class="container-fluid">
			<div class="alert alert-danger" role="alert">Username or Password is wrong!</div>
			</div><div class="col-md-3"></div></div></div>
			';
            }
			}$db = NULL;

}



  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }

  
	if ($_SESSION["login"] == 0)
        {  
  
		 include("login.php");
		
		}

		
	if ($_SESSION["login"] == 1)
        {
			 try
				{
				global $domain;
  session_start();
					$db2 = new PDO('sqlite:databases/db2.sqlite');
				 	$result2 = $db2->query("SELECT * FROM ts3dns WHERE username='".$_SESSION["username"]."'");
					$rows2 =  count($result2);
					
					$db3 = new SQLite3('databases/db2.sqlite');
					$test = $db3->querySingle("SELECT * FROM ts3dns WHERE username='".$_SESSION["username"]."'", false);
					
					if($test == 0){
					
						echo '
							 <a href="index.php?id=panel&p=logout" style="float: right;" class="btn btn-default" role="button">Logout</a>
							 
							 
							  <table style="border: 0px solid#888;" class="table table-hover">
								<thead>
								  <tr >
									<th><center>No entries found!</center></th>
								  </tr>
								</thead>	


<tbody>
          <tr>
            
		
			<td><center>
			<form  class="form-inline" method="POST" action="index.php?id=check">
			
           <div class="form-group">
								<div class="col-md-9">
									<input type="text" class="form-control" name="subname" placeholder="Subname">
									</div>
										</div><select class="form-control" name="domain1">
										  <option>'.$domain.'</option>
										</select>
									
										<button type="submit" name=submit value="Create" class="btn btn-default">ADD</button></form></center></td>
          </tr>
        </tbody>
		

								
							 </table>						 
							 ';
					
					echo '  
				
		
										';
					
					}else{
					
						echo '
							  <a href="index.php?id=panel&p=logout" style="float: right;" class="btn btn-default" role="button">Logout</a>
							 
							
							
		
      <!-- Table -->
      <table style="border: 0px solid#888;" class="table table-striped table-hover">
        <thead>
          <tr style="border: 0px solid#888;">
            <th>Subname</th>
			<th>Domain</th>
            <th>IP Address</th>
			<th>Port</th>
			<th>Functions</th>
          </tr>
        </thead>';
					
					}
					
					// geht nicht
							$dbl = new SQLite3('databases/db2.sqlite');
									$check2 = $dbl->querySingle("SELECT COUNT(*) as count FROM ts3dns WHERE username='".$_SESSION["username"]."'");
									
									
									$avck = $limit_dns - $check2;
			
						if(isset($_POST["dns_id_edit"])){
						
						// EDIT A RECORD
						
							$chedit1 = curl_init("https://www.cloudflare.com/api_json.html");
								
								curl_setopt($chedit1, CURLOPT_FOLLOWLOCATION, 1);
								curl_setopt($chedit1, CURLOPT_SSL_VERIFYPEER,false);

							// handling of -d curl parameter is here.
							$a_param = array(
								'a' => 'rec_edit',
								'tkn' => ''.$apikey.'',
								'id' => ''.$_POST["dns_id_edit"].'',
								'email' => ''.$email.'',
								'z' => ''.$domain.'',
								'type' => 'A',
								'name' => ''.$_POST["subname_edit"].'',
								'content' => ''.$_POST["ipedit"].'',
								'service_mode' => '1',
								'ttl' => '1'
							);
								curl_setopt($chedit1, CURLOPT_POST, 1);
								curl_setopt($chedit1, CURLOPT_POSTFIELDS, http_build_query($a_param));

								$a_result = curl_exec($chedit1);
								curl_close($chedit);
							

						// EDIT SRV
						
							$chedit2 = curl_init("https://www.cloudflare.com/api_json.html");
								
								curl_setopt($chedit2, CURLOPT_FOLLOWLOCATION, 1);
								curl_setopt($chedit2, CURLOPT_SSL_VERIFYPEER,false);
								
							// handling of -d curl parameter is here.
							$srv_param = array(
								'a' => 'rec_edit',
								'tkn' => ''.$apikey.'',
								'id' => ''.$_POST["srv_id_edit"].'',
								'service' => '_ts3',
								'protocol' => '_udp',
								'email' => ''.$email.'',
								'z' => ''.$domain.'',
								'type' => 'SRV',
								'name' => ''.$_POST["subname_edit"].'',
								'srvname' => ''.$_POST["subname_edit"].'',
								'ttl' => '120',
								'prio' => '0',
								'weight' => '5',
								'port' => ''.$_POST["portedit"].'',
								'target' => ''.$_POST["subname_edit"].'.'.$domain
							);
								curl_setopt($chedit2, CURLOPT_POST, 1);
								curl_setopt($chedit2, CURLOPT_POSTFIELDS, http_build_query($srv_param));

								$srv_result = curl_exec($chedit2);
								curl_close($chedit2);
						
						
							//Edit Database
								$_SESSION["portedit"] = $_POST["portedit"];
								$_SESSION["ipedit"] = $_POST["ipedit"];
								$_SESSION["id_edit"] = $_POST["id_edit"];
						
						
						
						Header('Location: edit.php');
							
						//echo 'ID1:'.$_POST["dns_id_edit"].'<br>';
						//echo 'ID2:'.$_POST["srv_id_edit"].'<br>';
						}			
						foreach($result2 as $row2)
							{			
													
								if($rows2 == 0)
								{
								
								}else{
						
						if(empty($_GET[p])){
							print '  
								<tbody>
								  <tr style="border: 0px solid#888;">
									
									<td>'.$row2['subname'].'</td>
									<td>'.$row2['domain'].'</td>
									<td>'.$row2['ipnr'].'</td>
									<td>'.$row2['portnr'].'</td>
								
									
									<td><a href="index.php?id=panel&sub='.$row2['subname'].'&p=edit" class="tooltip-toggle" data-toggle="tooltip" title="Edit DNS"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a> |
									<a href="index.php?id=panel&i='.$row2['dns_id'].'&s='.$row2['srv_id'].'&p=del" data-toggle="tooltip" title="Delete DNS"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
									
									</td>
								   
								  </tr>
								</tbody>';
					
							}
					
						
						
						  if(isset($_GET[p]) == 'edit')
						  {
							if($row2['subname'] == $_GET[sub]){
								
								print '  <form name="test" method="POST" action="index.php?id=panel">
								<tbody>
								  <tr>
									
									<td>'.$row2['subname'].'</td>
									<td>'.$row2['domain'].'</td>
									<td><div class="row">
										<div class="form-group has-success form-group-sm">
											<div class="col-md-8">
												<input type="text" class="form-control input-sm" name="ipedit" value="'.$row2['ipnr'].'">
											</div>
										</div>
									</div>
									</td>
									<td><div class="row">			
									<div class="form-group has-success form-group-sm">
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" name="portedit" value="'.$row2['portnr'].'">
												<input type="hidden" name="dns_id_edit" value="'.$row2['dns_id'].'">
												<input type="hidden" name="srv_id_edit" value="'.$row2['srv_id'].'">
												<input type="hidden" name="subname_edit" value="'.$row2['subname'].'">
												<input type="hidden" name="id_edit" value="'.$row2['id'].'">
											</div>
										</div>
									</div>
									</td>
										
									<td> <a href="#" onclick="document.test.submit()" class="tooltip-toggle" data-toggle="tooltip" title="Save DNS"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></a> | <a href="index.php?id=panel" class="tooltip-toggle" data-toggle="tooltip" title="Cancel"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a> | <a href="index.php?id=panel&sub='.$row2['subname'].'&p=edit" class="tooltip-toggle" data-toggle="tooltip" title="Edit DNS"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a> |
									<a href="index.php?id=panel&i='.$row2['dns_id'].'&s='.$row2['srv_id'].'&p=del" data-toggle="tooltip" title="Delete DNS"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
									
									</td>
								   
									</tr>
									</tbody></form>';
								}else{
									
									
									
									print '  
								<tbody>
								  <tr>
									
									<td>'.$row2['subname'].'</td>
									<td>'.$row2['domain'].'</td>
									<td>'.$row2['ipnr'].'</td>
									<td>'.$row2['portnr'].'</td>
								
									
									<td><a href="index.php?id=panel&sub='.$row2['subname'].'&p=edit" class="tooltip-toggle" data-toggle="tooltip" title="Edit DNS"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a> |
									<a href="index.php?id=panel&i='.$row2['dns_id'].'&s='.$row2['srv_id'].'&p=del" data-toggle="tooltip" title="Delete DNS"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
									
									</td>
								   
								  </tr>
								</tbody>';
				
								}
							}
							

							
							
						
							
							 
							
							

				}
				
	    
			}
			
			  $db2 = NULL;
			}
			 catch(PDOException $a)
  {
    print 'Exception : '.$a->getMessage();
  }
 
if($test != 0){
 if($check2 == $limit_dns)
 {
 
 echo '
 <tbody>
									  <tr>									
										<td>
 
 <div class="container-fluid"><div class="row"><h4><span class="label label-default">LIMIT : '.$check2.' / '.$limit_dns.' </span></h4></div></div>
 </td>
 <td></td><td></td><td></td><td></td></tr>
									</tbody>';
 }else{
 echo '
							 <form class="form-inline" method="POST" action="index.php?id=check">
							 
							 
							 <tbody>
									  <tr>
										
										<td>
						<div class="container-fluid"><div class="row"><h4><span class="label label-default">LIMIT : '.$check2.' / '.$limit_dns.' </span></h4></div></div>
										</td>
										<td>
										
															<div class="form-group">
											<div class="col-md-9">
											<input type="text" class="form-control" name="subname" placeholder="Subname">
											</div>
											</div>
										
										</td>
										<td>
										
											<select class="form-control" name="domain">
										  <option>'.$domain_n.'</option>
										</select>
											</td>
											
										<td>
										
										
									
											
											</td>
										<td>
										
										<button type="submit" name=submit value="Create" class="btn btn-default">ADD</button>
										
										</td>
									   
									  </tr>
									</tbody>';
									}
									}

			if($test == 0){
			}else{
			
				echo '</table>
	      </div></div>'; 
			}

		
		 
		}
	$d = $_GET['reg'];
  $add = $_GET['add'];
  $func = $_GET['p'];

	if($func == 'logout')
		{
     //hier kommt deine funktion rein
			session_destroy();
			header('Location: index.php?id=panel');
		}	

	if($add == 'check')
	{ 

		if ($_SESSION["login"] == 0)
        {  
		
		}else{
		$dbc = new SQLite3('databases/db2.sqlite');
		$check = $dbc->querySingle("SELECT * FROM ts3dns WHERE subname='".$_POST["subname"]."'", false);
					
			if($check != 0){
			
			echo '<div class="container-fluid"><div class="alert alert-danger" role="alert">Subname is not available!</div></div>';
			
			}elseif(empty($_POST["subname"])){
			
			echo '';
			
			}else{
			
			echo '<div class="container-fluid">
			
			<form class="form-horizontal"  method="POST" action="index.php?id=check">
	
			 <table style="border: 0px solid#888;" border="0" cellpadding="0" cellspacing="4">
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
							<button type="submit" name=submit value="save" class="form-control">Save</button>
							 </fieldset>
						</div>
				
					</table>

			
			</form>';
			
			}
	 }
	 
	 
	}

		
		
	if($func == 'del')
							{
						 //hier kommt deine funktion rein
								session_start();
									try {
										// Use database file "HomeAutomation.sql3" or create a new one if not exists:
										$db = new PDO('sqlite:databases/db2.sqlite');
										$db->exec("DELETE FROM ts3dns WHERE dns_id='".$_GET['i']."'");  
										
										
										$db = new PDO('sqlite:databases/db2.sqlite');
										$db->exec("DELETE FROM ts3dns WHERE srv_id='".$_GET['s']."'"); 
					
					$dns_delete_id= $_GET['i'];
					$srv_delete_id= $_GET['s'];
										
					// DELETE A RECORD
					$ch = curl_init("https://www.cloudflare.com/api_json.html");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
					
					
					$param = array(
						'a' => 'rec_delete',
						"tkn" => "".$apikey."",
						'id' => $dns_delete_id,
						"email" => "".$email."",
						"z" => "".$domain.""
					);
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));

					$result = curl_exec($ch);
					curl_close($ch);
					
				// DELETE SRV
					$ch = curl_init("https://www.cloudflare.com/api_json.html");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
					
					
					$param = array(
						'a' => 'rec_delete',
						"tkn" => "".$apikey."",
						'id' => $srv_delete_id,
						"email" => "".$email."",
						"z" => "".$domain.""
					);
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));

					$result = curl_exec($ch);
					curl_close($ch);
										
										
										
									}
									catch(PDOException $s)
									  {
										print 'Exception : '.$s->getMessage();
									  }
								header('Location: index.php?id=panel');
							}	
		
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

