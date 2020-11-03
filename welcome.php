<html>
<body> 
<style>
body {
background-image: url('https://4kwallpapers.com/images/walls/thumbs_3t/2734.png');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
font-family: 'Sansita Swashed', cursive;
font-size: 28px;
display: table-cell;
padding: 180px;
}
</style>

<center><h2>Welcome <?php echo $_POST["Name"]; ?><br>
Journey : <?php echo $_POST["Starting_place"]; ?>
-<?php echo $_POST["Destination"]; ?><br>
Get ready on: <?php echo $_POST["Journey_starting_date"]; ?>
 <?php echo $_POST["Journey_starting_time"];?> <br>
Thanks for your registration... Have a Great Journey...</h2><center>

<?php
$con = mysqli_connect('localhost', 'root', '','software');

// get the post records
$Name = $_POST['Name'];
$phone_number = $_POST['phone_number'];
$Journey_starting_date = $_POST['Journey_starting_date'];
$Journey_starting_time = $_POST['Journey_starting_time'];
$Starting_place = $_POST['Starting_place'];
$Destination = $_POST['Destination'];


// database insert SQL code
$sql = "INSERT INTO information (id, Name, phone_number, Journey_starting_date, Journey_starting_time, Starting_place, Destination) VALUES ('0', '$Name', '$phone_number', '$Journey_starting_date', '$Journey_starting_time', '$Starting_place', '$Destination')";

// insert in database 

if($con->query($sql) === FALSE)
{

echo "Registration Failed...";

}



?>

</body>
</html>