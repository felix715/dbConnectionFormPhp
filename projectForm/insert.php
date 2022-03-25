<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To insert page</title>
</head>
<body>
    <center>
    <?php 
    
    $conn = mysqli_connect("localhost","root","","staff");

    // to check connection
    if($conn === false){
        die("Error: Could Not Connect.".mysqli_connect_error());
    } 
    // taking all the 5 values from the form fields i.e (input)
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];

    // performing insert query execution and table name is university
    $sql = "INSERT INTO university VALUES ('$first_name','$last_name','$gender','$address','$email')";
    if(mysqli_query($conn,$sql)){
        echo nl2br("<h3>Successfully stored data on the database."
        ."\n\nPlease browse your localhost php myadmin\n\n"
        ."To view the updated data</h3>");

        echo nl2br("\n$first_name\n$last_name\n"
        ."$gender\n $address\n $email");
    }
    else{
        echo "Error: Hush! sorry $sql."
             . mysqli_error($conn);
    }
    // close the connection
    mysqli_close($conn);   
    ?>
    </center>
</body>
</html>