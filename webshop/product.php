<?php
require_once('../common/bootstrap.php');

$products_collection = new ProductsCollection();

$product = $products_collection->get($_GET['id']);

$product_images_collection = new ProductImageCollection($_GET['id']);
$images = $product_images_collection->get_all();

?>
<?php require_once('includes/header.php'); ?>
	<div id="div1">
		<div id="div41">
		
			<div id="div42">
			
				<img src="../storage/<?=$product->getImage(); ?>">
				<h3> <?php echo $product->getTitle() ?> </h3> 
				<a href="product_page.php?id=<?=$product->getId(); ?>">Buy now</a>
			</div>
			<div class="clear"></div>
					<p><?php echo $product->getContent(); ?></p>			
					
				<div id="div43">
					<h3>Gallery</h3>
					<?php foreach ($images as $value) { ?>
					<img src="../storage/<?=$value->getImage(); ?>">
					<?php } ?>
				</div>
				
		</div>
<?php require_once('includes/footer.php'); ?>