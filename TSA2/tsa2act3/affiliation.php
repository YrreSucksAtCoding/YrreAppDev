<?php include("header.php"); ?>

<div class="content">
    <h2>Affiliation</h2>

    <ul>
        <?php foreach($affiliations as $affiliation): ?>
            <li><?php echo $affiliation; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include("footer.php"); ?>