<?php include("header.php"); ?>

<div class="content">
    <h2>Work Experience</h2>

    <ul>
        <?php foreach($experiences as $experience): ?>
            <li><?php echo $experience; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include("footer.php"); ?>