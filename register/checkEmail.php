<?php
include "../connect.php";

$stmt = $pdo->prepare("SELECT * FROM users WHERE Email = ?");
 $stmt->bindParam(1, $_GET["Email"]);

   $stmt->execute();    
   $row = $stmt->fetch();  

  $takenEmail =  $row["Email"];


sleep(1);

if ($_GET["Email"]!=$takenEmail) {
	echo "okay";
} else {
	echo "denied";
}


?>
