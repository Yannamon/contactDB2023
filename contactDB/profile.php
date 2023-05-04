<?php
$contacts_id = $_GET['contacts_id'];
if(!is_numeric($contacts_id)){
    header("Location:index.php");// must happen before any browser output.
}

include ("includes/header.php");

// echo "<h1>$contacts_id </h1>";// just for testing
// $resume = "";
// $resume = $_GET['resume'];

// if($resume == 1){
//     echo '<span class="material-symbols-outlined">
//     sticky_note_2
//     </span>';
// }

?>

  
<h1>Company Profile</h1>
    

<?php $result = mysqli_query($con, "SELECT * FROM contacts WHERE contacts_id = '$contacts_id'"); ?>

<!-- Here we write the beginning of the while loop -->
<?php while ($row = mysqli_fetch_array($result)): ?>
    <p>Company: <?php echo $row['company'] ?></p> 
<p>Name: <?php echo $row['person_name'] ?></p>
<p>Phone: <?php echo $row['phone'] ?></p>
<p>Email: <?php echo $row['email'] ?></p>
<p>Url: <a href="<?php echo $row['url'] ?>"><?php echo $row['url'] ?></a> </p>
<p>Address: <?php echo $row['address'] ?></p>
<p>City: <?php echo $row['city'] ?></p>
<p>Province: <?php echo $row['prov'] ?></p>
<p>Postal code: <?php echo $row['postal'] ?></p>
<p>Description: <?php echo $row['description'] ?></p>
<p>Resume: <?php echo $row['resume'] ?></p>


<?php endwhile; ?>       
<p><a href="admin/edit.php?contacts_id=<?php echo $row['contacts_id']?>" class="btn btn-primary">Edit</a></p>
    </div>
    

<a href="admin/delete.php?contacts_id=<?php echo $contacts_id ?>" class="btn btn-danger"
>Delete</a>

<?php

include ("includes/footer.php");
?>