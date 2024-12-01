<?php
$pass = getopt("", ["pass:"]);

if(isset($pass['pass'])) {
$salt = bin2hex(random_bytes(16));
$pass = $pass['pass'];
$password_salt = $salt . $pass;
echo $salt . "\n";
echo password_hash($password_salt, PASSWORD_BCRYPT);
}else{
  echo "require pass attribute";
}
?>
