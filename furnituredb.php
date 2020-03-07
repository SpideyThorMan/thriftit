<?php

$category= "furnishing and appliances ";
$ad_title = $_POST['ad_title'];
$description = $_POST['description'];
$price = $_POST['price'];
$contact = $_POST['Mnumber'];
$photo= $_POST['pic'];


include 'db.php';

$sql ="INSERT INTO ads(category, ad_title, description, price, contact_number)VALUES('$category','$ad_title','$description','$price','$contact')";
$result = mysqli_query($conn, $sql);

if($result){
    header('Location:home.php');
}
 

?>