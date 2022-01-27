<?php

$dbhost="localhost";
$dbname="tours";
$username="root";
$password="";
$db= new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

if(!$db){
    echo 'error';
}

function get_single_by_id($id){
    global $db;  
    if(!$id){
  $id=1;
 } 
    $singles=$db->query("SELECT * FROM tour WHERE id=$id" );
    foreach ($singles as $single)
        return $single;
}
?>
