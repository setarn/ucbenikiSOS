<!DOCTYPE html>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST) && isset($_POST['ime'])){
	$ime = $_POST['ime'];
	$priimek = $_POST['priimek'];
	
	$sql = "INSERT INTO imena (ime, priimek)
VALUES ('".$ime."', '".$priimek."')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}

#if(isset($_POST) && isset($_POST['skrit'])){
	$sql = "SELECT id, ime, priimek FROM imena;";
	$result = $conn->query($sql);
#}


$conn->close();
?>
<html>
	<head>
		

<script type="text/javascript">
    function hide(){
        document.getElementById('id').hidden = true;
    }
    function show(){
        document.getElementById('id').hidden = false;
    }
</script>

	
	</head>
	<body>
		<h1>
			To je moja prva stran
		</h1>
		<form action="test.php" method="post">
			<input type="text" id="ime" name="ime" value="">
			<input type="text" id="priimek" name="priimek" value="">
			<input type="submit" value="Shrani">
		</form>
		<form action="test.php" method="post">
			<div id="prikazi">
				<table name="tabela" id="prvaTabela" border="1">
					<thead>
						<tr>
							<td>Ime</td>
							<td>Priimek</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							while($row = $result->fetch_assoc()) {
								echo "<tr>";
								echo "<td>".$row['ime']."</td>"."<td>".$row['priimek']."</td>";	
								echo "</tr>";	
							}
						?>
					</tbody>
				</table>
			</div>
			<input type="button" value="Prikaži podatke" onclick="">
			<input type="hidden" name="skrit" value='1'>
		</form>
	</body>
</html>