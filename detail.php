<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>models</title>
    <?php
    require_once 'db-conn.php';
    ?>
</head>
<body>
<table>
    <tr>
        <th>model naam</th>
        <th>sub naam</th>
        <th>prijs</th>
    </tr>
<?php
$brandId=$_GET['id'];
$cards=getCards($brandId);
foreach ($cards as $card){
    echo "
    <tr>
    <td>$card->name</td>
    <td>$card->sub_brand</td>
    <td>$card->price .€</td>
</tr>
";

}
?>
</table>

</body>
</html>