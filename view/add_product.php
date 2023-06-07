<!-- view/add_product.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>
        <form action="index.php?action=add" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
