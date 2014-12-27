
<?php
mkdir("".$_GET['p']."", 0777);


$file = 'check.php';
$file2 = 'create.php';
$file3 = 'data.php';
$file4 = 'edit.php';
$file5 = 'header.inc.php';
$file6 = 'index.php';
$file7 = 'login.php';
$file8 = 'servget.php';
$file9 = 'setup.php';
$file10 = 'sqlite.php';
$file11 = 'success.php';
$file12 = 'footer.inc.php';
$file13 = 'demo.php';
$file14 = 'install.php';
$file15 = 'logo.inc.php';

$newfile = ''.$_GET["p"].'/check.php';
$newfile2 = ''.$_GET["p"].'/create.php';
$newfile3 = ''.$_GET["p"].'/data.php';
$newfile4 = ''.$_GET["p"].'/edit.php';
$newfile5 = ''.$_GET["p"].'/header.inc.php';
$newfile6 = ''.$_GET["p"].'/index.php';
$newfile7 = ''.$_GET["p"].'/login.php';
$newfile8 = ''.$_GET["p"].'/servget.php';
$newfile9 = ''.$_GET["p"].'/setup.php';
$newfile10 = ''.$_GET["p"].'/sqlite.php';
$newfile11 = ''.$_GET["p"].'/success.php';
$newfile12 = ''.$_GET["p"].'/footer.inc.php';
$newfile13 = ''.$_GET["p"].'/demo.php';
$newfile14 = ''.$_GET["p"].'/install.php';
$newfile15 = ''.$_GET["p"].'/logo.inc.php';

copy($file, $newfile);
copy($file2, $newfile2);
copy($file3, $newfile3);
copy($file4, $newfile4);
copy($file5, $newfile5);
copy($file6, $newfile6);
copy($file7, $newfile7);
copy($file8, $newfile8);
copy($file9, $newfile9);
copy($file10, $newfile10);
copy($file11, $newfile11);
copy($file12, $newfile12);
copy($file13, $newfile13);
copy($file14, $newfile14);
copy($file15, $newfile15);

?>



<?php
chmod("".$_GET['p']."", 0777);

$search = '<a class="btn btn-primary btn-lg" href="index.php?go=create" role="button">Create NOW</a>';
$replace = '<p><b><u>How to Install!:</u></b></p><br></br>
  <p>1. You must have a <b>Domain!</b></p>
  <p>2. Create a <b>CloudFlare.com Account!</b></p>
  <p>3. Transfer your <b>Domain</b> to <b>CloudFlare</b></p>
  <p>4. Go to <b>Account</b> and Create a <b>API KEY</b></p>
  <p>5. Now you are ready to push the <b>SETUP GO</b> button</p>
  <p><a class="btn btn-primary btn-lg" href="index.php?id=install" role="button">SETUP GO</a></p>';
$file = "".$_GET['p']."/index.php";

$content = file_get_contents($file);
$content = str_replace($search, $replace, $content);
$fh = fopen($file, "w");
$content = fputs($fh, $content);
fclose($fh);


$server=$_SERVER['SERVER_NAME'];
$datei=$_SERVER['SCRIPT_NAME'];

$phpfad=substr($datei,0,strrpos($datei,"/")+1); // mit Slash am Ende , ohne +1 = Ohne Slash
// sucht mit strrpos in der Zeichenkette nach dem letzten slash und 
// schneidet alles dahinter ab mit substr



$search2 = 'src="index.php?id=panel"';
$replace2 = 'src="http://'.$server.$phpfad.'/'.$_GET['p'].'index.php?id=panel"';
$file2 = 'http://'.$server.$phpfad.'/'.$_GET['p'].'/install.php';

$content2 = file_get_contents($file2);
$content2 = str_replace($search2, $replace2, $content2);
$fh2 = fopen($file2, "w");
$content2 = fputs($fh2, $content2);
fclose($fh2);

Header('Location: '.$_GET['p'].'/index.php');
?>
