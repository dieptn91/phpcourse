<?php
    class sysConfig{
        var $dbconnect;

    function __construct(){

    }

    function __destruct(){
        $this->dbconnect->close();
    }

    function connect(){
        $this->dbconnect= new mysqli('localhost','admin','','test');
        if($this->dbconnect){
            return $this->dbconnect;
        }else
            return null;
    }

    function addcustomer($idcustomer,$namecustomer,$idrole){
        $sql='insert into customers(idcustomer,name,idrole) values("'.$idcustomer.'","'.$namecustomer.'","'.$idrole.'")';
       // echo $sql;exit;
        if($this->connect()){
            $this->connect()->query($sql);
            return 1;
        }else
            return 0;
        
    }

    function readcustomer(){
        $kq=[];
        $sql='select * from customers';
       // echo $sql;exit;
        if($this->connect()){
            $result=$this->connect()->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $kq[]=$row;
                }
            }
            return $kq;
        }else
            return 0;
        
    }

}
?>