<?php require_once('../common/db.php'); ?>
<?php
    $page = db_select('SELECT * FROM pages WHERE id = '.$_GET['id']);

    $page = $page[0];
?>
<?php require_once('includes/header.php'); ?>

<h2><?php echo $page['title']?></h2>
<div><?php echo $page['content']?></div>

<?php require_once('includes/footer.php'); ?>