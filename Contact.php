<?php include('config.php'); ?>
             <?php include("header.php"); ?>
        
            <div id='contactformcontent'>
                <h3>Get in touch!</h3>
                <form action='' method='POST'>
                    <h4>Name:</h4>
                    <input type='text' name='name' id='contactname'>
                    <h4>Email:</h4>
                    <input type='text' name='email' id='contactemail'>
                    <h4>Message:</h4>
                    <textarea name='Message' id='contactmessage'></textarea>

                    <p><input type='submit' value='Send' class='submitbutton'></p>
                </form>

            </div>
            
            <?php include("footer.php"); ?>
