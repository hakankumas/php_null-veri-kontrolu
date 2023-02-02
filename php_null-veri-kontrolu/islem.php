<?php
$db = new PDO("mysql:host=localhost; dbname=deneme1; charset=utf8", 'root','');

if($db){
    $adi= $_POST["adi"];
    $soyadi= $_POST["soyadi"];
    $departman= $_POST["departman"];
    $maas= $_POST["maas"];
    if($adi == NULL){
        $adi = NULL;
    }
    if($soyadi == NULL){
        $soyadi = NULL;
    }
    if($departman == NULL){
        $departman = NULL;
    }
    if($maas == NULL){
        $maas = NULL;
    }
    if($adi == NULL AND $soyadi == NULL AND $departman == NULL AND $maas == NULL){
        echo "Tüm bilgileri boş bıraktınız!</br>";
        echo "Lütfen bilgilerinizi doldurunuz!";
        header('Refresh:5; index.php');
    }
    $sorgu = $db->prepare('INSERT INTO personel SET adi =?, soyadi =?, departman =?, maas =?');
    $ekle = $sorgu->execute([$adi, $soyadi, $departman, $maas]);
    header('Refresh:3; index.php');
}




?>