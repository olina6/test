<?php
echo "welcome ";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_REQUEST['name'];
    if(empty($name)){
        echo "Name is empty";
    }else{
        echo $name;
    }
}