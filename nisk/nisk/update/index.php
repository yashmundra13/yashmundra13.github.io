<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="container">
  <div class="row header">
    <h1>News Update Form&nbsp;</h1>
    <h3>Fill out the form below to update the news section.</h3>
  </div>
  <div class="row body">      
    <?php
         if(isset($_POST['add'])) {
            $dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
            $dbname = "nisseojd_"; // the name of the database that you are going to use for this project
            $dbuser = "niss"; // the username that you created, or were given, to access your database
            $dbpass = "Sue257n_"; 
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                      
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            mysql_select_db($dbname);
            if(! get_magic_quotes_gpc() ) {
               $title = addslashes ($_POST['title']);
               $link = addslashes ($_POST['link']);
            }else {
               $title = $_POST['title'];
               $link = $_POST['link'];
            }
            
            $date = date('Y-m-d');
            
            $sql = "INSERT INTO news ". "(newsd,link, date) ". "VALUES('$title','$link',$date)";
               
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                <ul>
                  
                  <li>
                      <label for="title">News Title</label>
                      <textarea id="title" col="40" name="title"></textarea>
                  </li>
                  
                  <li>
                      <label for="link">Link</label>
                      <input id="link" type="text" name="link"/>
                  </li>
                  
                  <li>
                    <input class="btn btn-submit" id="add" type="submit" name="add" value="Submit" />
                    <small>or press <strong>enter</strong></small>
                  </li>
                  
                </ul>
              </form>
            
            <?php
         }
      ?>  
  </div>
</div>
</body>
<html>