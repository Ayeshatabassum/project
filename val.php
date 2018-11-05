<?php
$password=$_POST['password'];

function format_str($pstr)
{
$rstr=strip_tags(addslashes(trim($pstr)));
if(strlen($rstr)>6)
{
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    if(!$uppercase || !$lowercase || !$number || !ctype_alnum($password)) 
    {
        echo "The password must contain at least 1 lowercase letter, 1 uppercase letter and 1 number.";
        echo "The password must contain special symbols.";
    }
     else
    return $rstr;


}
else  echo"password length should be grater than and equal to 5";

}

?>