

<?php
$servername = "91.216.107.164";
$username = "puzzl725498";
$password = "Ymkt5xtb";
$dbname = "puzzl725498";

try {
    $mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $mysql->exec('SET NAMES UTF8');

    $mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>