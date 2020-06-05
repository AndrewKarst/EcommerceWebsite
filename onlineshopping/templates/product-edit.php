<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Edit Product</h2>
    <form method="post" action="edit.php?id=<?php echo $product->id; ?>">
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="product_name" value="<?php echo $product->product_name; ?>">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select type="text" class="form-control" name="category_id">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <?php if ($product->category_id == $category->id) : ?>
                        <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="product_desc" value="<?php echo $product->product_desc; ?>"></textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="product_price" value="<?php echo $product->product_price; ?>">
        </div>
        <div class="form-group">
            <label>Product Picture</label>
            <input type="file" class="form-control-file" name="product_image">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
<?php include 'inc/footer.php'; ?>