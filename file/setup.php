		<?
		
		
		 chmod("databases", 0777);
		 chmod("includes", 0777);
		
		?>
		
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
						
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-2"></div>
									<div class="col-md-8">
									<form id="signupform" class="form-horizontal" method="POST" action="create.php">
										
										<div class="form-group">
										<label for="email" class="col-md-4 control-label">Email</label>
										<div class="col-md-4">
										<input type="text" class="form-control" name="email" placeholder="Email">
										</div>
										</div>
										
										<div class="form-group">
										<label for="password" class="col-md-4 control-label">Domain</label>
										<div class="col-md-4">
										<input type="text" class="form-control" name="domain" placeholder="Domain">
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
							</div>
										
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>