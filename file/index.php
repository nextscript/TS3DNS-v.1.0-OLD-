
<?
include('header.inc.php'); 

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
			
    }
	if($action )
	{
	$command->execute();
	}else{
	}
	error_reporting(0);
	
	?>
	
	 <div style="position:relative; top:20px;  class="container-fluid">
  <div class="row">
	
	<div class="col-xs-2"></div>
	<div class="col-xs-8">
	
		<div class="well" style=" padding: 0px;  border-radius: 0px; position:relative; top:-10px; border: 0px; ">	
			
			<div class="jumbotron">
  <h2>Welcome to TS3DNS!</h2>
  <p>TS3DNS is a free service that allows users to create his own Teamspeak 3 DNS Hosting!</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Create NOW</a></p>
</div>
	
		</div>
	
	</div>
	<div class="col-xs-2"></div>

  </div>
</div>
	
	
	<? include('footer.inc.php'); ?>