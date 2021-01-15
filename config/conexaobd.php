<?php

$conn = mysqli_connect("localhost", "root", "123", "conatus");
if (!$conn)
    die ("Falha na conexão com o BD " . mysqli_connect_error());

?>