<?php include('config.php'); ?>
<?php include("header.php"); ?>


        
<div id='browseContent'>            
               
    <h3>Search for title or authors</h3>
        <hr>
    
           <form action="Browse.php" method="POST">
               <table bgcolor="#bdc0ff" cellpadding="6">
                   <tbody>
                       <tr>
                           <td>Title:</td>
                           <td><INPUT type="text" name="searchtitle"></td>
                       </tr>

                       <tr>
                           <td>Author:</td>
                           <td><INPUT type="text" name="searchauthor"></td>
                       </tr>

                       <tr>
                           <td></td>
                           <td><INPUT type="submit" name="submit" value="Submit"></td>
                       </tr>
                   </tbody>
               </table>
            </form>  

            <h3>Book List</h3>            
        </hr>

<?php

 # Open the database
    @ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    # if we can't connect to the database 
    if ($db->connect_error) {
        echo "could not connect: " . $db->connect_error;
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }

    # This is the mysqli version

    $searchtitle = "";
    $searchauthor = "";

    if (isset($_POST) && !empty($_POST)) {
    # Get data from form
        $searchtitle = trim($_POST['searchtitle']);
        $searchauthor = trim($_POST['searchauthor']);
    }

    //	if (!$searchtitle && !$searchauthor) {
    //	  echo "You must specify either a title or an author";
    //	  exit();
    //	}


    // XSS
    //Makes unable to write html code into the search fields
    $searchtitle = htmlentities($searchtitle);
    $searchauthor = htmlentities($searchauthor);



    $searchtitle = addslashes($searchtitle);
    $searchauthor = addslashes($searchauthor);




    # Build the query. Users are allowed to search on title, author, or both

    $query = "SELECT bookid, Author, Title FROM Book";

    if ($searchtitle && !$searchauthor) { // Title search only
        $query = $query . " where Title like '%" . $searchtitle . "%'";
    }
    if (!$searchtitle && $searchauthor) { // Author search only
        $query = $query . " where Author like '%" . $searchauthor . "%'";
    }
    if ($searchtitle && $searchauthor) { // Title and Author search
        $query = $query . " where Title like '%" . $searchtitle . "%' and Author like '%" . $searchauthor . "%'"; // unfinished
    }

    //echo "Running the query: $query <br/> Title is: $searchtitle, Author is: $searchauthor"; # For debugging


      # Here's the query using an associative array for the results
    //$result = $db->query($query);
    //echo "<p> $result->num_rows matching books found </p>";
    //echo "<table border=1>";
    //while($row = $result->fetch_assoc()) {
    //echo "<tr><td>" . $row['bookid'] . "</td> <td>" . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
    //}
    //echo "</table>";


    # Here's the query using bound result parameters
         //echo "we are now using bound result parameters <br/>";
        $stmt = $db->prepare($query);
        $stmt->bind_result($bookid, $Author, $Title);
        $stmt->execute();



#problem is here!!!

    echo '<table bgcolor="#dddddd" cellpadding="6">';
    echo '<tr><b><td>Title</td> <td>Author</td> <td>ISBN</td> <td>Reserved</td> </b> </tr>';
    while ($stmt->fetch()) {
        if($Reserved==1){
            $Reserved="Yes";
            echo "<tr>";
            echo "<td>$Title</td> <td>$Author</td><td>$bookid</td>";
            echo '<td><a href="reserveBook.php?bookid=' . urlencode($bookid) . '"> Reserve </a></td>';
            echo "</tr>";
        }else{ 

                echo "<tr>";
                echo "<td>$Title</td> <td>$Author</td><td>$bookid</td>";
                echo '<td><a href="reserveBook.php?bookid=' . urlencode($bookid) . '"> Reserve </a></td>';
                echo "</tr>";

        }
    }
        echo "</table>";

?>
                
                

</div> 

        
<?php include("footer.php"); ?>
