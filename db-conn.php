<?php
$host='localhost';
$db_name='videocards';
$user='root';
$password='';

$dsn="mysql:host=$host;dbname=$db_name";

try{
    $pdo=new PDO($dsn,$user,$password);
}
catch (PDOException $e){
    echo $e->getMessage();
}

function getBrands(){
    global $pdo;
    $query=$pdo->prepare('SELECT * FROM brand');
    $query->execute();
    $brands=$query->fetchAll(PDO::FETCH_CLASS);

    return $brands;
}

function getCards($brandId){
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM model WHERE brand_id=:id");
    $query->bindParam('id',$brandId);
    $query->execute();
    $cards=$query->fetchAll(PDO::FETCH_CLASS);

    return $cards;
}

function addCard($name){
    try{
        global $pdo;
        $query=$pdo->prepare('INSERT INTO brand (name) VALUES (:name)');
        $query->bindParam('name',$name);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }

}