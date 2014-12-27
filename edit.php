<?
 error_reporting(0);
 include("includes/c1.config.inc.php");

   session_start();

try {
								// Use database file "HomeAutomation.sql3" or create a new one if not exists:
								$dbupdate = new PDO('sqlite:databases/db2.sqlite');
		
							$dbupdate->exec("UPDATE ts3dns SET portnr='".$_SESSION["portedit"]."', ipnr='".$_SESSION["ipedit"]."' WHERE id='".$_SESSION["id_edit"]."'");  

										}
										catch(PDOException $g)
										  {
											print 'Exception : '.$g->getMessage();
										  }
										  Header('Location: index.php?id=panel');
										  ?>