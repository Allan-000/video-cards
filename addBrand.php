<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
    require_once 'db-conn.php';
    if(isset($_POST['submit'])){
        $newBrandName=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
        if(!empty($newBrandName)){
            $toAddbrand=addCard($newBrandName);
            echo "<script>alert('kaart toegevoegd')</script>";
            header("Location: /videocards-assignment/index.php");
        }
        else{
            echo "<script>alert('Oeps, probeer opnieuw')</script>";
        }
    }
    ?>
</head>
<body>
<h2>nieuwe merk toevoegen...</h2>
<br><br>
<form action="" method="post">
    <input type="text" name="name" placeholder="nieuwe merk naam">
    <br><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
