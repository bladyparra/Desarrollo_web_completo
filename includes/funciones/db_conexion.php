<?php

    $conn = new mysqli('localhost', 'root', '', 'gdlwebcamp');

    if ($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }
    //  if (!$conn->set_charset("utf8")) {
    //     printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    //     exit();
    // } else {
    //     printf("Conjunto de caracteres actual: %s\n", $conn->character_set_name());
    // }