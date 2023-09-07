<?php

define('user','nada');
define('password','roby');
$dsn='mysql:host=localhost;dbname=cardb';
try{
$db=new PDO($dsn,user,password);

}
catch(PDOException $e){
$err_msg=$e->getMessage();
echo "<p>$err_msg</p>";
exit();
}
?>