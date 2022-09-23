<?php
  $servername="us-cdbr-east-06.cleardb.net";
  $username="b239746dacd964";
  $password="0874e7e3";
  $bdname="heroku_e15bdec44131aa1";

  $conn= new mysqli($servername, $username, $password, $bdname);
  $_SESSION['conn'] = $conn;
  if ($conn->connect_error) {

    die("Falha na conexão " . $conn->connect_error);

  }

?>
