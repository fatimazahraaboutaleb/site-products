<?php
$conn = new PDO("mysql:host=localhost; dbname=products", "root", "");
$query=$conn->query("SELECT * FROM cart");
$query->execute();
$rows = $query->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php foreach($rows as $row):?>
            <tr>
                <td><?=$row->id;?></td>
                <td>
                    <?php $id=$row->id;?>
                    <?php if (@$id == 1):;?>
                    <img src="/products/hodie.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==2):;?>
                    <img src="/products/sweater.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==3):;?>
                    <img src="/products/tshirt1.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==4):;?>
                    <img src="/products/tshirt2.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==5):;?>
                    <img src="/products/totebag1.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==6):;?>
                    <img src="/products/totebag2.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==7): ;?>
                    <img src="/products/totebag3.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==8): ;?>
                    <img src="/products/notebook.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==9): ;?>
                    <img src="/products/bookmarks.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==10): ;?>
                    <img src="/products/washitape.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==11): ;?>
                    <img src="/products/stickers.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==12): ;?>
                    <img src="/products/posters.png">
                    <?php endif; ?>
                </td>
                <td><?=$row->name;?></td>
                <td><?=$row->price;?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>