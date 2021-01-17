<?php

$conn = mysqli_connect("localhost", "root", "123", "conatus");
mysqli_set_charset($conn, "utf8");
if (!$conn)
    die ("Falha na conexão com o BD " . mysqli_connect_error());

?>
