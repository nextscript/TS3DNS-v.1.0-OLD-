<?
session_start();
 error_reporting(0);
 include("includes/c1.config.inc.php");

load_recs_srv_id();

function load_recs_srv_id() {


	global $apikey;
	global $email;
	global $domain;

    $url = "https://www.cloudflare.com/api_json.html";
    $data = array(
    "a" => "rec_load_all",
    "tkn" => "".$apikey."",
    "email" => "".$email."",
    "z" => "".$domain.""
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_FORBID_REUSE, true); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data ); 
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $test = curl_getinfo($ch);
    $http_result = curl_exec($ch);
    $error = curl_error($ch);
    $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);	
    curl_close($ch);
    $cloud_arr = json_decode($http_result,true); 
	
	
	$name = '_ts3._udp.'.$_SESSION["sub"].'';
	
	
    if ($http_code != 200) {
        print "Error: $error\n";
    } else {
	foreach($cloud_arr[ "response" ][ "recs" ][ "objs" ] as $item) {
	
	if($item[ "type" ] == 'SRV' && $item[ "display_name" ] == $name)
	{
				
                        $_SESSION["srvid"] = $item[ "rec_id" ];
                    
	}
	
        

 
		}
    }
}
try {
								// Use database file "HomeAutomation.sql3" or create a new one if not exists:
								$dbupdate = new PDO('sqlite:databases/db2.sqlite');
		
							$dbupdate->exec("UPDATE ts3dns SET srv_id='".$_SESSION["srvid"]."' WHERE subname='".$_SESSION["sub"]."'");  

										}
										catch(PDOException $g1)
										  {
											print 'Exception : '.$g1->getMessage();
										  }
header('Location: index.php?id=panel');
?>