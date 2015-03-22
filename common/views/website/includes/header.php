<?php
$pages_collection = new PagesCollection();
$pages = $pages_collection->get_all();
?>
<! DOCTYPE html>
<html>
    <head><meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Online shop</title>
        <link href="css/index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <a href="index.php"><img src="img/images-header.jpg"></a>
            <h1>Online shop</h1>
        </header>
        <div class="clear"></div>
        <div id="div0">
            <h1> Menu </h1>
                <dl>
                    <dt>    <a href="index.php">Home</a></dt>
                    <?php foreach ($pages as $value) { ?>
                    <dt>    <a href="aboutus.php?id=<?php echo $value->getId();?>"><?php echo $value->getTitle(); ?></a></dt>
                    <?php } ?>
                    <dt>    <a href="index.php?c=contacts">Contacts</a></dt>
                    <dt>    <a href="index.php?c=catalog">Catalog</a></dt>
                    <dt>    <a href="index.php?c=blog">Blog</a></dt>
                </dl>
        </div>
