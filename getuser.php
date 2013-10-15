<?php
$user = JFactory::getUser();
$loginuser = $user->id;
$owner = $item->owner;

echo $loginuser.'-'.$owner;

if ($loginuser == $owner){
    $allowState = 1;
    $allowDelete = 1;
} else {
    $allowState = 0;
    $allowDelete = 0;
}