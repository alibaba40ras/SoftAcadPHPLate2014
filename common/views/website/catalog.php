<?php require_once(dirname(__FILE__).'/includes/header.php'); ?>
        <div id="div1">
            <div id="div31">
                <form action="" method="post">
                <input id="search" type="text" name="search" value="<?php if ($search != '') { echo $search; }?>" placeholder="Search">
                <button type="submit">Search</button>
                    <select name="order">
                        <option value="">Order by</option>
                        <option value="name" <?php if ($order_by == 'name') { echo 'selected="selected"'; } ?>>Name</option>
                        <option value="price" <?php if ($order_by == 'price') { echo 'selected="selected"'; } ?>>Price</option>
                    </select>
                </form>
            </div>
        <?php foreach ($products as $value) { ?>
            <div id="div32">
            
                <a href="product.php?id=<?=$value->getId(); ?>">
                <img src="../storage/<?=$value->getImage(); ?>">
                </a>
                    <h3> <?php echo $value->getTitle(); ?></h3> 
                    <h4> <?php echo $value->getPrice(); ?> </h4>
                    <div class="clear"></div>
                    <p><?php echo $value->getContent(); ?></p>
            
            </div>
        <?php } ?>
        
            <div id="">
    <?php for ($i = 1; $i <= $page_count; $i++) { ?>
    <a href="index.php?c=catalog&a=index&search=<?=$search?>&order=<?$order?>&p=<?=$i;?>"><?=$i;?> |</a>
    <?php } ?>
</div>

<?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>