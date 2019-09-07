

<?php
$pass="paswdT6Sa";
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

if(!$uppercase || !$lowercase || !$number || strlen($pass)<=6){
    echo "False";
}else{
    echo "True";
}
?>

