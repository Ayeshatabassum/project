<?php
require_once"dbconnect.php";

class user extends DB
{
public function register($uname,$uemail,$upassword)
{
    $this->dbconnect();
    $sql_qry="insert into user_tbl(name,email,password) values('$uname','$uemail','$upassword')";
    $res=mysqli_query(mysqli_connect("localhost","root","","Myproject"),$sql_qry);
    if($res)
    echo"registeration success";
    else
    echo"registeration failed";
}
}
extract($_POST);
if(isset($register))
{
    $obj=new user;
    $obj->register($name,$email,$password);
}
?>
















