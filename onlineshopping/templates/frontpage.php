<?php include 'inc/header.php'; ?>

<div class="container-fluid">
<h3>Filter Products</h3>
<form method="GET" action="index.php">
  <select name="category" class="form-control">
    <option value="0">Choose Category</option>
    <?php foreach($categories as $category): ?>
      <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
    <?php endforeach; ?>
  </select>
  <br>
  <input type="submit" class="btn btn-sm btn-success" value="FILTER">
</form>
</div>

<!--<div class="container-fluid">
  <h3><?php echo $title; ?></h3>    
    <div class="card-deck">
      <?php foreach($products as $product): ?>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-heading"><?php echo $product->product_name; ?></div>
            <div class="card-body">
              <img src="<?php echo $product->product_image; ?>" class="img-responsive" style="width:50%" alt="Image">
              <p>Price: $<?php echo $product->product_price; ?></p>
            </div>
            <div class="card-footer">
              <a class="btn btn-sm btn-success" href="product.php?id=<?php echo $product->id; ?>">Details</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
</div>-->


<div class="container-fluid">
  <h3><?php echo $title; ?></h3>
  <div class="card-deck">
  <?php foreach($products as $product): ?>
  <div class="col-sm-4">
  <div class="card">
    <img src="<?php echo $product->product_image; ?>" style="width:50%" class="card-img-top" alt="Image">
    <div class="card-body">
      <h5 class="card-title"><?php echo $product->product_name; ?></h5>
      <p class="card-text">Price: $<?php echo $product->product_price; ?></p>
    </div>
    <div class="card-footer">
      <a class="btn btn-sm btn-success" href="product.php?id=<?php echo $product->id; ?>">Details</a>
    </div>
  </div>
  </div>
  <?php endforeach; ?>
</div>
</div>

<?php include 'inc/footer.php'; ?>