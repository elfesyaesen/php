<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $title; ?></title>
</head>

<body>
    <h1>Ürün sayfası ...</h1>
    <table>
        <tr>
            <th>Product ID</th>
            <th>ÜRÜN ADI</th>
            <th>renk kodu</th>
            <th>RENK Açıklaması</th>
        </tr>
        <?php

        if ($product) {
        ?>
            <tr>
                <td><?php print $product['id']; ?></td>
                <td><?php print $product['name']; ?></td>
                <td><?php print $product['color_code']; ?></td>
                <td><?php print $product['color_name']; ?></td>
            </tr>
        <?php }  ?>
    </table>

    <style>
        th,
        td {
            border: 1px solid #000000;
            width: 250px;
        }
    </style>

</body>

</html>