<?php

include ("includes/header.php");

?>

  <div>
        <h1><?php echo APP_NAME ?></h1>
        
        
      </div>

<?php $result = mysqli_query($con, "SELECT * FROM contacts"); ?>

<!-- Here we write the beginning of the while loop -->
<?php while ($row = mysqli_fetch_array($result)): ?>
    <div>
<p><a href="profile.php?contacts_id=<?php echo $row['contacts_id']?>"><?php echo $row['company'] ?></a></p> 



<?php endwhile; ?>     



<?php

include ("includes/footer.php");
?>