<?php
include("config.php");
include("header.php");
include ("SQLInjection.php");
?>



<?php 

//    if(isset($_POST) && !empty($_POST)){
//        // Getting the input of username and password and comparing it to the database
//        @ $db = new mysqli('localhost', $_POST['username'], $_POST['userpass'], 'Library');
//
//        // If it does not match the datebase we get an error
//        if ($db->connect_error) {
//            echo "<h3>Not a valid username or password</h3>";
//            echo "<h3>Please try again</h3>";
//            
//        // If it is correct you get a button to upload files.
//        }else{
//             echo "<button type='button' class='uploadbtn'><a href='fileUpload.php'>Upload pictures</a></button>";
//        }
//    }
?>




<!--
<form method="POST" action="gallery.php">
    <input type='text' name='username'>
    <br>
    <input type='password' name='userpass'>
    <br>
    <input type="submit" name="loginbtn" value="Log in">

</form>
-->


<?php

    $dir = 'uploadedfiles/';
    $files = scandir($dir); // creates an array with the names of the files inside the uploadedfiles folder
    
    //echo $files;
    //print_r($files);
    foreach($files as $picture){
        echo "<img src='uploadedfiles/$picture' class='gallerypic'>";

    }
        

    
?>










<?php include("footer.php"); ?>
