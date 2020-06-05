<?php include_once 'config/init.php'; ?>

<?php
$product = new Product;

if(isset($_POST['submit'])){
    // Create Data Array
    $data = array();
    $data['product_name'] = $_POST['product_name'];
    $data['category_id'] = $_POST['category_id'];
    $data['product_desc'] = $_POST['product_desc'];
    $data['product_price'] = $_POST['product_price'];

    if($product->addProduct($data)){
        redirect('index.php', 'Your product has been added', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('templates/product-add.php');

$template->categories = $product->getCategories();

echo $template;