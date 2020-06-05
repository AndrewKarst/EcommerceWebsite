<?php include_once 'config/init.php'; ?>

<?php
$product = new Product;

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($product->delete($del_id)){
        redirect('index.php', 'Product Deleted', 'success');
    } else {
        redirect('index.php', 'Product Not Deleted', 'error');
    }
}

$template = new Template('templates/product-single.php');

$product_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->product = $product->getProduct($product_id);

echo $template;