<?php 

//Database credentials
$user = "a3001315_myUser";
$pw = "Toiohomai1234";
$db = "a3001315_myApp";

//Database connection object (address, user, pw, db)
$connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));

//Create variable that stores all records from our database
$result = $connection->query("select * from pages") or die($connection->error());

//first check if form has been submitted with data
if(isset($_POST['pg']))
{
    //create variables from our posted form values
    $pg = $_POST['pg'];
    $class = $_POST['class'];
    $image = $_POST['image'];
    $process = $_POST['process'];
    $description = $_POST['description'];
    $reference = $_POST['reference'];
    $add_notes = $_POST['add_notes'];
    $extra_1 = $_POST['extra_1'];
    $extra_2 = $POST['extra_2'];

    //create an insert command
    $sql = "insert into pages(pg, class, image, process, description, reference, add_notes, extra_1, extra_2)
    values('$pg', '$class', '$image', '$process', '$description', '$reference', '$add_notes', '$extra_1', '$extra_2')
    ";

    //display success or error message on screen
    if($connection->query($sql) ===TRUE)
    {
        echo "
            <h1>Record added successfully</h1>
            <p><a href='../index.php'>Back to index page</p>
        ";
    }
    else
    {
        echo "
        <h1>Error submitting data</h1>
        <p>{$connection->error()}</p>
        <p><a href='../index.php'>Back to index page</p>
    ";
    }

}
?>