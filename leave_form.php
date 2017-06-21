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

    <H2>Add / Update Leave Details</H2>

<form action="sql_store.php" method="post">
    <input type="radio" name="myaction" value="Add_Leave" checked> Add Leave <input type="radio" name="myaction" value="Delete_Leave"> Delete Leave  <input type="radio" name="myaction" value="Amend_Type_of_Leave"> Amend Type of Leave<br>
	<br><br>
	Staff No:<br>
    <input type="number" name="Staff_No" value=""><br><br>


	<h>Type of Leave:</h><br>
	<select name="Type_of_Leave">
	  <option value="Annual">Annual</option>
	  <option value="Flexi">Flexi</option>
	  <option value="Toil">Toil</option>
	  <option value="Other">Other</option>
	</select>
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