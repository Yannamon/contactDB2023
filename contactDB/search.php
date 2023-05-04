<?php

include ("includes/header.php");
$searchterm = "";
?>

<h1>Search</h1>
        
<?php 

if(isset($_POST['searchterm']) && strlen($_POST['searchterm']) > 2):
$searchterm = $_POST['searchterm'];

$sql = "SELECT * FROM contacts WHERE
    company LIKE '%$searchterm%'
    OR person_name LIKE '%$searchterm%'
    OR description LIKE '%$searchterm%'
";

$result = mysqli_query($con, $sql);
?>
  


    

    <!-- Here we write the beginning of the while loop -->
    <?php while ($row = mysqli_fetch_array($result)): ?>

    <p><a href="profile.php?contacts_id=<?php echo $row['contacts_id']?>"><?php echo $row['company'] ?></a></p> 

    <?php endwhile; ?>       
 
<?php endif; ?>



<form action="<?php echo BASE_URL ?>search.php" method="post">

    <div class="form-group required">
		<label for="searchterm">Search term:</label>
		<input type="text" id="company"  class="form-control" name="searchterm" value="<?php echo $searchterm; ?>">
		
	</div>

    <div class="form-group">
		<label for="submit">&nbsp;</label>
		<input type="submit" name="mysubmit" class="btn btn-success" value="Submit">
	</div>

</form>






<?php

include ("includes/footer.php");
?>