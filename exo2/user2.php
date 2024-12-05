<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
}

var_dump($_POST);





?>