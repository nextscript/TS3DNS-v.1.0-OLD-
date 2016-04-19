
<?

	error_reporting(0);
	
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
			
			  <script type="text/javascript">
         function calcHeight()
         {
         //find the height of the internal page
         var the_height=
         document.getElementById('the_iframe').contentWindow.
         document.body.scrollHeight;

         //change the height of the iframe
         document.getElementById('the_iframe').height=
         the_height;
         }
</script>
       

    <iframe width="100%" src="index.php?id=panel" 
    scrolling="no" id="the_iframe" onLoad="calcHeight();" height="500px" frameborder="0" ></iframe>
 
			
			
	
	<center>
	<p><b>Embedding code:</b></p>
	<textarea name="user_eingabe" cols="50" rows="10"><script type="text/javascript">
         function calcHeight()
         {
         //find the height of the internal page
         var the_height=
         document.getElementById('the_iframe').contentWindow.
         document.body.scrollHeight;

         //change the height of the iframe
         document.getElementById('the_iframe').height=
         the_height;
         }
</script><iframe width="100%" src="<?$server=$_SERVER['SERVER_NAME'];
$datei=$_SERVER['SCRIPT_NAME'];

$phpfad=substr($datei,0,strrpos($datei,"/")+1); // mit Slash am Ende , ohne +1 = Ohne Slash
// sucht mit strrpos in der Zeichenkette nach dem letzten slash und 
// schneidet alles dahinter ab mit substr

echo 'http://'.$server.$phpfad.'';?>index.php?id=panel" 
    scrolling="no" id="the_iframe" onLoad="calcHeight();" height="500px" frameborder="0" ></iframe>
</textarea></center>
		</div>
	
	</div>
	<div class="col-xs-3"></div>

  </div>
</div>

	<? include('footer.inc.php');  ?>
