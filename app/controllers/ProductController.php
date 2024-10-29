<?php
class ProductController {
    public function index() {
        $products = Product::all();
        include '../app/views/products/index.php';
    }

    public function create() {
        if ($_POST) {
            Product::create($_POST);
            header('Location: /products');
        }
        include '../app/views/products/create.php';
    }

    public function edit($id) {
        $product = Product::find($id);
        if ($_POST) {
            Product::update($id, $_POST);
            header('Location: /products');
        }
        include '../app/views/products/edit.php';
    }

    public function delete($id) {
        Product::delete($id);
        header('Location: /products');
    }
}
?>
