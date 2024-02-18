<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Catalogue</h2>
    <table id="catalogueTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $catalogueData = array(
                    array('name' => 'Product 1', 'description' => 'Description 1', 'price' => '$10'),
                    array('name' => 'Product 2', 'description' => 'Description 2', 'price' => '$10'),
                    array('name' => 'Product 3', 'description' => 'Description 3', 'price' => '$10')
                );
            ?>

            <h2>Catalogue</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($catalogueData as $product): ?>
                        <tr>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo $product['description']; ?></td>
                            <td><?php echo $product['price']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </tbody>
    </table>

</body>
</html>
