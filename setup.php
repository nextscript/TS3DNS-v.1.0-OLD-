		<?
		error_reporting(0);
		
		if(is_dir("databases")){
		
		}elseif(is_dir("includes")){
		}else{
		
			mkdir("databases", 0777);
			mkdir("includes", 0777);
			chmod("databases", 0777);
			chmod("includes", 0777);
			
		 $dateiname01 = "databases/index.php";
		 $handler01 = fOpen($dateiname01 , "a+");
		 fWrite($handler01 , '');
		 fClose($handler01); 
		 
		 $dateiname02 = "includes/index.php"; 
		 $handler02 = fOpen($dateiname02 , "a+");
		 fWrite($handler02 , '');
		 fClose($handler02);
		
		}
		?>
		<style type="text/css">
  body {
	background-image: url(http://res.cloudinary.com/fredy007/image/upload/v1419195901/ts3dnspanel/bg.jpg);
	background-position: top center;
	background-attachment: fixed;
	background-repeat: no-repeat;
	margin: 1px auto;
	</style>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
					<body style="background:transparent" >	
						<div  class="container-fluid" style="position:relative; top:100px;" >
							<div class="row">
								<div class="col-md-3"></div>
									<div class="col-md-6">
									<form id="signupform" class="form-horizontal" method="POST" action="create.php">
										
										<div class="form-group">
										<label for="email" class="col-md-4 control-label">Email</label>
										<div class="col-md-4">
										<input type="text" class="form-control" name="email" placeholder="CloudFlare Email">
										</div>
										</div>
										
										<div class="form-group">
										<label for="password" class="col-md-4 control-label">Domain</label>
										<div class="col-md-4">
										<input type="text" class="form-control" name="domain" placeholder="Domain without http://www.">
										</div>
										</div>
									
										<div class="form-group">
										<label for="firstname" class="col-md-4 control-label">API KEY</label>
										<div class="col-md-4">
										<input type="text" class="form-control" name="api_key" placeholder="CloudFlare API">
										</div>
										</div>
																			
										<div class="form-group">
										<div class="col-md-offset-4 col-md-4">
										<button type="submit" name=submit value="Create" class="btn btn-default">Create</button>
										<span style="margin-left:8px;"></span>
										</div>
										</div>
										
											</form>
										
									</div>
							</div>
							<div class="col-md-3"></div>
							</div>
						
					</body>					
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js" ></script>
	
