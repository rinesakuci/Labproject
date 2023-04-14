<<<<<<< HEAD
<?php


$host='localhost';
$dbname= 'menagdb';
$username='root';
$password="";
try{
    $pdo= new PDO("mysql: host=$host;dbname=$dbname",$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Connection failed: " .$e->getMessage();




}




=======
<?php


$host='localhost';
$dbname= 'menagdb';
$username='root';
$password="";
try{
    $pdo= new PDO("mysql: host=$host;dbname=$dbname",$username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Connection failed: " .$e->getMessage();




}




>>>>>>> d8bcd70b2a90e0fc624dc421b9006ddba0e4577d
?>