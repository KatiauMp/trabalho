<?php

$password = "123456";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;
echo "<br/>";

$query = $conn->query("SELECT * FROM cliente WHERE email = '{$email}'");
$row = $query->fetch_assoc();
if (password_verify($row['senha'], $hash)) {
    echo 'Success!';
}
else {
    echo 'Invalid';
}



?>