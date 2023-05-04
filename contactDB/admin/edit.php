<?php
	include("../includes/header.php");
	$contacts_id = $_GET['contacts_id'];
	$company = "";
	$person = "";
	$contact = "";
	$email = "";
	$phone = "";
	
	$url = "";
	$address = "";
	
	$city = "";
	$province = "";
	$postal = "";
	$description = "";
	$resume = 1;





	$strValidationCompany = "";
	$strValidationCity = "";
	$strValidationPhone1 = "";
	$strValidationEmail = "";

    $strSuccessMessage = "";

if(isset($_POST['mysubmit'])){

	//echo "submitted";




	$company = mysqli_real_escape_string($con, trim($_POST['company']));

	$person = mysqli_real_escape_string($con, trim($_POST['person_name']));$

	$email = mysqli_real_escape_string($con, trim($_POST['email']));
	
	$phone = mysqli_real_escape_string($con, trim($_POST['phone']));

	$url = mysqli_real_escape_string($con, trim($_POST['url']));

	$address = mysqli_real_escape_string($con, trim($_POST['address']));

	$province = mysqli_real_escape_string($con, trim($_POST['province']));

	$city = mysqli_real_escape_string($con, trim($_POST['city']));

	$postal = mysqli_real_escape_string($con, trim($_POST['postal']));

	$description = mysqli_real_escape_string($con, trim($_POST['description']));
	

	

	// if(isset($_POST['resume'])){
	// 	$resume = mysqli_real_escape_string($con, trim($_POST['resume']));
	// }
	

	//echo "$company, $contact, $email, $phone, $url, $address1, $city, $province, $postal, $description, $resume";

	$valid = 1;
	$msgPre = "<div class=\"alert alert-info\">";
	$msgPost = "</div>";


	// User val:
	if((strlen($company) < 3) || (strlen($company) > 40)){
		$valid = 0;
		$valCompanyMsg = "Please enter a Company Name from 3 to 40 characters.";
	}


	



	if($contacts_id == $_POST['contacts_id']){

		$company =$_POST['company'];
	$contact =$_POST['contact'];
	$email =$_POST['email'];
	$phone =$_POST['phone'];
	
	$url =$_POST['url'];
	$address =$_POST['address'];
	
	$city =$_POST['company'];
	$province =$_POST['company'];
	$postal =$_POST['company'];
	$description =$_POST['company'];
	$resume = "1";

	}


	if($valid == 1){
		//NO VALIDATION ERRORS: GO AHEAD AND SEND THE MAIL OR ENTER INTO A DB
		



		$sql = "UPDATE contacts SET company='$company',person_name='$person',email='$email',phone='$phone',url='$url',province='$province',city='$city',postal='$postal',address='$address',descrption='$description' WHERE contacts_id = '$contacts_id'";


	

		mysqli_query($con,$sql) or die (mysqli_error($con));
		



		$strSuccessMessage =  "Successfully inserted new contact";
		
	
		
		
	$company = "";
	$contact = "";
	$email = "";
	$phone = "";
	
	$url = "";
	$address = "";
	
	$city = "";
	$province = "";
	$postal = "";
	$description = "";
	$resume = "1";
	

	
		 
		
	}

}


?>

<h2>Edit</h2>
<form id="myform" class="cssform container" name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

  <div class="row">
    <div class="col-sm">
	<div class="form-group required">
		<label for="company">Company Name:</label>
		<input type="text" id="company"  class="form-control" name="company" placeholder="<?php echo $company; ?>" value="<?php echo $company; ?>">
		<?php if(isset($valCompanyMsg)){echo $msgPre. $valCompanyMsg. $msgPost;} ?>
	</div>

	<div class="form-group required">
		<label for="person_name">Person name:</label>
		<input type="text" id="person_name"  class="form-control" name="person_name" value="<?php echo $person; ?>">
		<?php if(isset($valCompanyMsg)){echo $msgPre. $valCompanyMsg. $msgPost;} ?>
	</div>

	<div class="form-group required">
		<label for="phone">Phone:</label>
		<input type="text" id="phone"  class="form-control" name="phone" value="<?php echo $phone; ?>">
		<?php if(isset($valCompanyMsg)){echo $msgPre. $valCompanyMsg. $msgPost;} ?>
	</div>
        <div class="form-group required">
		<label for="url">URL:</label>
		<input type="text" id="url"  class="form-control" name="url" value="<?php echo $url; ?>">
		<?php if(isset($valCompanyMsg)){echo $msgPre. $valCompanyMsg. $msgPost;} ?>
	</div>
	<div class="form-group required">
		<label for="adress">Adress:</label>
		<input type="text" id="adress"  class="form-control" name="adress" value="<?php echo $address; ?>">
		<?php if(isset($valCompanyMsg)){echo $msgPre. $valCompanyMsg. $msgPost;} ?>
	</div>
    </div>
    <div class="col-sm">
	<div class="form-group required">
		<label for="city">City:</label>
		<input type="text" id="city"  class="form-control" name="city" value="<?php echo $city; ?>">
		<?php if(isset($valCompanyMsg)){echo $msgPre. $valCompanyMsg. $msgPost;} ?>
	</div>
	<div class="form-group">
		<label for="province">Province:</label>
		<select class="form-control" name="province">
			<option value="">-select a province-</option>
			<option value="AB" <?php if(isset($province) && $province == "AB"){echo "selected";} ?>>Alberta</option>
			<option value="BC" <?php if(isset($province) && $province == "BC"){echo "selected";} ?>>British Columbia</option>
			<option value="MB" <?php if(isset($province) && $province == "MB"){echo "selected";} ?>>Manitoba</option>
			<option value="NB" <?php if(isset($province) && $province == "NB"){echo "selected";} ?>>New Brunswick</option>
			<option value="NL" <?php if(isset($province) && $province == "NL"){echo "selected";} ?>>Newfoundland and Labrador</option>
			<option value="NS" <?php if(isset($province) && $province == "NS"){echo "selected";} ?>>Nova Scotia</option>
			<option value="ON" <?php if(isset($province) && $province == "ON"){echo "selected";} ?>>Ontario</option>
			<option value="PE" <?php if(isset($province) && $province == "PE"){echo "selected";} ?>>Prince Edward Island</option>
			<option value="QC" <?php if(isset($province) && $province == "QC"){echo "selected";} ?>>Quebec</option>
			<option value="SK" <?php if(isset($province) && $province == "SK"){echo "selected";} ?>>Saskatchewan</option>
			<option value="NT" <?php if(isset($province) && $province == "NT"){echo "selected";} ?>>Northwest Territories</option>
			<option value="NU" <?php if(isset($province) && $province == "NU"){echo "selected";} ?>>Nunavut</option>
			<option value="YT" <?php if(isset($province) && $province == "YT"){echo "selected";} ?>>Yukon</option>
		</select>
	</div>
	<div class="form-group required">
		<label for="postal">Postal:</label>
		<input type="text" id="postal"  class="form-control" name="postal" value="<?php echo $postal; ?>">
		<?php if(isset($valCompanyMsg)){echo $msgPre. $valCompanyMsg. $msgPost;} ?>
	</div>
	<div class="form-group">
    <label for="description">description:</label>
    <textarea class="form-control" id="description" rows="3"></textarea>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="resume">
  <label class="form-check-label" for="resume">
    Resume
  </label>
</div>
	




	<div class="form-group">
		<label for="submit">&nbsp;</label>
		<input type="submit" name="mysubmit" class="btn btn-info" value="Submit">
	</div>
    </div>
    <div class="col-sm">
	<?php $result = mysqli_query($con, "SELECT * FROM contacts"); ?>

<!-- Here we write the beginning of the while loop -->
<?php while ($row = mysqli_fetch_array($result)): ?>
    <div>
<p><a href="edit.php?contacts_id=<?php echo $row['contacts_id']?>"><?php echo $row['company'] ?></a></p> 



<?php endwhile; ?>     
<p><a href="edit.php?contacts_id=<?php echo $row['contacts_id']?>">Edit</a> | <a href="delete.php?contacts_id=<?php echo $row['contacts_id']?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></p>
    </div>

    </div>
  </div>

    



</form>
<?php

if($strSuccessMessage){
	echo $msgPre.$strSuccessMessage.$msgPost;
}
?>

<?php
	include("../includes/footer.php");
?>