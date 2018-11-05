<?php
class user 
{
public function login($uemail,$upassword)
{
    
        require_once "dbconnect.php";
       
        $sql_chk="select * from user_tbl where password='$upassword' AND email='$uemail'";
        
            $resultset=mysqli_query(mysqli_connect("localhost","root","","Myproject"),$sql_chk);
            $count=mysqli_num_rows($resultset);
            if ($count == 1)
            {
                $row=mysqli_fetch_assoc($resultset);
                session_start();
                $_SESSION['name']=$row['name'];
                $_SESSION['user_id']=$row['user_id'];
      
                
               echo "login successful";
               
           }
            else 
            {
                
                header('location: loginscreen.php');
           echo "Username or Password is invalid";
           }
    }
    
}
extract($_POST);
if (isset($Logme))
{
    $obj=new user;
    $obj->login($email,$password);
}
else echo "not set";
?>