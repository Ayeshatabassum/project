<?php

Class DB
{
    public function dbconnect()
    {
       $con=mysqli_connect("localhost","root","","Myproject");
        mysqli_select_db($con,"Myproject");
        if($con)
        echo "database gets connected ";
    }
}


?>