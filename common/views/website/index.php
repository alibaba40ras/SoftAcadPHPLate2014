<?php require_once(dirname(__FILE__).'/includes/header.php'); ?>



        <div id="div1">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
        <?php foreach ($products as $value) { ?>
        <div id="div2">
            <a href="product.php?id=<?=$value->getId();?>">
                <img src="../storage/<?=$value->getImage(); ?>">
            </a>
            <h2> <?php echo $value->getTitle();?>
            </h2>
            <h2><?php echo $value->getPrice(); ?></h2>
            
        </div>
        <?php } ?>
        <div class="clear"></div>
        <div id="div6">
            <h2>Latest news :</h2>
        <?php foreach ($latest_news as $value) { ?>
    <p>
        <?=$value->getExcerpt(); ?>
        <a href="article.php?id=<?=$value->getId()?>">Read More...</a>
    </p>
    <?php } ?>
        </div>
<?php require_once(dirname(__FILE__).'/includes/footer.php');
