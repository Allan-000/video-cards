<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Video kaarten</title>
    <?php
    require_once 'db-conn.php';
    ?>
</head>
<body>
<table>
    <tr>
        <th>Brand name</th>
    </tr>

<?php
$brands=getBrands();
foreach ($brands as $brand){
    echo "<tr>
                <td>$brand->name</td>
                <td><a href='detail.php?id=$brand->id'>Kaarten kijken</a></td>
               </tr>";
}
?>

</table>
<br>
<hr>
<br>

<h4><a href="addBrand.php">nieuwe merk toevoegen...</a></h4>
</body>
</html>