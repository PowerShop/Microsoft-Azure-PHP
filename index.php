<?php
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'jothanshop-server.mysql.database.azure.com', 'cnncpcbqme', 'Dekdee110#!!', 'mshop', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
} else {
  echo 'Success!';
}
?>
