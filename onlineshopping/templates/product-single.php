<?php include 'inc/header.php'; ?>
    <div class="container-fluid">
    <h2 class="page-header"><?php echo $product->product_name; ?></h2>
    <hr>
    <img src="<?php echo $product->product_image; ?>" class="img-responsive" style="width:50%" alt="Image">
    <hr>
    <p class="lead"><?php echo $product->product_desc; ?></p>
    <p class="lead">Price: $<?php echo $product->product_price; ?></p>
    <br><br>

<div class="well">
    <a href="edit.php?id=<?php echo $product->id; ?>" class="btn btn-default">Edit</a>
    <form style="display:inline;" method="post" action="product.php">
        <input type="hidden" name="del_id" value="<?php echo $product->id;?>">
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>
</div>
<?php include 'inc/footer.php'; ?>