<?php
  $servername="localhost";
  $username="root";
  $password="";
  $bdname="ensinoidiomas";

  $conn= new mysqli($servername, $username, $password, $bdname);
  $_SESSION['conn'] = $conn;
  if ($conn->connect_error) {

    die("Falha na conexão " . $conn->connect_error);

  }

?>
