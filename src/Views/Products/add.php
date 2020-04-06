<html>
<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" type="text/css" href="../Assets/Css/Products/add.css">
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
            <form action="add" method="post" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Title..." required>
                <input type="text" name="image" placeholder="Image..." required>
                <input type="text" name="description" placeholder="Description..." required>
                <input type="number" name="price" placeholder="Price..." required>
                <select name="product_type">
                    <option value="foods" selected>Foods</option>
                    <option value="drinks">Drinks</option>
                    <option value="vegetables">Vegetables</option>
                </select>
                <input type="file" name="file" required>
                <button type="submit" name="submit">UPLOAD</button>
            </form>
        </div>
    </div>

</body>
</html>