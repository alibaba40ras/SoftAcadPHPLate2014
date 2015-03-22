<?php require_once('includes/header.php'); ?>

<h2>Dobavqne product</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        Zaglavie
        <input type="text" name="title"><br><br>
    </label>
    <label>
        Price
        <input type="text" name="price" value=""><br><br>
    </label>
    <label>
        Kartinka
        
        <input type="file" name="image"><br><br>
    </label>
    <label>
        Sadarjanie<br>
        <textarea rows="10" cols="50" name="content"></textarea><br><br>
    </label>
    <button type="submit">Dobavi</button>
</form>

<?php require_once('includes/footer.php'); ?>