<html>
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" type="text/css" href="../Assets/Css/Products/edit.css">
</head>
<body>
<header>
    <a href="../" class="link-home">HOME</a>
    <a href="all" class="link-products">ALL PRODUCTS</a>
    <a href="#" class="link-new-product">NEW PRODUCT</a>
</header>
<div class="new-product">
    <div class="new-product-title">
        <h1>NEW PRODUCT</h1>
    </div>
    <div class="new-product-form">
        <form action="edit?id=<?=$product['id']?>" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Title..." value="<?=$product['title']?>" required>
            <input type="text" name="image" placeholder="Image..." value="<?=$product['image']?>" readonly>
            <input type="text" name="description" placeholder="Description..." value="<?=$product['description']?>" required>
            <input type="number" name="price" placeholder="Price..." value="<?=$product['price']?>" required>
            <select name="product_type">
                <option value="foods"
                    <?php
                        if ($product['product_type']=='foods') {
                            echo 'selected';
                        }
                    ?>
                >Foods</option>
                <option value="drinks"
                    <?php
                        if ($product['product_type']=='drinks') {
                            echo 'selected';
                        }
                    ?>
                >Drinks</option>
                <option value="vegetables"
                    <?php
                        if ($product['product_type']=='vegetables') {
                            echo 'selected';
                        }
                    ?>
                >Vegetables</option>
            </select>
            <button type="submit" name="submit">UPLOAD</button>
        </form>
    </div>
</div>

</body>
</html>