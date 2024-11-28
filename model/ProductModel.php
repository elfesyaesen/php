<?php

class ProductModel extends BaseModel
{
    public function products(): array|false
    {
        $statement =  $this->pdo->query('SELECT * FROM products');
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $products ?: false;
    }

    public function product(int $product_id): array|false
    {
        $statement =  $this->pdo->prepare('SELECT * FROM products WHERE id =:asasasa');
        $statement->execute(['asasasa' => $product_id]);
        $products = $statement->fetch(PDO::FETCH_ASSOC);

        return $products ?: false;
    }
}
