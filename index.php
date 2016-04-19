
<?
if($_GET["id"] == "panel"){
}elseif($_GET["id"] == "login"){
}elseif($_GET["id"] == "add"){
}elseif($_GET["id"] == "check"){
}elseif($_GET["id"] == "complete"){
}elseif($_GET["id"] == "apply"){
}elseif($_GET["id"] == "success"){
}else{

include('header.inc.php'); 
}
	if (isset($_GET['id'])){
        $action=$_GET['id'];
    } else {
        $action='';
    }
	
	switch ($action){
		case "":
            echo "";
            break;
        case 'login':
            require_once('login1.php');
            $command=new controller_Welcome();
            break;
		case 'panel':
            require_once('data.php');
            $command=new controller_Welcome();
            break;
		case 'register':
            require_once('reg1.php');
            $command=new controller_Welcome();
            break;
		case 'add':
            require_once('sqlite.php');
            $command=new controller_Welcome();
            break;
		case 'complete':
            require_once('inputdns.php');
            $command=new controller_Welcome();
            break;
		case 'check':
            require_once('check.php');
            $command=new controller_Welcome();
            break;
		case 'apply':
            require_once('goin.php');
            $command=new controller_Welcome();
            break;
		case 'success':
		 require_once('success.php');
            $command=new controller_Welcome();
            break;
		case 'demo':
		 require_once('demo.php');
            $command=new controller_Welcome();
            break;
		case 'install':
		 require_once('install.php');
            $command=new controller_Welcome();
            break;
			
    }
	if($action )
	{
	$command->execute();
	}else{
	}
	error_reporting(E_ALL);
	
	?>

	<style type="text/css">
  body {
	background-image: url(http://res.cloudinary.com/fredy007/image/upload/v1419195901/ts3dnspanel/bg.jpg);
	background-position: top center;
	background-attachment: fixed;
	background-repeat: no-repeat;
	margin: 1px auto;
	</style>
	 

	<div style="position:relative; top:20px;"  class="container-fluid">
	 <div class="row">
	<div class="col-xs-3"></div>
	<div class="col-xs-6">
	
		<div class="well" style=" padding: 0px;  border-radius: 0px; position:relative; top:-10px; border: 0px; ">	
			
			<div class="jumbotron">
  <h2>Welcome to TS3DNS!</h2>
  <p>TS3DNS is a free service that allows users to create his own Teamspeak 3 DNS Hosting!</p><br></br>
<?
$filename = 'lockinstall';

		if (file_exists($filename)) {
			echo 'You are now ready to use the TS3DNS Panel!';
		}else{
		
		echo '<a class="btn btn-primary btn-lg" href="index.php?go=create" role="button">Create NOW</a>';
		
		}
		
		if($_GET["go"] == "create"){
		
		$length = 5;
		$randomid = substr(str_shuffle("0123456789"), 0, $length);
		Header('Location: folder.php?p=u_'.$randomid.'');
		}else{
		}
		
?>

  </div>
	  </div>
		
	
	</div>
	<div class="col-xs-3"></div>

</div>
	</div>
	
	<? include('footer.inc.php'); ?>
