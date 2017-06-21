
<?php



require 'menu.php';

echo "<H2>Results</H2>";



//executes sql statement that updates database
function submit_sql($conn, $sql) {

if (mysqli_query($conn, $sql)) {
   echo "<H3>Database Updated Successfully</H3>";

}
else {
    echo "SQL Error: " . mysqli_error($conn);
}
}




//executes sql statement and returns the result
function submit_sql_return_result($conn, $sql) {
$result = mysqli_query($conn, $sql);
var_dump($result);
//print_r($result);

echo "<table border='1' style=width:100%>";  
echo "<th>Staff No</th><th>Forename</th><th>Surname</th><th>Type of Leave</th><th>Date From</th><th>Date To</th><th>Leave Balance</th>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
	
		echo "<tr><td>".$row['Staff_No']."</td><td>".$row['Forename']."</td><td>".$row['Surname']."</td><td>".$row['Type_of_Leave'].
			"</td><td>".$row['Date_From']."</td><td>".$row['Date_To']."</td><td>".$row['Leave_Balance']."</td></tr>";
	}
echo "</table>";
} else {
    echo "0 results";
}
}

?>