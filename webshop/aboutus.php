<?php require_once('../common/bootstrap.php'); ?>
<?php
$pages_collection = new PagesCollection();
$page = $pages_collection->get($_GET['id']);
?>
<?php require_once('includes/header.php'); ?>

<div id="div1">
	<h1> <?php echo $page->getTitle(); ?> <h1>
	<div id="div11">
		<?php echo $page->getContent();?>
	</div>
</div>
<?php require_once('includes/footer.php'); ?>