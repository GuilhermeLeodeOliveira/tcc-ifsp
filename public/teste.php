<?php
/*
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "root", "", "ensinoidiomas");

$query = "SELECT * FROM aluno";

$result = mysqli_query($mysqli, $query);

// fetch a single value from the second column 
while ($Name = mysqli_fetch_column($result, 1)) {
    printf("%s\n", $Name);
}
*/

$servername="localhost";
$username="root";
$password="";
$bdname="ensinoidiomas";

$conn= new mysqli($servername, $username, $password, $bdname);
$_SESSION['conn'] = $conn;
if ($conn->connect_error) {

  die("Falha na conexão " . $conn->connect_error);

}

$sql = "SELECT * from aluno";
        
        $result = $conn->query($sql);

while($row = $result->fetch_array()) { $the_rows[] = $row; }
		/// later use like:
			foreach($the_rows as $row)
			{
				echo $row['nome'];
			}

?>