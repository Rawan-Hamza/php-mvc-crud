<?php
// controller/ProductController.php

require_once 'model/ProductModel.php';

class ProductController {
    private $model;

    public function __construct($db) {
        $this->model = new ProductModel($db);
    }

    public function index() {
        $products = $this->model->getAllProducts();
        include 'view/products.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->model->addProduct($name, $price);
            header('Location: index.php');
        } else {
            include 'view/add_product.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $this->model->updateProduct($id, $name, $price);
            header('Location: index.php');
        } else {
            $product = $this->model->getProductById($id);
            include 'view/edit_product.php';
        }
    }

    public function delete($id) {
        $this->model->deleteProduct($id);
        header('Location: index.php');
    }
}
?>
