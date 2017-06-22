<?php require 'database_connection.php'; ?>
<?php //require 'results_form.php'; ?>
<?php require 'common_functions.php'; ?>



<?php


//initialize variables with values from
$Staff_No = $_POST['Staff_No'];
$Forename = array_key_exists('Forename',$_POST) ? $_POST['Forename'] : null;
$Surname = array_key_exists('Surname',$_POST) ? $_POST['Surname'] : null;
$Type_of_Leave = array_key_exists('Type_of_Leave',$_POST) ? $_POST['Type_of_Leave'] : null;
$Date_From = array_key_exists('Date_From', $_POST) ? $_POST['Date_From'] : null;
$Date_To = array_key_exists('Date_To', $_POST) ? $_POST['Date_To'] : null;
$Leave_Balance = array_key_exists('Leave_Balance', $_POST) ? $_POST['Leave_Balance'] : null;

//Set $myaction to the radio button selected
$myaction = $_POST['myaction'];



//sets $sql variable and calls stored procedure

switch ($myaction) {
    case "Add_Staff":
		$sql = "call Add_Staff('$Staff_No', '$Forename' , '$Surname', '$Leave_Balance')";
		submit_sql($conn, $sql);
        break;
    case "Amend_Name":
        $sql = "call Amend_Name('$Staff_No', '$Forename' , '$Surname')";
		submit_sql($conn, $sql);
        break;
    case "Delete_Staff":
        $sql = "call Delete_Staff('$Staff_No')";
		submit_sql($conn, $sql);
        break;
	case "Add_Leave":
		$sql = "call Add_Leave('$Staff_No', '$Type_of_Leave', '$Date_From', '$Date_To')";
		submit_sql($conn, $sql);
		break;
	case "Delete_Leave":
		$sql = "call Delete_Leave('$Staff_No', '$Date_From')";
		submit_sql($conn, $sql);
		break;
	case "Amend_Type_of_Leave":
		$sql = "call Amend_Type_of_Leave('$Staff_No','$Date_From','$Type_of_Leave')";
		submit_sql($conn, $sql);
		break;
	case "Display_Persons_Leave":
		$sql = "call Display_Persons_Leave('$Staff_No','$Date_From', '$Date_To')";
		submit_sql_return_result($conn, $sql);
		break;
	case "Display_Team_Leave":
		$sql = "call Display_Team_Leave('$Date_From', '$Date_To')";
		submit_sql_return_result($conn, $sql);
		break;
    default:
        echo "Please select a radio button!";
}


?>


