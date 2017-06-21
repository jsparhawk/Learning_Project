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

    <H2>Add / Update Staff Details</H2>

<form action="sql_store.php" method="post">
    <input type="radio" name="myaction" value="Add_Staff" checked> Add Staff <input type="radio" name="myaction" value="Delete_Staff"> Delete Staff  <input type="radio" name="myaction" value="Amend_Name"> Amend Name<br>
    <br> <br>
    Forename:<br>
    <input type="text" name="Forename" value="">
    <br><br>
    Surname:<br>
    <input type="text" name="Surname" value="">
    <br><br>
    Staff No:<br>
    <input type="number" name="Staff_No" value="">
    <br><br>
	Leave Balance:<br>
	<input type="number" name="Leave_Balance" value="">
	<br><br>
    <input type="submit" value="Submit">
</form>
</div>



</body>

</html>