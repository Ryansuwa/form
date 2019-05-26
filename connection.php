<?php
session_start();
$connection=mysqli_connect('localhost','root','','shop');

if(!$connection){
    die(mysqli_errno($connection));
}
