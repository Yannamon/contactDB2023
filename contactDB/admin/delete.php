<?php
	// include("../includes/header.php");
	// $contacts_id = $_GET['contacts_id'];
	// $company = $_GET['company'];
	// $person = $_GET['person_name'];
	// $contact = $_GET['contact'];
	// $email = $_GET['email'];
	// $phone = $_GET['phone'];
	
	// $url = $_GET['url'];
	// $address = $_GET['address'];
	
	// $city = $_GET['city'];
	// $province = $_GET['province'];
	// $postal = $_GET['postal'];
	// $description = $_GET['description'];
	// $resume = $_GET['resume'];


?>
<?php 



// include("includes/mysql_connect.php");
// $contacts_id = $_GET['contacts_id'];

// $sql = "DELETE FROM contacts WHERE contacts_id = '$contacts_id'";

// $result = mysqli_query($con, $sql) or die(mysqli_error($con));

// header("location:edit.php");

?>
<?php
include("../includes/header.php");

 

$eid = $_GET["contacts_id"];
$sql = "DELETE FROM contacts WHERE contacts_id='$eid'";

if ($con->query($sql) === TRUE) {
    header("Location:index.php");
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $con->error;
}
?>