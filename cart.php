<?php
$conn = new PDO("mysql:host=localhost; dbname=products", "root", "");
$query=$conn->query("SELECT * FROM cart");
$query->execute();
$rows = $query->fetchAll(PDO::FETCH_OBJ);
if(@$_GET["action"]=="delete" && @$_GET["id"]){
    $id=@$_GET["id"];
    $query=$conn->prepare("DELETE FROM cart WHERE id=?");
    $query->execute([$id]);
    header("location:cart.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        table{
            width:90%;
            margin:auto;
            text-align:center;
            font-size:large;
        }
        img{
            width: 60px;
            height: 60px;
        }
        td,th{
            padding: 6px;
        }
        th{
            color:white ;
            background-color:#50C4ED;
        }
        .price{
            color:#FBA834;
        }
        button{
            background-color:#29aada;
            border:1px solid #FBA834;
            border-radius: 10px 35px;
            color:white;
            padding:6px 10px;
        }
        button:hover{
            background-color:#FBA834;
            border:1px solid #29aada;
        }
    </style>
</head>
<body>
    
    <table >
        <tr>
            <th>Id</th>
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php foreach($rows as $row):?>
            <tr>
                <td><?=$row->id;?></td>
                <td>
                    <?php $id=$row->id;?>
                    <?php if (@$id == 1):;?>
                    <img src="/projet-site/products/hodie.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==2):;?>
                    <img src="/projet-site/products/sweater.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==3):;?>
                    <img src="/projet-site/products/tshirt1.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==4):;?>
                    <img src="/projet-site/products/tshirt2.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==5):;?>
                    <img src="/projet-site/products/totebag1.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==6):;?>
                    <img src="/projet-site/products/totebag2.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==7): ;?>
                    <img src="/projet-site/products/totebag3.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==8): ;?>
                    <img src="/projet-site/products/notebook.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==9): ;?>
                    <img src="/projet-site/products/bookmarks.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==10): ;?>
                    <img src="/projet-site/products/washitape.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==11): ;?>
                    <img src="/projet-site/products/stickers.jpg">
                    <?php endif; ?>
                    <?php if (@$id ==12): ;?>
                    <img src="/projet-site/products/posters.png">
                    <?php endif; ?>
                </td>
                <td><?=$row->name;?></td>
                <td class="price"><?=$row->price;?></td>
                <td>
                    <form action="">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?=$row->id;?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>