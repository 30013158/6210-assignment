<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Web Application</title>
    <style type="text/css">
      .container{
        background-color: black;
        opacity: 80%;
        color: white;
      }
    </style>
  </head>
  <body class="container">
    
    <?php include "app/connection.php" ?>

    <!--navigation bar row-->
    <div class="row">

      <div class="col">
      
       <ul class="nav navbar-dark bg-dark">
        
        <!--run php loop through the database and display page names here-->
        <?php foreach($result as $page): ?>

        <li class="nav-item active">
          <a href="index.php?page='<?php echo $page['pg']; ?>'" class="nav-link"><?php echo $page['pg']; ?></a>
        </li>

        <?php endforeach; ?>

        <li class="nav-item active">
          <a href="form.php" class="nav-link">Enter a new SCP Page Record</a>
        </li>
       
       </ul>

      </div>

    </div>

     <!--database content row-->
     <div class="row">

        <div class="col">

            <?php
            
              if(isset($_GET['page']))
              {
                // remove single quotes from page get value
                $pg = trim($_GET['page'], "'");

                //run sql command to select record based on get value
                $record = $connection->query("select * from pages where pg='$pg'") or die($connection->error());

                //convert $record into an array for us to echo out the individual fields on screen.
                $row = $record->fetch_assoc();

                //create variables that hold data from all table fields
                $class = $row['class'];
                $image = $row['image'];
                $process = $row['process'];
                $description = $row['description'];
                $reference = $row['reference'];
                $add_notes = $row['add_notes'];
                $extra_1 = $row['extra_1'];
                $extra_2 = $row['extra_2'];

                //Display information on screen
                echo "
                
                    <h1>Item #: {$pg}</h1>
                    <h2>{$class}</h2>
                    <p><img src='{$image}'></p>
                    <p><h3>Special Containment Procedures:</h3>{$process}</p>
                    <p><h3>Description:</h3>{$description}</p>
                    <p><h3>Reference:</h3>{$reference}</p>  
                    <p>{$add_notes}</p>
                    <p>{$extra_1}</p>
                    <p>{$extra_2}</p>
                
                ";
              } 
              else
              {
                    //if this is the first time this page has been accessed, display content below
                    echo "
                      <h1>Welcome to this database driven SCP Foundation website</h1>
                      <p class='text-center'>Use the links above to view pages stored in the database</p>
                      <p class='text-center'><img src='images/map.jpg'></p>
                    ";
              }
           
           ?>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>