<?php
class Product{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    // Get All Products
    public function getAllProducts(){
        $this->db->query("SELECT products.*, categories.name AS cname
                        FROM products
                        INNER JOIN categories
                        ON products.category_id = categories.id
                        ORDER BY products.id
                    ");
        // Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    // Get Categories
    public function getCategories(){
        $this->db->query("SELECT * FROM categories");
        // Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get Products By Category
    public function getByCategory($category){
        $this->db->query("SELECT products.*, categories.name AS cname
                        FROM products
                        INNER JOIN categories
                        ON products.category_id = categories.id
                        WHERE products.category_id = $category
                        ORDER BY products.id
                    ");
        // Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    //Get Category
    public function getCategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");

        $this->db->bind(':category_id', $category_id);

        // Assign Row
        $row = $this->db->single();

        return $row;
    }

    // Get Product
    public function getProduct($id){
        $this->db->query("SELECT * FROM products WHERE id = :id");

        $this->db->bind(':id', $id);

        // Assign Row
        $row = $this->db->single();

        return $row;
    }

    // Add product
    public function addProduct($data){
        // Insert Query
        $this->db->query("INSERT INTO products (category_id, product_name, product_desc, product_price)
                            VALUES (:category_id, :product_name, :product_desc, :product_price)");
        //Bind Data
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':product_name', $data['product_name']);
        $this->db->bind(':product_desc', $data['product_desc']);
        $this->db->bind(':product_price', $data['product_price']);


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // delete product
    public function delete($id) {
        // Delete Query
        $this->db->query("DELETE FROM products WHERE id = $id");

        //Execute
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    // Update product
    public function update($id, $data){
        // Insert Query
        $this->db->query("UPDATE products
            SET
            category_id = :category_id,
            product_name = :product_name,
            product_desc = :product_desc,
            product_price = :product_price
            WHERE id = $id");
        //Bind Data
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':product_name', $data['product_name']);
        $this->db->bind(':product_desc', $data['product_desc']);
        $this->db->bind(':product_price', $data['product_price']);


        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


}