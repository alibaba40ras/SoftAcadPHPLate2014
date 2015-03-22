<?php require_once('includes/header.php'); ?>

<table border="1" cellpadding="5" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Content</th>
        <th>Date added</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($data as $value) { ?>
    <tr>
        <td><?php echo $value->getId();?></td>
        <td><?php echo $value->getName();?></td>
        <td><?php echo $value->getEmail();?></td>
        <td><?php echo $value->getPhone();?></td>
        <td><?php echo $value->getContent();?></td>
        <td><?php echo $value->getDate()?></td>
        <td>

            <a href="index.php?c=contacts&a=delete&id=<?php echo $value->getId();?>">Iztrii</a>
        </td>
    </tr>
    <?php } ?>
</table>
<br>
<?php require_once('includes/footer.php'); ?>