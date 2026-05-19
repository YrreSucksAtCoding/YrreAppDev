<?php include("header.php"); ?>

<div class="content">
    <h2>Skills</h2>

    <ul>
        <?php foreach($skills as $skill): ?>
            <li><?php echo $skill; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include("footer.php"); ?>