
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "Alldata");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $birthday = $_REQUEST['birthday'];
        $food =  $_REQUEST['food'];
        $color = $_REQUEST['color'];
        $book = $_REQUEST['book'];
        $animal = $_REQUEST['animal'];
        $friends = $_REQUEST['friends'];
        $good = $_REQUEST['good?'];

         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO Data  VALUES ('$name',
            '$birthday','$food','$color','$book','$animal','$friends','$good')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thanks for Trusting me</h3>";
        }
          else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>