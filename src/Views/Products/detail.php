<html>
<head>
    <meta charset="UTF-8">
    <title>Detail Product</title>
    <link rel="stylesheet" type="text/css" href="../Assets/Css/Products/detail.css">
</head>
<body>
    <header>
        <a href="../" class="link-home">HOME</a>
        <a href="all" class="link-products">ALL PRODUCTS</a>
        <a href="viewAdd" class="link-new-product">NEW PRODUCT</a>
    </header>
    <div class="product">
        <div class="product-title">
            <h1>PRODUCT DETAIL</h1>
        </div>
        <div href="#">
            <div style="background-image: url('../Assets/Images/Products/<?= $product["image"] ?>')" class="product-image"></div>
            <h3><?=$product["title"]?></h3>
            <p><?=$product["description"]?></p>
            <p><?=$product["price"]?></p>
            <p><?=$product["product_type"]?></p>
            <a href="delete?id=<?=$product['id']?>" class="bt-delete">DELETE</a>
            <a href="viewEdit?id=<?=$product['id']?>" class="bt-update">UPDATE</a>
        </div>
    </div>
</body>
</html>