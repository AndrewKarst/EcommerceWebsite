<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Add a New Product</h2>
    <form method="post" action="addproduct.php">
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="product_name">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select type="text" class="form-control" name="category_id">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="product_desc"></textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="product_price">
        </div>
        <div class="form-group">
            <label>Product Picture</label>
            <input type="file" class="form-control-file" name="product_image">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
<?php include 'inc/footer.php'; ?>