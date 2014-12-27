
 <?php
 
$length = 10;
$length2 = 24;

$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$randomString2 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
$randomString3 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length2);
 
$datei = fopen("includes/".$randomString3.".config.inc.php","w"); 
			$config  = "<?php\n"; 
			$config .= "\n"; 
			$config .= "\$apikey = '".$_POST['api_key']."';\n";
			$config .= "\$email = '".$_POST['email']."';\n";
			$config .= "\$domain = '".$_POST['domain']."';\n";
			$config .= "\$limit_dns = '5';\n";
			$config .= "\n"; 
			$config .= "?>"; 
          fwrite($datei, $config); 
          fclose($datei);
		  
		  
	try {
    // Use database file "HomeAutomation.sql3" or create a new one if not exists:
    $db = new PDO('sqlite:databases/db1_'.$randomString.'.sqlite');
		
	$db->exec("CREATE TABLE members (id INTEGER PRIMARY KEY, username VARCHAR, password VARCHAR, email VARCHAR, user_geloescht INTEGER, letzter_login DATETIME, permissions INTEGER)");  

}
catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }


  
try {
    // Use database file "HomeAutomation.sql3" or create a new one if not exists:
    $db2 = new PDO('sqlite:databases/db2_'.$randomString2.'.sqlite');
		
	$db2->exec("CREATE TABLE ts3dns (id INTEGER PRIMARY KEY, username VARCHAR, dns_id VARCHAR, subname VARCHAR, domain VARCHAR, portnr VARCHAR, ipnr VARCHAR, srv_id VARCHAR)");  

}
catch(PDOException $e2)
  {
    print 'Exception : '.$e2->getMessage();
  }
	echo "<b>Config:</b> includes/".$randomString3.".config.inc.php<br>";	
	echo '<b>Database 1:</b> databases/db1_'.$randomString.'.sqlite<br>';
	echo '<b>Database 2:</b> databases/db2_'.$randomString2.'.sqlite<br>';


	
// EDIT DATA.PHP
	
$search1 = 'c1';
$replace1 = $randomString3;
$file1 = "data.php";

$content1 = file_get_contents($file1);
$content1 = str_replace($search1, $replace1, $content1);
$fh1 = fopen($file1, "w");
$content1 = fputs($fh1, $content1);
fclose($fh1);


$search2 = 'db1';
$replace2 = 'db1_'.$randomString.'';
$file2 = "data.php";

$content2 = file_get_contents($file2);
$content2 = str_replace($search2, $replace2, $content2);
$fh2 = fopen($file2, "w");
$content2 = fputs($fh2, $content2);
fclose($fh2);

$search3 = 'db2';
$replace3 = 'db2_'.$randomString2.'';
$file3 = "data.php";

$content3 = file_get_contents($file3);
$content3 = str_replace($search3, $replace3, $content3);
$fh3 = fopen($file3, "w");
$content3 = fputs($fh3, $content3);
fclose($fh3);

//EDIT SQLITE.PHP

$search4 = 'c1';
$replace4 = $randomString3;
$file4 = "sqlite.php";

$content4 = file_get_contents($file4);
$content4 = str_replace($search4, $replace4, $content4);
$fh4 = fopen($file4, "w");
$content4 = fputs($fh4, $content4);
fclose($fh4);


$search5 = 'db1';
$replace5 = 'db1_'.$randomString.'';
$file5 = "sqlite.php";

$content5 = file_get_contents($file5);
$content5 = str_replace($search5, $replace5, $content5);
$fh5 = fopen($file5, "w");
$content5 = fputs($fh5, $content5);
fclose($fh5);

//EDIT CHECK.PHP

$search6 = 'c1';
$replace6 = $randomString3;
$file6 = "check.php";

$content6 = file_get_contents($file6);
$content6 = str_replace($search6, $replace6, $content6);
$fh6 = fopen($file6, "w");
$content6 = fputs($fh6, $content6);
fclose($fh6);

$search7 = 'db2';
$replace7 = 'db2_'.$randomString2.'';
$file7 = "check.php";

$content7 = file_get_contents($file7);
$content7 = str_replace($search7, $replace7, $content7);
$fh7 = fopen($file7, "w");
$content7 = fputs($fh7, $content7);
fclose($fh7);

//EDIT EDIT.PHP

$search8 = 'c1';
$replace8 = $randomString3;
$file8 = "edit.php";

$content8 = file_get_contents($file8);
$content8 = str_replace($search8, $replace8, $content8);
$fh8 = fopen($file8, "w");
$content8 = fputs($fh8, $content8);
fclose($fh8);

$search9 = 'db2';
$replace9 = 'db2_'.$randomString2.'';
$file9 = "edit.php";

$content9 = file_get_contents($file9);
$content9 = str_replace($search9, $replace9, $content9);
$fh9 = fopen($file9, "w");
$content9 = fputs($fh9, $content9);
fclose($fh9);

//EDIT SERVGET.PHP

$search10 = 'c1';
$replace10 = $randomString3;
$file10 = "servget.php";

$content10 = file_get_contents($file10);
$content10 = str_replace($search10, $replace10, $content10);
$fh10 = fopen($file10, "w");
$content10 = fputs($fh10, $content10);
fclose($fh10);

$search11 = 'db2';
$replace11 = 'db2_'.$randomString2.'';
$file11 = "servget.php";

$content11 = file_get_contents($file11);
$content11 = str_replace($search11, $replace11, $content11);
$fh11 = fopen($file11, "w");
$content11 = fputs($fh11, $content11);
fclose($fh11);

//EDIT SUCCESS.PHP

$search12 = 'c1';
$replace12 = $randomString3;
$file12 = "success.php";

$content12 = file_get_contents($file12);
$content12 = str_replace($search12, $replace12, $content12);
$fh12 = fopen($file12, "w");
$content12 = fputs($fh12, $content12);
fclose($fh12);

$search13 = 'db2';
$replace13 = 'db2_'.$randomString2.'';
$file13 = "success.php";

$content13 = file_get_contents($file13);
$content13 = str_replace($search13, $replace13, $content13);
$fh13 = fopen($file13, "w");
$content13 = fputs($fh13, $content13);
fclose($fh13);



 
$datei = "lockinstall";  
$text = 'Dont delete this file, if you delete this you must install the folder again!'; 
$textdatei = fopen ($datei, "a+");  
fwrite($textdatei, $text); 
fclose($textdatei);


Header('Location: demo.php');
?> 
