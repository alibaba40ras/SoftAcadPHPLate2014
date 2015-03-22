<?php 
require_once('../common/bootstrap.php');

$per_page = 3;
$page = (isset($_GET['p'])?$_GET['p']:1);

$news_collection = new NewsCollection();
$news = $news_collection->get_all('date', 'desc', $per_page, ($page-1)*$per_page);

$total_count = $news_collection->getTotalCount();
$page_count = ceil($total_count/$per_page);

?>
<?php require_once('includes/header.php'); ?>
<div id="div1">
<?php foreach ($news as $value) { ?>
	<div id="div51">
		
		<h1><a href="article.php?id=<?=$value->getId(); ?>"><?=$value->getTitle(); ?></a></h1>
		<h5>Written by : <?=$value->getAuthor();?> on <?=$value->getDate();?></h5>
		<p><?=$value->getExcerpt(); ?></p>
	</div>

<?php } ?>
<div id="div55">
	<?php for ($i = 1; $i <= $page_count; $i++) { ?>
	<a href="blog.php?p=<?=$i;?>"><?=$i;?> |</a>
	<?php } ?>
</div>
<?php require_once('includes/footer.php'); ?>