<?php include_once 'config/init.php'; ?>

<?php
$product = new Product;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->products = $product->getByCategory($category);
    $template->title = 'Products In '. $product->getCategory($category)->name;
} else {
    $template->title = 'Featured Products';
    $template->products = $product->getAllProducts();
}

$template->categories = $product->getCategories();

echo $template;