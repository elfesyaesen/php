<?php
class ProductController
{
    public function products(): void
    {
        $title = 'Ürünler';
        $ProductModel = new ProductModel;

        $products = $ProductModel->products();

        // $products = ProductModel::products();



        require_once APP_ROOT . '/view/products.php';
    }

    public function product(int $product_id): void
    {
        $title = 'Ürün';
        $ProductModel = new ProductModel;

        $product = $ProductModel->product($product_id);

        require_once APP_ROOT . '/view/product.php';
    }
}
