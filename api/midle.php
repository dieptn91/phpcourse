<?php
include 'sysConfig.php';

$idcustomer=$_POST['idcustomer'];
$namecustomer=$_POST['namecustomer'];
$idrole=$_POST['idrole'];

$conn=new sysConfig();
echo $conn->addcustomer($idcustomer,$namecustomer,$idrole);
if(isset($_POST['read'])){
    //print_r($conn->readcustomer());exit;
    //$a=$conn->readcustomer();
    foreach($conn->readcustomer() as $kq=>$value){
        echo $value['idcustomer'].'|'.$value['name'].'|'.$value['idrole'];
    }
}