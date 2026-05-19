<?php include("header.php"); ?>

<div class="content">
    <h2>Personal Information</h2>
    <p><b>Name:</b> <?php echo $firstname . " " . $lastname; ?></p>
    <p><b>Course:</b> <?php echo $course; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Phone:</b> <?php echo $phone; ?></p>
    <p><b>Address:</b> <?php echo $address; ?></p>
</div>

<?php include("footer.php"); ?>