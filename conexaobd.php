<?php

$conn = mysqli_connect("localhost", "root", "", "conatus");
if (!$conn)
    die ("Falha na conexão com o BD " . mysqli_connect_erro());
else
    echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.<br>";

?>