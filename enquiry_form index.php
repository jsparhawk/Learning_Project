<?php require 'database_connection.php'; ?>

<!doctype html>
<head>

 <meta charset="utf-8">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>Learning Project</title>
 <meta name="description" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="mycss.css">
   
</head>

<body>

<div class="menu">
<?php require 'menu.php';?>
</div>



<div class="form_controls">

    <H2>Display Leave</H2>

<form action="sql_store.php" method="post">
    <input type="radio" name="myaction" value="Display_Persons_Leave" checked> Display Persons Leave <input type="radio" name="myaction" value="Display_Team_Leave"> Display Team Leave <br>
    <br> <br>
    Staff No:<br>
    <input type="number" name="Staff_No" value="">
    <br><br>
	Date From:<br>
	<input type="date" name="Date_From" ><br><br>
	Date To:<br>
	<input type="date" name="Date_To" ><br><br>
	
    <input type="submit" value="Submit">
</form>
</div>



</body>

</html>