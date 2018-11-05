<?php
$password=$_POST['password'];
function format_str($pstr)
{
$rstr=strip_tags(addslashes(trim($pstr)));

return $rstr;
}

?>
