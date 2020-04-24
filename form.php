<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Web Application</title>
  </head>
  <body class="container">
   
    <h1>Web Application</h1>
        <h2>Use the form to enter a new page record</h2>

        <form class="form-group" method="post" action="app/connection.php">
        
        <label>Page Name</label>
        <br>
        <input type="text" class="form-control" name="pg" placeholder="Page Name" required>
        <br><br>

        <label>Object Class</label>
        <br>
        <input type="text" class="form-control" name="class" placeholder="object class">
        <br><br>

        <label>Image</label>
        <br>
        <input type="text" class="form-control" name="image" placeholder="image">
        <br><br>

        <label>Special Containment Procedure</label>
        <br>
        <textarea class="form-control" name="process" rows="5"></textarea>
        <br><br>

        <label>Description</label>
        <br>
        <textarea class="form-control" name="description" rows="5"></textarea>
        <br><br>

        <label>Reference</label>
        <br>
        <textarea class="form-control" name="reference" rows="5"></textarea>
        <br><br>

        <label>Additional Notes</label>
        <br>
        <textarea class="form-control" name="add_notes" rows="6"></textarea>
        <br><br>

        <label>Extra One</label>
        <br>
        <textarea class="form-control" name="extra_1" rows="5"></textarea>
        <br><br>

        <label>Extra Two</label>
        <br>
        <textarea class="form-control" name="extra_2" rows="5"></textarea>
        <br><br>

        <input type="submit" class="btn btn-primary" name="submit" value="Submit SCP Page Data">
        
        </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>