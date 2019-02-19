<?php
include "../connect.php";

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
 $stmt->bindParam(1, $_GET["username"]);

   $stmt->execute();    // 3. เริ่มค้นหา
   $row = $stmt->fetch();  

  $takenUsernames =  $row["username"];


sleep(1);

if ($_GET["username"]!=$takenUsernames) {
	echo "okay";
} else {
	echo "denied";
}




?>
