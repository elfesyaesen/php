<?php
// koşullu ifadeler if -else -else if , swith case

$products = [
    ['product_id' => 1, 'name' => 'Bilgisayar', 'color_code' => 'SH', 'color_name' => 'Siyah'],
    ['product_id' => 2, 'name' => 'Klavye', 'color_code' => 'BZ', 'color_name' => 'Beyaz'],
    ['product_id' => 3, 'name' => 'Monitör', 'color_code' => 'SH', 'color_name' => 'Siyah']
];

if (is_array($products)) {
    print_r($products);
} else {
    print 'Bu bir dizi değildir.';
}

if (isset($products)) {
    print_r($products);
} else {
    print 'Bu bir değişken tanımlı değildir.';
}

if (isset($products[3])) {
    print_r($products);
} else if (empty($products)) {
    print 'Bu bir değişkenin değeri boştur.';
} else {
    print 'herhangi bir koşul sağlanamadı.';
}

if ($products[0]['product_id'] > 2) {
    print $products[0]['name'];
}

switch ($products[0]['product_id']) {
    case 2:
        print $products[1]['name'];
        break;
    case 1:
        print $products[0]['name'];
        break;
    case 3:
        print $products[2]['name'];
        break;
    default:
        print $product_name . ' : default koşulu çalıştı.';
        break;
}
