<?php

require_once 'registeration.php';

$connect = mysqli_connect('localhost', 'root', '', 'tocha');

if(!$connect){
    die("Something went wrong:(");
}
