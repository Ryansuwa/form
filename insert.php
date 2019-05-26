<?php
require_once "connection.php";
require_once "redirect.php";
if(!empty($_POST) && $_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $gender=isset($_POST['gender'])? $_POST['gender']:'';
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=isset($_POST['subject']) ? $_POST['subject']: '';
    $language=isset($_POST['lang']) ? implode('',$_POST['lang']):'';
    $action=$_POST['action'];

    //insert query
    $query="INSERT INTO students(name,address,gender,email,phone,subject,language)
            values ('$name','$address','$gender','$email','$phone','$subject','$language')";
    $students=mysqli_query($connection,$query);
    if($students==true){
    $_SESSION['success']='Data was successfully inserted';
    redirect_to('index');
}else{
    $_SESSION['error']='There was a problem';
    redirect_to('index');
}
}
else{
    $_SESSION['error']='Invalid Access';
    redirect_to('index.php');
    exit();
}


