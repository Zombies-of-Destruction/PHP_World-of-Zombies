<?php
  // PFADE müssen angepasst werden!
  include("_mysql.php");
  system("C:\\xampp\\mysql\\bin\\mysqldump.exe -u ".$mysql['user']." -p".$mysql['pw']." -h ".$mysql['host']." ".$mysql['db']." > C:\\xampp\\htdocs\\Wolrd-of-Zombies\\TEMP_MYSQL_STRUKTUR.sql", $fp);
  //system("D:\\xampp\\mysql\\bin\\mysqldump.exe -u ".$mysql['user']." --no-data -h ".$mysql['host']." ".$mysql['db']." > D:\\xampp\\htdocs\\zodgame\\TEMP_MYSQL_STRUKTUR.sql", $fp);
  //system("G:\\xampp\\mysql\\bin\\mysqldump.exe -u " . $mysql['user'] . " --no-data -h " . $mysql['host'] . " " . $mysql['db'] . " > G:\\xampp\\htdocs\\zodgame\\TEMP_MYSQL_STRUKTUR.sql", $fp);
  //system("mysqldump -u ".$mysql['user']." --no-data -h ".$mysql['host']." ".$mysql['db']." > TEMP_MYSQL_STRUKTUR.sql", $fp);
  if ($fp==0)
    echo "Daten exportiert";
  else
    echo "Es ist ein Fehler aufgetreten";
?>

