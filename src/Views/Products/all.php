<html>
    <head>
        <meta charset="UTF-8">
        <title>Products</title>
        <link rel="stylesheet" type="text/css" href="../Assets/Css/Products/all.css">
    </head>
<body>
    <header>
        <a href="../" class="link-home">HOME</a>
        <a href="#" class="link-products">ALL PRODUCTS</a>
        <a href="viewAdd" class="link-new-product">NEW PRODUCT</a>
    </header>
    <div class="products">
        <div class="products-title">
            <h1>PRODUCTS</h1>
        </div>
        <div class="products-container">
            <div class="products-type">
                <h3>FOODS</h3>
                <?php
                foreach ($products as $product) {
                    if ($product['product_type'] == 'foods') {
                        ?>
                        <a href="detail?id=<?=$product['id']?>" class="item">
                            <div style="background-image: url('../Assets/Images/Products/<?= $product["image"] ?>')"></div>
                            <h3><?= $product["title"] ?></h3>
                            <p><?= $product["description"] ?></p>
                            <p><?= $product["price"] ?></p>
                            <p><?= $product["product_type"] ?></p>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="products-type">
                <h3>DRINKS</h3>
                <?php
                foreach ($products as $product) {
                    if ($product['product_type'] == 'drinks') {
                        ?>
                        <a href="detail?id=<?=$product['id']?>" class="item">
                            <div style="background-image: url('../Assets/Images/Products/<?= $product["image"] ?>')"></div>
                            <h3><?= $product["title"] ?></h3>
                            <p><?= $product["description"] ?></p>
                            <p><?= $product["price"] ?></p>
                            <p><?= $product["product_type"] ?></p>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="products-type">
                <h3>VEGETABLES</h3>
                <?php
                foreach ($products as $product) {
                    if ($product['product_type'] == 'vegetables') {
                        ?>
                        <a href="detail?id=<?=$product['id']?>" class="item">
                            <div style="background-image: url('../Assets/Images/Products/<?= $product["image"] ?>')"></div>
                            <h3><?= $product["title"] ?></h3>
                            <p><?= $product["description"] ?></p>
                            <p><?= $product["price"] ?></p>
                            <p><?= $product["product_type"] ?></p>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

</body>
</html>