<?php
// döngüler for , foreach , while

$products = [
    ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
    ['product_id' => 2, 'name' => 'Klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
    ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'SH', 'color_name' => 'Siyah']
];


for ($i = 3; $i > -1; $i--) {
    print $products[$i]['product_id'] . ' | ' . $products[$i]['name'];
    print '<hr/>';
}

foreach ($products as $key => $product) {
    print $product['product_id'] . '<br/>';
    print $product['name'] . '<br/>';
    print $product['color_code'] . '<br/>';
    print $product['color_name'] . '<br/>';
    print '<hr/>';
}

$a = 0;
while ($a <= 10) {
    print $products[$a]['product_id'] . $products[$a]['name'];
    $a++;
}
