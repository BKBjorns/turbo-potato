<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="main.css" rel="stylesheet" type="text/css" >
        <title>Who picked this book?</title>
    </head>
    <body>
        <div id='container'>
            <header>
                <img src='d407ee87ac7a00479c3006c928c4ea55.png' id='headerimg'>

                <nav id='mainnav'>
                    <ul>
                        <li><a class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active': NULL ?>" href='index.php'>Home</a></li>
                        
                        <li><a class="<?php echo ($current_page == 'Aboutus.php' || $current_page == '') ? 'active': NULL ?>" href='Aboutus.php'>About us</a></li>
                        
                        <li><a class="<?php echo ($current_page == 'Browse.php' || $current_page == '') ? 'active': NULL ?>" href='Browse.php'>Browse books</a></li>
                        
                        <li><a class="<?php echo ($current_page == 'Mybooks.php' || $current_page == '') ? 'active': NULL ?>" href='Mybooks.php'>My books</a></li>
                        
                        <li><a class="<?php echo ($current_page == 'Contact.php' || $current_page == '') ? 'active': NULL ?>" href='Contact.php'>Contact</a></li>
                        
                        <li><a class="<?php echo ($current_page == 'gallery.php' || $current_page == '') ? 'active': NULL ?>" href='gallery.php'>Gallery</a></li>
                    </ul>
                </nav>
            </header>
            
            
 <?php
    //echo ($current_page == 'index.php' || $current_page == '') ? 'active' : NULL ?> 
 