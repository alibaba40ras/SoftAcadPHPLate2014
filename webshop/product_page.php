<?php 
require_once('../common/bootstrap.php'); 

$products_collection = new ProductsCollection();

$product = $products_collection->get($_GET['id']);

$success = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$orders_collection = new OrdersCollection();
	$order = new Order();
	$order->setProductId($_GET['id'])
		->setName($_POST['name'])
		->setEmail($_POST['email'])
		->setPhone($_POST['phone']);
	$orders_collection->save($order);

 	$success = 1;
    //header('Location: product_page.php');
}
?>
<?php require_once('includes/header.php'); ?>
<div id="div1">
			<?php if ($success == 1) { ?>
			<h1>USPEEEEHHHHH!!!!</h1>
			<?php } ?>	

				<img src="../storage/<?=$product->getImage();?>" width="200">
						<h3> <?php echo $product->getTitle(); ?>
							<h4> <?php echo $product->getPrice(); ?> </h4>

		<form action="" method="post">
		
				<label><span> Name </span>
					<input type="text" name="name" >
					</label>
				<br>
				<label><span>E-mail</span>
					<input type="text" name="email" >
				</label>
				<br>
				<label><span>Phone</span>
					<input type="text" name="phone" >
				</label>
				<br><br>

			<button type="submit">BUY NOW</button>
		</form>							
							

<?php require_once('includes/footer.php'); ?>