<?php include_once 'config/init.php'; ?>

<?php
$product = new Product;

$product_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
    // Create Data Array
    $data = array();
    $data['product_name'] = $_POST['product_name'];
    $data['category_id'] = $_POST['category_id'];
    $data['product_desc'] = $_POST['product_desc'];
    $data['product_price'] = $_POST['product_price'];

    if($product->update($product_id, $data)){
        redirect('index.php', 'Your product has been added', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('templates/product-edit.php');

$template->product = $product->getProduct($product_id);

$template->categories = $product->getCategories();

echo $template;