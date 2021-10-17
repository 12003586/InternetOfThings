<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "student_12003586";
$password = "5ciaGKBH5tgw";
$dbname = "student_12003586";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $waarde = $_REQUEST['waarde'];
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO Sensoren  ('$name', '$waarde')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n $waarde\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
?>

</body>
</html>